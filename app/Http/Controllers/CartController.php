<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
use App\Models\CustomerCreditCards;
use App\Models\CommissionLevel;
use App\Models\Bonuses;
use App\Models\UserRoles;
use App\Helpers\Helper;
use App\Models\TempUsers;

class CartController extends Controller
{
	private $user;
	private $shoppingCart;
    private $items_in_cookie;

	public function __construct(){

		// check if user is logged in or not
        if( is_numeric( session()->get('user_id') ) ){

            $this->user = Users::find(session()->get('user_id'));
            $this->user->is_guest = false;
            $this->shoppingCart = $this->getShoppingCart();

        }
        else{
            
            $this->user = TempUsers::where('user_id',Helper::getItemsFromCookie())->first();

            if( !$this->user ){
                $new = new TempUsers;
                $new->user_id = Helper::getItemsFromCookie();
                $new->first_name = 'Guest';
                $new->save();

                $this->user = $new;
            }

            $this->user->is_guest = true;
            $this->shoppingCart = $this->getShoppingCart();

        }

	}

	public function addToCart(Request $request){

        $user_id_col = $this->user->is_guest ? 'user_id' : 'id';

		\Log::info("addto cart for {$this->user->{$user_id_col}}");

		\Log::info("shoppingcart = $this->shoppingCart->id");

		$itemCount = $this->shoppingCart->addToCart($this->user->{$user_id_col},$request->get('productId'));

		\Log::info("itemCount = {$itemCount}");
		
		return json_encode(['itemCount' => $itemCount]);

    }

	public function getShoppingCart(){

        $column = $this->user->is_guest ? 'temp_user_id' : 'user_id';

        $user_id_col = $this->user->is_guest ? 'user_id' : 'id';

		$shoppingCart = ShoppingCarts::where($column, $this->user->{$user_id_col})->first();
        if (!$shoppingCart) {
            $shoppingCart = new ShoppingCarts;
            $shoppingCart->{$column} = $this->user->{$user_id_col};
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

        $data['u'] = Users::find(session()->get('user_id'));

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
        $user = Users::find($data['user_id']);
        if($user){
            $referralLink = "http://demoview.org/referred/$user->id";
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

        $userRoles = $data['userRoles'] ? : ['','no'];

        $column = $this->user->is_guest ? 'temp_user_id' : 'user_id';

        $user_id_col = $this->user->is_guest ? 'user_id' : 'id';

        $shoppingCart = ShoppingCarts::where($column, $userId)->first();
       
        $items = $this->getProducts($shoppingCart);
        $totalPrice = 0;
        $payPrice = 0;
        $totalWeight = 0;
        $totalItems = 0;
        $totalShipping = 0;

        foreach ($items as $item) {
            $price = (@$userRoles[1] == 'yes') ? $item->member : $item->non_member;

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
            ->where(function ($query) {
                $query->whereNull('shopping_cart_items.transaction_processing')
                    ->orWhere('shopping_cart_items.transaction_processing',  '<', 3);
            })
            ->where('shopping_cart_items.quantity','>',0)
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
        if($this->user->is_guest){
            $user = TempUsers::where('user_id',$userId)->first();
        }
        else{
            $user = Users::find($userId);
        }

        if( !$user ){

            $user = new \stdClass();
            $user->id = 0;
            $user->addr1 = '';
            $user->addr2 = '';
            $user->first_name = '';
            $user->last_name = '';
            $user->postal_code = '';
            $user->city = '';
            $user->state = '';
        }

        $addr1 = ($user) ? $user->addr1:'';
        $addr2 = ($user) ? $user->addr2:'';
        $fn = ($user) ? $user->first_name:'';
        $ln = ($user) ? $user->last_name:'';
        $pc = ($user) ? $user->postal_code:'';
        $st = ($user) ? $user->city:'';
        $ct = ($user) ? $user->state:'';
        
        $results = "<tr>";
        $results .= "<td class='noBorder'>Shipping Address:</td>";
        $results .= "<td class='noBorder'><div class='inline'>";
        $results .= "$fn $ln<br>$addr1<br>";
        if ($addr2) {
            $results .= "$addr2<br>";
        }
        $results .= " $ct,  $st<br>$pc";
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
        return 0.00;
        
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

    public function addNewShippingAddress(Request $request){
        $shipping = new ShippingAddresses;

        if( is_numeric($request->get('user_id')) ){
            $data['temp_id'] = null;
            $data['user_id'] = $request->get("user_id");
        }
        else{
            $data['user_id'] = null;
            $data['temp_id'] = $request->get("user_id");
        }

        $data = [
            'shipping_name'  => $request->get('shipping_name'),
            'shipping_addr1' => $request->get('shipping_addr1'),
            'shipping_addr2' => $request->get('shipping_addr2'),
            'city'           => $request->get('city'),
            'state'          => $request->get('state'),
            'country'        => $request->get('country'),
            'postal_code'    => $request->get('postal_code')  
        ];

        $shipping->fill($data);

        $shipping->save();

        return response()->json([
            'error' => false,
            'msg' => 'Successfully added new Shipping Address'
        ]);
    }

    public function loadSelShipping($userId, $data, $request, $shipping_id)
    {
        $user = Users::find($userId);

        if( !$user ){

            $user = new \stdClass();
            $user->id = 0;
            $user->addr1 = '';
            $user->addr2 = '';
            $user->first_name = '';
            $user->last_name = '';
            $user->postal_code = '';
            $user->city = '';
            $user->state = '';
        }

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
            
            $data['u'] = Users::find(session()->get('user_id'));

            return view('shoppingcart', $data);

    }

    public function shippingAddresses($user, $shippingadd)
    {
        //huh?
        $results = "<select name='ShippingAddress' onchange='updateAddress(this)'>";

        $results .= "<option value=''>-Select Address-</option>";

        if ($user->addr1 > '') {
            $user_sele = ($shippingadd == 0) ? 'selected="selected"' : '';
            $results .= "<option value='0' ".$user_sele.">User Address</option>";
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

    public function purchase(Request $request) {
        //$request->session()->set('grandTotal', "1.20");
        $userId = $request->session()->get('user_id');
        $colum = $this->user->is_guest ? 'temp_user_id' : 'user_id';

        $shoppingCart = ShoppingCarts::where($colum, $userId)->first();

        $items = $this->updateItems($shoppingCart);
        $data = $this->userData($request);

        // Check if shopping cart have debit card in basket, 
        // if It have then Okay show the add Distributer registration form.
        $temp_items = ShoppingCartItems::where('shopping_cart_id',$shoppingCart->id)
                    ->whereHas('product',function($q){
                        $q->where('product_name','Eco-nomix Debit Cards');
                    })
                    ->get();

        if( $temp_items->count() > 0 ){
            $request->session()
                      ->put('debit_card_exists_in_cart',1);
        }
        else{
            $request->session()
                     ->put('debit_card_exists_in_cart',0);
        }

        include_once(app_path() . '/Http/Controllers/usa_cities_states.php');
        $data['cities_states'] = $cities_states;
        $data['states'] = $state_list;
        
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
        $billingName = $request->input('billing_name');
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
    public function cardPurchase(Request $request) {
        // $request->session()->set('grandTotal', "1.20");
        $grandTotal = $request->session()->get('grandTotal');
        $billingName = $request->input('billing_name');
        $creditCard = $request->input('credit_card');
        $exmonth = $request->input('month');
        $exyear = $request->input('year');
        //$exyear = substr($exyear, -2);
        $securityCode = $request->input('security_code');
        $data = $this->userData($request);
        
        $api_resp = $this->processAPI($request);
       
        $data['api_resp'] = $api_resp;
        if ( $api_resp['approved'] == false ) {
            $data['grand_total'] = $grandTotal;
            $data['approval_code'] = isset($api_resp['response_code'])?$api_resp['response_code']:'';
            $data['error_code'] = $api_resp['response'];
            $data['credit_card'] = $creditCard;
            $data['pay_method'] = $api_resp['pay_method'];
            $this->reloadSales($request);
            return view('transaction_denied', $data);

        } else {
            $data['grand_total'] = $grandTotal;
            $data['approval_code'] = isset($api_resp['response_code'])?$api_resp['response_code']:'';;
            $data['error_code'] = $api_resp['response'];
            $data['credit_card'] = $creditCard;
            $data['pay_method'] = $api_resp['pay_method'];
            $data['transaction'] = $this->updateSales($request, $api_resp);
            $data['transaction_number'] = $api_resp['transaction_number'];
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
        $colum = $this->user->is_guest ? 'temp_user_id' : 'user_id';
        $shoppingCart = ShoppingCarts::where($colum, $userId)->first();
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
        $salesTransaction->transaction_approval_code = $approved['response_code'];
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
        return $salesTransaction->id;
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
        $grandTotal = $request->session()->get('grandTotal');
        $grandTotal = number_format($grandTotal,2) * 100;
        $billingName = $request->input('billing_name');
        $creditCard = $request->input('credit_card');
        $exmonth = $request->input('month');
        $exyear = $request->input('year');
        $securityCode = $request->input('security_code');
        $transaction_date = date("Y-m-d H:i:s");
        //$ccType = 'Visa';//  get actual type from API
        //$approved = ['date'=>$transaction_date,'approval_code'=>'12345abcded','error'=>'','credit_card'=>$creditCard, 'pay_method'=>$ccType];
       // $disapproved = ['date'=>$transaction_date,'approval_code'=>'denied','error'=>'website in development - not a problem with your card','credit_card'=>$creditCard,'pay_method'=>$ccType];
        
        $expy = substr($exyear, -2);
        $expDate = $exmonth.$expy;
        $invNum = ($request->input('invNum'))?$request->input('invNum'):'123456';
        
        /* Live credentials */
        $api_url = 'https://epay.propay.com/api/propayapi.aspx';
        $cert_str = '694a6da2e8f462191261a1cca76ce8';
        $owner_propay_account_no = '32560413';

        /* Demo Credentials */
        // $api_url = 'https://xmltest.propay.com/api/propayapi.aspx';
        // $cert_str = 'ca08a19ee8f439598dd407055aa1ae';

        $post_data = $_POST;
        // $owner_propay_account_no = '32303991';
        //print_r($post_data);
        $envelope = '<?xml version="1.0"?>
             <!DOCTYPE Request.dtd>
             <XMLRequest>
                 <certStr>' . $cert_str . '</certStr>
                 <class>partner</class>
                 <XMLTrans>
                     <transType>04</transType>
                     <accountNum>'.$owner_propay_account_no.'</accountNum>
                     <amount>' . $grandTotal . '</amount>
                     <ccNum>' . $creditCard . '</ccNum>
                     <expDate>' . $expDate . '</expDate>
                     <CVV2>' . $securityCode . '</CVV2> 
                     <cardholderName>' . $billingName . '</cardholderName>
                     <addr>' . $request->input('address1') . '</addr>
                     <aptNum>' . $request->input('address2') . '</aptNum>
                     <city>' . $request->input('city') . '</city>
                     <state>' . $request->input('state') . '</state>
                     <zip>' . $request->input('postal_code') . '</zip>
                     <comment1>' . $request->input('comment1') . '</comment1>
                     <invNum>' . $invNum . '</invNum>
                 </XMLTrans>    
             </XMLRequest>';
        
        //echo "<h2>Request</h2>";
        //print_r($envelope);
        
        $header = array(
        "Content-type:text/xml; charset=\"utf-8\"",
        "Accept: text/xml"
        );

        $MSAPI_Call = curl_init();
        //Change the following URL to point to production instead of integration
        curl_setopt($MSAPI_Call, CURLOPT_URL, $api_url);
        curl_setopt($MSAPI_Call, CURLOPT_TIMEOUT, 30);
        curl_setopt($MSAPI_Call, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($MSAPI_Call, CURLOPT_POST, true);
        curl_setopt($MSAPI_Call, CURLOPT_POSTFIELDS, $envelope);
        curl_setopt($MSAPI_Call, CURLOPT_HTTPHEADER, $header);
        curl_setopt($MSAPI_Call, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($MSAPI_Call, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($MSAPI_Call, CURLOPT_HTTPAUTH, CURLAUTH_ANY);

        $api_response = curl_exec($MSAPI_Call);
        $err = curl_error($MSAPI_Call);
        curl_close($MSAPI_Call);
        
        //URL::to(Config::get('assets.' . $type) . '/' . $file)
        
        
        $response_status = simplexml_load_file(dirname(__FILE__).'/MSAPI_Response.xml');
        $result = simplexml_load_string($api_response); 
        //Pretty Print response
        $api_result = new \DOMDocument('1.0');
        $api_result->preserveWhiteSpace = false;
        $api_result->formatOutput = true;
        $api_result->loadXML($api_response);
        
        $resp = array();
        $resp['creditCard'] = $creditCard;
        $resp['credit_card'] = $creditCard;
        $resp['pay_method'] = "Credit/Debit Card";
        $resp['date'] = $transaction_date;
        if(isset($result->XMLTrans->status))  {
            $status = $result->XMLTrans->status;
            if($status != '00') {
                
                $status = '_'.$status;          
                $resp['status'] = $response_status->status->$status;
                $resp['response'] = "Transaction may not have completed successfully";
                $resp['response'] .= "\nTransaction Status: " . $resp['status']; 
                if(isset($result->XMLTrans->responseCode)) {
                    $response_code = $result->XMLTrans->responseCode;
                    $response_code = '_'.$response_code;
                    $resp['response_code'] = $response_status->responseCode->$response_code;
                    $resp['response'] .= "\nResponse Code: " . $resp['response_code'];
                }
                if(isset($result->XMLTrans->CVV2Resp)) {
                    $CVV2_response = $result->XMLTrans->CVV2Resp;
                    $CVV2_response = '_'.$CVV2_response;
                    $resp['CVV2_response'] = $response_status->CVV2Resp->$CVV2_response;
                    $resp['response'] .= "\nCVV2 Response: " . $resp['CVV2_response']; 
                }
                $resp['response'] .= "\n";
                $resp['response'] .= $api_result->saveXML();
                $resp['approved'] = false;
                
                
            } else {
                $resp['account_number'] = $result->XMLTrans->accountNum;
                $resp['transaction_number'] = $result->XMLTrans->transNum;
                $resp['authorization_code'] = $result->XMLTrans->authCode;
                $AVS = $result->XMLTrans->AVS;
                $AVS = '_'.$AVS;    
                $resp['AVS'] = $response_status->AVS->$AVS;
                $response_code = $result->XMLTrans->responseCode;
                $response_code = '_'.$response_code;
                $resp['response_code'] = $response_status->responseCode->$response_code;                
                $resp['response'] = "Transaction completed successfully";
                $status = '_'.$status;          
                $resp['status'] = $response_status->status->$status;
                $resp['response'] .= "\nTransaction Status: " . $resp['status']; 
                $resp['response'] .= "\nAccount Number: " . $resp['account_number'];    
                $resp['response'] .= "\nTransaction Number: " . $resp['transaction_number'];
                $resp['response'] .= "\nAuthorization Number: " . $resp['authorization_code'];
                $resp['response'] .= "\nAVS Code: " . $resp['AVS'];
                $resp['response'] .= "\nResponse Code: " . $resp['response_code'];
                if(isset($result->XMLTrans->CVV2Resp))
                {
                    $CVV2_response = $result->XMLTrans->CVV2Resp;
                    $CVV2_response = '_'.$CVV2_response;
                    $resp['CVV2_response'] = $response_status->CVV2Resp->$CVV2_response;
                    $resp['response'] .= "\nCVV2 Response: " . $CVV2_response; 
                }

                $resp['approved'] = true;
            }
        }  else {
            $resp['response'] = "Unknwn Error";
            $resp['approved'] = false;
            //print_r($api_result->saveXML());
        }
        //echo "<h2>Response</h2>";
        //print_r($resp);
        
        $resp['envelope'] = $envelope;
        
        return $resp;

    }
}
?>