<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

use App\Http\Controllers\Controller;

use App\Models\SalesTransactionDetails;

use App\Models\UserStores;

use App\Models\Products;

class SalesController extends Controller
{

    public function index($user, Request $request)
    {

        $data['user_id'] = session()->get('user_id');
        // Fetch user's stores
        $stores = UserStores::where('user_id', $data['user_id'])->get();
        $products = [];

        foreach ($stores as $store) {
            $product= Products::where('store_id', $store->id)->get();

            foreach ($product as $p) {
                $products[] = $p->id;
            }
        }

        // checked sold products
        $data['sales_details'] = SalesTransactionDetails::whereIn('product_id', $products)->orderBy('id', 'desc')->get();

        foreach ($data['sales_details'] as $s_d) {
            $u = Users::find($s_d->purchased_by);

            if ($u) {
                $s_d->purchaser = $u->first_name.' '.$u->last_name;
            } else {
                $s_d->purchaser = '';
            }

            $p = Products::find($s_d->product_id);

            if ($p) {
                $s_d->product_name = $p->product_name;
                $s_d->qty = $s_d->qty;
                $s_d->price = $s_d->amount;
            } else {
                $s_d->product_name = '';
                $s_d->qty = $s_d->qty;
                $s_d->price = $s_d->amount;
            }
        }

        $data['title'] = '';
        $data['description'] = '';
        $data['user_name'] = session()->get('user_name');
        $data['username'] = session()->get('username');
        return view('sales_progress', $data);
    }



    public function updateStatus(Request $request)
    {
        $de = SalesTransactionDetails::find($request->get('id'));

        if ($de) {
            $de->status = $request->get('status');

            if ($de->save() && ($de->status > 0)) {
                //Mail purchaser regarding shipped Item
                $this->__sendStatusEmail($de);
            }

            return redirect()->route('distributor.sales.progress', [
                                'user' => session()->get('user_id')
                            ])->with('success', 'Updated status!');
        }
        return redirect()->route('distributor.sales.progress', ['user' => session()->get('user_id')])->with('fail', 'Unable to update status, please try again!');
    }

    public function adminSalesUpdateStatus(Request $request)
    {

        $de = SalesTransactionDetails::find($request->get('id'));



        if ($de) {
            $de->status = $request->get('status');

            if ($de->save()) {
                //Mail purchaser regarding shipped Item

                if ($request->get('status')) {
                    $us = \App\Models\Users::find($de->purchased_by);



                    if ($us) {
                        $htmlContent = '<html>

					                        <body>

					                            <h3>

					                                Products Shipped

					                            </h3>

					                    	</body>

					                	</html>';



                        $headers = "MIME-Version: 1.0" . "\r\n";

                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                        $headers .= 'From: KineticGold<projectmanager24x7@gmail.com>' . "\r\n";



                        $subject = 'Product Shipped';



                        mail($us->email, $subject, $htmlContent, $headers);
                    }
                }
            }



            $product = \App\Models\Products::find($de->product_id);



            if ($product->store_id) {
                $type = 'distributor';
            } else {
                $type = 'website';
            }



            return redirect()->route('admin.product.history', ['type' => $type])->with('success', 'Updated status!');
        }



        return redirect()->route('admin.product.history')->with('fail', 'Unable to update status, please try again!');
    }

    private function __sendStatusEmail($details)
    {

        $purchaser_details = \App\Models\Users::find($details->purchased_by);
        if (!$purchaser_details) {
            $purchaser_details = 'Guest';
        }

        $admin_te = \App\Models\Users::find(1);
        $item = $details->product;

        if ($item->store_id) {
            $store = \App\Models\UserStores::find($item->store_id);

            if ($store) {
                $user = \App\Models\Users::find($store->user_id);
                if ($user) {
                    $products['product_owner'] = [
                        'id' => $user->id,
                        'name' => $user->first_name .' '.$user->last_name,
                        'type' => 'Distributor'
                    ];
                } else {
                    $products['product_owner'] = [
                        'name' => $admin_te->first_name .' '.$admin_te->last_name,
                        'type' => 'Admin'
                    ];
                }
            } else {
                $products['product_owner'] = [
                    'name' => $admin_te->first_name .' '.$admin_te->last_name,
                    'type' => 'Admin'
                ];
            }
        } else {
            $products['product_owner'] = [
                'name' => $admin_te->first_name .' '.$admin_te->last_name,
                'type' => 'Admin'
            ];
        }
        $products['product_name']=ucwords($item->product_name);

        if ($purchaser_details == 'Guest') {
            $products['purchaser_name'] = 'Guest';
        } else {
            $products['purchaser_name'] = $purchaser_details->first_name .' '.$purchaser_details->last_name;
        }

        $products['qty'] = $details->qty;
        $products['price'] = $item->retail * $details->qty;


        // Shipping Address
        $sales_transaction = \App\Models\SalesTransactions::find($details->transaction_id);
        if ($sales_transaction->shipping_id) {
            $shipping_id = $sales_transaction->shipping_id;
            $is_s_e = \App\Models\ShippingAddresses::find($shipping_id);

            if ($is_s_e) {
                $add = $is_s_e->shipping_name;
                $add .= ' '.$is_s_e->shipping_addr1;
                $add .= ' '.$is_s_e->shipping_addr2;
                $add .= ' '.$is_s_e->city.' '.$is_s_e->state;
                $add .= ' '.$is_s_e->country.' '.$is_s_e->postal_code;
            } else {
                $add = $purchaser_details->first_name .' '. $purchaser_details->last_name;
                $add .= ' '.$purchaser_details->addr1;
                $add .= ' '.$purchaser_details->addr2;
                $add .= ' '.$purchaser_details->city.' '.$purchaser_details->state;
                $add .= ' '.$purchaser_details->country.' '.$purchaser_details->postal_code;
            }
        } else {
            $add = $purchaser_details->first_name .' '. $purchaser_details->last_name;
            $add .= ' '.$purchaser_details->addr1;
            $add .= ' '.$purchaser_details->addr2;
            $add .= ' '.$purchaser_details->city.' '.$purchaser_details->state;
            $add .= ' '.$purchaser_details->country.' '.$purchaser_details->postal_code;
        }
        $total = $products['price'];

        if ($details->status == 2) {
            $d_status = 'Delievered';
        } elseif ($details->status == 1) {
            $d_status = 'Shipped';
        } else {
            $d_status = 'Pending';
        }


        $user_html = '<html>
                        <body>
                            <h3>
                                Products Purchased by you is '.$d_status.'
                            </h3>
                            <table>
                                <thead>
                                    <th>Product Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>'.$products["product_name"].'</td>
                                        <td>'.$products["qty"].'</td>
                                        <td>'.$products["price"].'</td>
                                    </tr>
                                </tbody>
                        </table>
                        <h3>
                            <strong>Total : </strong> '.$total.'<br/>
                            <strong>Shipping Address : </strong> '.$add.'<br/>
                            <strong>Status : '.$d_status.'</string>
                        </h3>
                    </body>
                </html>';

        $admin_html = '<html>
                    <body>
                        <h3>
                            Products Sold on site is '.$d_status.'
                        </h3>
                        <table>
                            <thead>
                                <th>Product Owner</th>
                                <th>Product Name</th>
                                <th>Purchaser Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>'.$products["product_owner"]["type"].' - '. $products["product_owner"]["name"] .'</td>
                                    <td>'.$products["product_name"].'</td>
                                    <td>'.($purchaser_details == "Guest" ? "GUEST" : ($purchaser_details->first_name." ".$purchaser_details->last_name)).'</td>
                                    <td>'.$products["qty"].'</td>
                                    <td>'.$products["price"].'</td>
                                </tr>
                            </tbody>
                    </table>
                    <h3>
                        <strong>Total : </strong> '.$total.'<br/>
                        <strong>Shipping Address : </strong> '.$add.'<br/>
                        <strong>Status : '.$d_status.'</string>
                    </h3>
                </body>
            </html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: KineticGold<projectmanager24x7@gmail.com>' . "\r\n";

        if (strtolower($products['product_owner']['type']) == 'distributor') {
            $dis_html = '<html>
                    <body>
                        <h3>
                            Product is '.$d_status.'
                        </h3>
                        <table>
                            <thead>
                                <th>Product Name</th>
                                <th>Purchaser Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>'.$products["product_name"].'</td>
                                    <td>'.($purchaser_details == "Guest" ? "GUEST" : ($purchaser_details->first_name." ".$purchaser_details->last_name)).'</td>
                                    <td>'.$products["qty"].'</td>
                                    <td>'.$products["price"].'</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3>
                            <strong>Total : </strong> '.$total.'<br/>
                            <strong>Shipping Address : </strong> '.$add.'<br/>
                            <strong>Status : '.$d_status.'</string>
                        </h3>
                    </body>
                </html>';
            $dis = \App\Models\Users::find($products['product_owner']['id']);

            mail($dis->email, 'Products is '.$d_status, $dis_html, $headers);
        }

        // send mail to user
        mail($purchaser_details->email, 'Product is '.$d_status, $user_html, $headers);

        // Send Email to Admin
        $subject = 'Product Purchased by ';
        if ($purchaser_details == 'Guest') {
            $subject .= $purchaser_details;
        } else {
            $subject .= $purchaser_details->first_name .' '.$purchaser_details->last_name;
        }
        $subject .= ' is '. $d_status;
        mail('checkasadmn@gmail.com', $subject, $admin_html, $headers);
    }

    public function userData($request)
    {

        $ecosponsor = $request->cookie('ecosponsor');

        $data['ecosponsor'] = $ecosponsor;

        \Log::info("ecosponsor7 = $ecosponsor");

        $data['user_name'] = $request->session()->get('user_name');

        $data['username'] = $request->session()->get('username');

        $username = $request->session()->get('user_name');

        $roles = $request->session()->get('userRoles');

        \Log::info("username7 = $username");

        $data['user_id'] = $request->session()->get('user_id');

        $user = Users::find($data['user_id']);

        if ($user) {
            $referralLink = "http://KineticGold.org/referred/$user->id";
        } else {
            $referralLink = "Not Logged in";
        }

        $data['referral_link'] = $referralLink;

        $data['errors'] = [];

        $data['userRoles'] = $roles;

        $data['KineticGold_url'] = 'test';

        $data['homePage'] = 'homePage';

        $data['title'] = '';

        $data['description'] = 'Cart';

        return $data;
    }
}
