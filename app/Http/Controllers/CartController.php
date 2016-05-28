<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\ShoppingCarts;
use App\Models\ShoppingCartItems;
use App\Models\ShippingAddresses;
use App\Models\SalesTransactions;
use App\Models\SalesTransactionDetails;
use App\Models\CommissionLevel;
use App\Models\Bonuses;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $username = $request->session()->get('user_name');
        $userId = $request->session()->get('user_id');
        \Log::info("addto cart for $userId");
        $productId = $request->input('productId');
        $shoppingCart = $this->getShoppingCart($userId);
        \Log::info("shoppingcart = $shoppingCart->id");
        $itemCount = $shoppingCart->addToCart($userId, $productId);
        \Log::info("itemCount=$itemCount");
        return json_encode(['itemCount' => $itemCount]);
    }

    public function getShoppingCart($userId)
    {
        $shoppingCart = ShoppingCarts::where('user_id', $userId)->first();
        if (!$shoppingCart) {
            $shoppingCart = new ShoppingCarts;
            $shoppingCart->user_id = $userId;
            $shoppingCart->save();
        }
        return $shoppingCart;
    }

    public function viewCart(Request $request)
    {
        $data = $this->userData($request);
        $data = $this->loadShoppingCart($data['user_id'], $data);
        $data = $this->loadShipping($data['user_id'], $data, $request);
        $request->session()->set('totalPrice', $data['totalPrice']);
        $request->session()->set('totalWeight', $data['totalWeight']);
        $request->session()->set('totalWeightShipping', $data['totalWeightShipping']);
        $request->session()->set('payPrice', $data['payPrice']);
        $request->session()->set('totalShipping', $data['totalShipping']);
        $request->session()->set('grandTotal', $data['grandTotal']);
        return view('shoppingcart', $data);
    }

    public function userData($request)
    {
        $ecosponsor = $request->cookie('ecosponsor');
        $data['ecosponsor'] = $ecosponsor;
        \Log::info("ecosponsor = $ecosponsor");
        $data['user_name'] = $request->session()->get('user_name');
        $data['username'] = $request->session()->get('username');
        $username = $request->session()->get('user_name');
        $roles = $request->session()->get('userRoles');
        \Log::info("username = $username");
        $data['user_id'] = $request->session()->get('user_id');
        $user = Users::find($userId);
        if($user){
            $referralLink = "http://eco-nomix.org/referred/$user->id";
        }else{
            $referralLink = "Not Logged in";
        }
        $data['referral_link'] = $referralLink;
        $data['errors'] = [];
        $data['userRoles'] = $roles;
        $data['economix_url'] = 'test';
        $data['homePage'] = 'homePage';
        $data['title'] = '';
        $data['description'] = 'Cart';
        return $data;
    }

    public function loadShoppingCart($userId, $data)
    {
        $result = "<tr><td></td><td colspan='2'  class='text-center'>item</td><td  class='text-center'>quantity</td><td  class='text-center'>Unit Price</td><td  class='text-center'>Ext. Price</td><td class='text-center'>Weight</td></tr>";
        \Log::info("userid=$userId");
        $userRoles = $data['userRoles'];

        $shoppingCart = ShoppingCarts::where('user_id', $userId)->first();
        $items = $this->getProducts($shoppingCart);
        $totalPrice = 0;
        $payPrice = 0;
        $totalWeight = 0;
        $totalItems = 0;
        $totalShipping = 0;
        foreach ($items as $item) {
            $price = ($userRoles[1] == 'yes') ? $item->member : $item->non_member;
            $extPrice = $price * $item->quantity;

            $disExtPrice = number_format($extPrice, 2);
            $extWeight = $item->shipping_weight * $item->quantity;
            $extShipping = $item->shipping_handling * $item->quantity;
            $result .= '<tr>';
            $result .= "<td class='w70'><img src='/images/" . $item->image . "' width='70px'></td>";
            $result .= "<td title='Enter 0 in quantity to remove item' colspan='2'><b>$item->product_name</b><br>$item->description<br>$item->Author</td>";
            //  $result .=   "<td>$item->quantity</td>";
            $result .= "<td class='text-center'><input title='Enter 0 to remove item' class='quantity' type='text' data-id='$item->id' value='$item->quantity'></td>";
            $result .= "<td class='text-center'>$price</td>";
            $result .= "<td class='text-center'>$disExtPrice</td>";
            $result .= "<td class='text-center'>$extWeight</td>";
            $result .= "</tr>";
            $totalPrice += $extPrice;
            $totalWeight += $extWeight;
            $totalItems += $item->quantity;
            $totalShipping += $extShipping;
            if ($item->pay_bonus == 1) {
                $payPrice += $extPrice;
            }

        }
        $result .= "<tr>";
        $displayTotal = number_format($totalPrice, 2);
        $result .= "<td>Total</td><td colspan='2'></td><td class='text-center'>$totalItems</td><td></td><td class='text-center'>$ $displayTotal</td><td class='text-center'>$totalWeight lbs</td>";
        $result .= "</tr>";
        $data['shoppingCart'] = $result;
        $data['totalPrice'] = $totalPrice;
        $data['totalWeight'] = $totalWeight;
        $data['payPrice'] = $payPrice;
        $data['totalShipping'] = $totalShipping;
        return $data;
    }

    public function getProducts($shoppingCart)
    {

        $items = ShoppingCartItems::select('shopping_cart_items.*', 'products.member', 'products.non_member', 'products.shipping_weight', 'products.image', 'products.product_name', 'products.description', 'products.Author', 'products.pay_bonus')
            ->join('products', 'products.id', '=', 'shopping_cart_items.product_id')
            ->where('shopping_cart_items.shopping_cart_id', $shoppingCart->id)
            ->where('shopping_cart_items.transaction_processing', '<', 3)
            ->get();
        foreach ($items as $item) {
            $item->transaction_processing = 1;
            $item->save();
        }

        return $items;
    }

    public function updateItems($shoppingCart)
    {
        $items = ShoppingCartItems::where('shopping_cart_items.shopping_cart_id', $shoppingCart->id)
            ->where('shopping_cart_items.transaction_processing', '=', 1)
            ->update(['transaction_processing'=>2]);

    }

    public function processApprovedItems($shoppingCart)
    {

        $items = ShoppingCartItems::where('shopping_cart_items.shopping_cart_id', $shoppingCart->id)
            ->where('shopping_cart_items.transaction_processing', '=', 2)
            ->update(['transaction_processing'=>3]);
        $items = ShoppingCartItems::query()
            ->join('products', 'products.id', '=', 'shopping_cart_items.product_id')
            ->where('shopping_cart_items.shopping_cart_id', $shoppingCart->id)
            ->where('shopping_cart_items.transaction_processing', '=', 3)
            ->get();
        return $items;
    }

    public function processPaidItems($shoppingCart)
    {

        $items = ShoppingCartItems::where('shopping_cart_items.shopping_cart_id', $shoppingCart->id)
            ->where('shopping_cart_items.transaction_processing', '=', 3)
            ->delete();

        return $items;
    }

    public function updateQuantity(Request $request)
    {
        $itemId = $request->input('itemId');
        $quantity = $request->input('quantity');
        \Log::info("itemId=$itemId  quantity=$quantity");
        if ($quantity > 0) {
            $item = ShoppingCartItems::find($itemId);
            $item->quantity = $quantity;
            $item->save();
        } else {
            $item = ShoppingCartItems::find($itemId)->delete();
        }
        return json_encode('ok');
    }

    public function loadShipping($userId, $data, $request)
    {
        $user = Users::find($userId);
        $results = "<tr>";
        $results .= "<td class='noBorder'>Shipping Address:</td>";
        $results .= "<td class='noBorder'><div class='inline'>";
        $results .= "$user->first_name $user->last_name<br>$user->addr1<br>";
        if ($user->addr2 > '') {
            $results .= "$user->addr2<br>";
        }
        $results .= "$user->city, $user->state<br>$user->postal_code";
        $results .= "</div></td>";
        $shippingadd = $request->input('shippingadd');
        $results .= "<td class='noBorder'>" . $this->shippingAddresses($user,$shippingadd) . "</td>";
        $results .= "<td class='noBorder'>" . $this->shippingMethod($request) . "</td>";
        $totalWeightShipping = $this->shippingAmount($request);
        $results .= "<td class='text-center noBorder'>Shipping Amount:</td><td class='text-center noBorder'>$" . $totalWeightShipping . "</td><td class='noBorder'>&nbsp;</td>";

        $results .= "</tr>";
        $data['totalWeightShipping'] = $totalWeightShipping;
        $total = $data['totalPrice'] + $totalWeightShipping + $data['totalShipping'];
        $data['grandTotal'] = $total;
        $results .= "<tr><td  class='noBorder'colspan='4'></td><td class='noBorder text-center'>Grand Total</td><td class='noBorder text-center'>$ $total</td>";
        $results .= "<td class='noBorder'><input type='submit' value='Continue'></td></tr>";
        $data['shipping'] = $results;

        return $data;
    }

    public function shippingAmount(Request $request)
    {
        $totalWeight = $request->input('totalWeight');

        $shippingMethod = $request->input('shippingMethod');
        if ($shippingMethod == '') $shippingMethod = 'upsground';
        if ($shippingMethod == 'upsground') return 9.99;
        if ($shippingMethod == 'ups3Day') return 8.99;
        if ($shippingMethod == 'upsNextAir') return 14.99;
        if ($shippingMethod == 'FedEx') return 16.99;
        if ($shippingMethod == 'USPS') return 7.99;
    }

    public function addShippingAddress(Request $request)
    {
        $userId = $request->session()->get('user_id');
        $shipping = new ShippingAddresses;
        $shipping->user_id = $userId;
        $shipping->shipping_name = $request->input('shipping_name');
        $shipping->shipping_addr1 = $request->input('shipping_addr1');
        $shipping->shipping_addr2 = $request->input('shipping_addr2');
        $shipping->city = $request->input('shipping_city');
        $shipping->state = $request->input('shipping_state');
        $shipping->postal_code = $request->input('shipping_postal_code');
        $shipping->save();
        $data = $this->userData($request);
        $roles = $request->session()->get('userRoles');
        $data['userRoles'] = $roles;
        $data = $this->loadShoppingCart($data['user_id'], $data);
        $request->session()->set('shippingId',$shipping->id);
        $data = $this->loadSelShipping($data['user_id'], $data, $request, $shipping->id);
        $request->session()->set('totalPrice', $data['totalPrice']);
        $request->session()->set('totalWeight', $data['totalWeight']);
        $request->session()->set('totalWeightShipping', $data['totalWeightShipping']);
        $request->session()->set('payPrice', $data['payPrice']);
        $request->session()->set('totalShipping', $data['totalShipping']);
        $request->session()->set('grandTotal', $data['grandTotal']);
        return view('shoppingcart', $data);
    }

    public function loadSelShipping($userId, $data, $request, $shipping_id)
    {
        $user = Users::find($userId);
        $shipping = ShippingAddresses::find($shipping_id);
        $results = "<tr>";
        $results .= "<td class='noBorder'>Shipping Address:</td>";
        $results .= "<td class='noBorder'><div class='inline'>";
        $results .= "$shipping->shipping_name<br>$shipping->shipping_addr1<br>";
        if ($shipping->shipping_addr2 > '') {
            $results .= "$shipping->shipping_addr2<br>";
        }
        $results .= "$shipping->city, $shipping->state<br>$shipping->postal_code";
        $results .= "</div></td>";

        $results .= "<td class='noBorder'>" . $this->shippingAddresses($user,$shipping_id) . "</td>";
        $results .= "<td class='noBorder'>" . $this->shippingMethod($request) . "</td>";
        $totalWeightShipping = $this->shippingAmount($request);
        $results .= "<td class='text-center noBorder'>Shipping Amount:</td><td class='text-center noBorder'>$" . $totalWeightShipping . "</td><td class='noBorder'>&nbsp;</td>";

        $results .= "</tr>";
        $data['totalWeightShipping'] = $totalWeightShipping;
        $total = $data['totalPrice'] + $totalWeightShipping + $data['totalShipping'];
        $data['grandTotal'] = $total;
        $results .= "<tr><td  class='noBorder'colspan='4'></td><td class='noBorder text-center'>Grand Total</td><td class='noBorder text-center'>$ $total</td>";
        $results .= "<td class='noBorder'><input type='submit' value='Continue'></td></tr>";
        $data['shipping'] = $results;

        return $data;
    }

    public function changeShippingAddress($shippingId,Request $request)
    {
        if($shippingId == -1)
        {
            $data = $this->userData($request);
            return view('new_shipping_address', $data);

        }

            $data = $this->userData($request);
            $data = $this->loadShoppingCart($data['user_id'], $data);
            if($shippingId == 0) {
                $data = $this->loadShipping($data['user_id'], $data, $request);
            }else{
                $data = $this->loadSelShipping($data['user_id'], $data, $request, $shippingId);
            }
            $request->session()->set('shippingId',$shippingId);
            $request->session()->set('totalPrice', $data['totalPrice']);
            $request->session()->set('totalWeight', $data['totalWeight']);
            $request->session()->set('totalWeightShipping', $data['totalWeightShipping']);
            $request->session()->set('payPrice', $data['payPrice']);
            $request->session()->set('totalShipping', $data['totalShipping']);
            $request->session()->set('grandTotal', $data['grandTotal']);
            return view('shoppingcart', $data);

    }

    public function shippingAddresses($user, $shippingadd)
    {
        //huh?
        $results = "<select name='ShippingAddress' onchange='updateAddress(this)'>";;
        if ($user->addr1 > '') {
            $results .= "<option value='0'>User Address</option>";
        }
        $shippingaddresses = ShippingAddresses::where('user_id', $user->id)->get();
        foreach ($shippingaddresses as $shippingaddress) {
            $selected = ($shippingaddress->id == $shippingadd)?'selected':'';
            $results .= "<option value='$shippingaddress->id' $selected>$shippingaddress->shipping_name $shippingaddress->city</option>";
        }
        $results .= "<option value='-1'>Add New Address</option>";
        return $results;
    }


    public function shippingMethod($request)
    {
        $choosenMethod = $request->input('shippingMethod');
        $results = "<select name='shippingMethod'>";
        $selected = ($choosenMethod == 'upsground') ? 'selected' : '';
        $results .= "<option value='upsground' $selected>UPS Ground</option>";
        $selected = ($choosenMethod == 'ups3Day') ? 'selected' : '';
        $results .= "<option value='ups3day' $selected>UPS 3 Day Select</option>";
        $selected = ($choosenMethod == 'upsNextAir') ? 'selected' : '';
        $results .= "<option value='upsNextAir' $selected>UPS Next Day Air</option>";
        $selected = ($choosenMethod == 'FedEx') ? 'selected' : '';
        $results .= "<option value='FedEx' $selected>FedEx</option>";
        $selected = ($choosenMethod == 'USPS') ? 'selected' : '';
        $results .= "<option value='USPS'$selected>USPS</option>";
        $results .= "</select>";
        return $results;
    }

    public function purchase(Request $request)
    {
        $userId = $request->session()->get('user_id');
        $shoppingCart = ShoppingCarts::where('user_id', $userId)->first();
        $items = $this->updateItems($shoppingCart);
        $data = $this->userData($request);
        $data['totalPrice'] = $request->session()->get('totalPrice');
        $data['grandTotal'] = $request->session()->get('grandTotal');
        $data['shippingMethod'] = $request->input('shippingMethod');
        $data['totalWeightShipping'] = $request->session()->get('totalWeightShipping');
        $data['payPrice'] = $request->session()->get('payPrice');
        $request->session()->set('transactionPayPrice', $request->session()->get('payPrice'));
        $request->session()->set('transactionTotalPrice', $request->session()->get('totalPrice'));
        $request->session()->set('transactionGrandTotal', $request->session()->get('grandTotal'));
        $request->session()->set('transactionTotalWeightShipping', $request->session()->get('totalWeightShipping'));
        $request->session()->set('transactionTotalShipping', $request->session()->get('totalShipping'));
        $data['totalShipping'] = $request->session()->get('totalShipping');
        return view('purchase', $data);
    }

    public function checkPurchase(Request $request)
    {

        $grandTotal = $request->session()->get('grandTotal');
        $billingName = $request->input('billingName');
        $creditCard = $request->input('credit_card');
        $exmonth = $request->input('month');
        $exyear = $request->input('year');
        $securityCode = $request->input('security_code');
        $approved = $this->processAPI($request);
        $data = $this->userData($request);
        if ($approved['approval_code'] == 'denied') {
            $data['grand_total'] = $grandTotal;
            $data['approval_code'] = $approved['approval_code'];
            $data['error_code'] = $approved['error'];
            $data['credit_card'] = $approved['credit_card'];
            $data['pay_method'] = $approved['pay_method'];
            $this->reloadSales($request);
            return view('transaction_denied', $data);

        } else {
            $data['grand_total'] = $grandTotal;
            $data['approval_code'] = $approved['approval_code'];
            $data['error_code'] = $approved['error'];
            $data['credit_card'] = $approved['credit_card'];
            $data['pay_method'] = $approved['pay_method'];
            $data['transaction'] = $this->updateSales($request, $approved);
            $request->session()->set('shippingId',0);
            $request->session()->set('transactionPayPrice', 0);
            $request->session()->set('transactionTotalPrice', 0);
            $request->session()->set('transactionGrandTotal', 0);
            $request->session()->set('transactionTotalWeightShipping', 0);
            $request->session()->set('transactionTotalShipping', 0);
            return view('transaction_approved', $data);
        }
    }

    public function reloadSales(Request $request)
    {
        $userId = $request->session()->get('user_id');
        $shoppingCart = ShoppingCarts::where('user_id', $userId)->first();
        $items = ShoppingCartItems::where('shopping_cart_items.shopping_cart_id', $shoppingCart->id)
            ->update(['transaction_processing'=>1]);
    }

    public function updateSales(Request $request, $approved)
    {
        $userId = $request->session()->get('user_id');
        $roles = $request->session()->get('userRoles');
        $user = Users::find($userId);
        $shoppingCart = ShoppingCarts::where('user_id', $userId)->first();
        $items = $this->processApprovedItems($shoppingCart);

        $payPrice = $request->session()->get('transactionPayPrice');
        $salesTransaction = new SalesTransactions;
        $salesTransaction->date = $approved['date'];
        $salesTransaction->purchased_by = $userId;
        $salesTransaction->total_items = $request->session()->get('transactionTotalPrice');
        $shipping = $request->session()->get('transactionTotalWeightShipping') + $request->session()->get('transactionTotalShipping');
        $salesTransaction->total_shipping = $shipping;
        $salesTransaction->total_order = $request->session()->get('transactionGrandTotal');
        $salesTransaction->payment_method = 1;
        $salesTransaction->pay_bonus_on_amt = $request->session()->get('payPrice');
        $salesTransaction->credit_card_id = $approved['credit_card'];
        $salesTransaction->payment_type = $approved['pay_method'];
        $salesTransaction->transaction_approval_code = $approved['approval_code'];
        $salesTransaction->transaction_approval_date = $approved['date'];
        $salesTransaction->first_id = $user->sponsor_id;
        $salesTransaction->second_id = $user->second_id;
        $salesTransaction->third_id = $user->third_id;
        $salesTransaction->fourth_id = $user->fourth_id;
        $salesTransaction->fifth_id = $user->fifth_id;
        $salesTransaction->shipping_id = $request->session()->get('shippingId');
        $salesTransaction->save();
        $this->updateSalesDetails($salesTransaction, $items, $roles);
        $this->updateBonuses($salesTransaction, $user,$roles);
        $items = $this->processPaidItems($shoppingCart);
        return 1000000+$salesTransaction->id;
    }

    public function updateBonuses($sales, $user)
    {
        $this->addBonus($user->id, $sales->id, $user->sponsor_id, $sales->pay_bonus_on_amt, 1);
        $this->addBonus($user->id, $sales->id, $user->second_id, $sales->pay_bonus_on_amt, 2);
        $this->addBonus($user->id, $sales->id, $user->third_id, $sales->pay_bonus_on_amt, 3);
        $this->addBonus($user->id, $sales->id, $user->fourth_id, $sales->pay_bonus_on_amt, 4);
        $this->addBonus($user->id, $sales->id, $user->fifth_id, $sales->pay_bonus_on_amt, 5);
    }

    public function addBonus($purchaser_id, $transaction_id, $payee_user_id, $pay_amount, $level)
    {
        $commission = CommissionLevel::where('role_id',1)->where('sales_level',$level)->first();
        $percentage = $commission->percentage;
        $amount = $pay_amount * $percentage*.01;
        $bonus = new Bonuses;
        $bonus->purchaser_id = $purchaser_id;
        $bonus->transaction_id = $transaction_id;
        $bonus->payee_user_id = $payee_user_id;
        $bonus->amount = $amount;
        $bonus->level = $level;
        $bonus->save();
    }


    public function updateSalesDetails($salesTransaction, $items,  $roles)
    {
        foreach($items as $item)
        {
            $salesDetails = new SalesTransactionDetails;
            $salesDetails->transaction_id = $salesTransaction->id;
            $salesDetails->date = $salesTransaction->date;
            $salesDetails->purchased_by = $salesTransaction->purchased_by;
            $price = ($roles[1] == 'yes')?$item->member:$item->non_member;
            $salesDetails->amount = $price;
            $salesDetails->product_id= $item->id;
            $salesDetails->pay_bonus = $item->pay_bonus;
            $salesDetails->shipping = $item->cost_shipping;
            $salesDetails->save();
        }
    }


    public function processAPI($request)
    {
        $grandTotal =  $request->session()->get('grandTotal');
        $billingName = $request->input('billingName');
        $creditCard = $request->input('credit_card');
        $exmonth = $request->input('month');
        $exyear = $request->input('year');
        $securityCode = $request->input('security_code');
        $transaction_date = time();
        $ccType = 'Visa';//  get actual type from API
        $approved = ['date'=>$transaction_date,'approval_code'=>'12345abcded','error'=>'','credit_card'=>$creditCard, 'pay_method'=>$ccType];
        $disapproved = ['date'=>$transaction_date,'approval_code'=>'denied','error'=>'website in development - not a problem with your card','credit_card'=>$creditCard,'pay_method'=>$ccType];
        return $approved;

    }

}