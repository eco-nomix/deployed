<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\DistributorCommission;
use App\Models\Bonuses;
use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\EcoDebitCards;
use App\Models\SalesTransactionDetails;
use App\Models\Withdrawals;
use App\Models\Roles;
use App\Models\Feedback;

class AccountsController extends Controller
{
	public function user(){
		$data = $this->userData(request());

		$data['referal_commission'] = Bonuses::where('payee_user_id',session()->get('user_id'))
												->with('transactionDetails')
												->has('transactionDetails')
												->get();

		$data['total_r_c'] = 0;

		foreach ($data['referal_commission'] as $rc) {
			
			$sales_details = SalesTransactionDetails::where('transaction_id',$rc->transaction_id)->first();

			$product =Products::find($sales_details->product_id);

			$rc->product_name = $product->product_name;


			$rc->product_amt = $sales_details->amount;

			$temp_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$sales_details->date);

			if( isset($temp_date) ){
				$rc->date = $temp_date->format('m-d-Y');
			}
			else{
				$rc->date = '-';
			}

			$data['total_r_c'] += $rc->amount;
		}

		$data['is_user_have_debit_card'] = EcoDebitCards::where('user_id',session()->get('user_id'))->first();

		return view('users-accounts',$data);
	}
	
	public function productHistory(){

		$data = $this->userData(request());

		$user = \App\Models\Users::find(session()->get('user_id'));

		$data['history'] = false;

		if( $user ){

			$shopping_cart = \App\Models\ShoppingCarts::where('user_id',$user->id)->first();

			if( $shopping_cart ){

				$items = \App\Models\SalesTransactionDetails::where('purchased_by',$user->id)
																->orderBy('id','desc')
																->get();

				if( count($items) > 0 ){
					$data['history'] = true;

					foreach ($items as $item) {

						$item->product_name = $item->product->product_name;
						$item->price = $item->amount;

						if( $item->status == 2 ){
							$item->status = 'Delievered';
						}
						elseif( $item->status == 1 ){
							$item->status = 'Shipped';
						}
						else{
							$item->status = 'Pending';
						}
					}

					$data['items'] = $items;
				}
			}
		}

		return view('user-product-history',$data);
	}

	public function distributor(){
		$data = $this->userData(request());

		$data['is_user_have_debit_card'] = EcoDebitCards::where('user_id',session()->get('user_id'))->first();

		$temp_distributor_commission = DistributorCommission::where('user_id',session()->get('user_id'))->with('transactionDetails')->has('transactionDetails')->get();

		$data['total_d_c'] = 0;

		foreach ($temp_distributor_commission as $tdc) {
			if( !$tdc->transactionDetails ){
				continue;
			}
			$product =Products::find($tdc->transactionDetails->product_id);
			
			if( $product ){
				$tdc->product_name = $product->product_name;
			}
			else{
				$tdc->product_name = '';
			} 

			$temp_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$tdc->transactionDetails->date);

			if( isset($temp_date) ){
				$tdc->date = $temp_date->format('m-d-Y');
			}
			else{
				$tdc->date = '-';
			}

			$data['total_d_c'] += $tdc->amount;
		}

		$data['distributor_commission'] = $temp_distributor_commission;

		$data['referal_commission'] = Bonuses::where('payee_user_id',session()->get('user_id'))->get();

		$data['total_r_c'] = 0;

		foreach ($data['referal_commission'] as $rc) {
			
			$sales_details = SalesTransactionDetails::where('transaction_id',$rc->transaction_id)->first();

			$product =Products::find($sales_details->product_id);

			$rc->product_name = $product->product_name;


			$rc->product_amt = $sales_details->amount;

			$temp_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$sales_details->date);

			if( isset($temp_date) ){
				$rc->date = $temp_date->format('m-d-Y');
			}
			else{
				$rc->date = '-';
			}

			$data['total_r_c'] += $rc->amount;
		}

		return view('distributor-accounts',$data);
	}

	public function getComplaintPage(){
		$data = $this->userData(request());

		$user = \App\Models\Users::find(session()->get('user_id'));

		$data['history'] = false;

		if( $user ){

			$shopping_cart = \App\Models\ShoppingCarts::where('user_id',$user->id)->first();

			if( $shopping_cart ){

				$items = \App\Models\SalesTransactionDetails::where('purchased_by',$user->id)
																->orderBy('id','desc')
																->get();
				if( count($items) > 0 ){
					$data['history'] = true;
					foreach ($items as $item) {
						$item->product_name = $item->product->product_name;
						$item->price = $item->amount;						
					}
					$data['items'] = $items;
				}
			}
		}
				
		return view('complaint_page',$data);
	}

	public function distributorProductHistory(){
		$data = $this->userData(request());

		$user = \App\Models\Users::find(session()->get('user_id'));

		$data['history'] = false;

		if( $user ){

			$shopping_cart = \App\Models\ShoppingCarts::where('user_id',$user->id)->first();

			if( $shopping_cart ){

				$items = \App\Models\SalesTransactionDetails::where('purchased_by',$user->id)
																->orderBy('id','desc')
																->get();

				if( count($items) > 0 ){
					
					$data['history'] = true;

					foreach ($items as $item) {

						$item->product_name = $item->product->product_name;
						$item->price = $item->amount;
						
					}

					$data['items'] = $items;
				}
			}
		}

		return view('user-product-history',$data);
	}

	public function userData($request){
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
            $referralLink = "http://KineticGold.org/referred/$user->id";
        }else{
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

    public function admin(){
		$data = $this->userData(request());

		$temp_distributor_commission = DistributorCommission::query();

		if( (request()->get('type') == 'distributor') && request()->get('id') ){
			$temp_distributor_commission->where('user_id',request()->get('id'));		
		}

		$temp_distributor_commission = $temp_distributor_commission->with('transactionDetails')
																	->has('transactionDetails')
																	->orderBy('id','desc')->get();

		$data['total_d_c'] = 0;

		foreach ($temp_distributor_commission as $tdc) {

			$product =Products::find($tdc->transactionDetails->product_id);
			
			if( $product ){
				$tdc->product_name = $product->product_name;
			}
			else{
				$tdc->product_name = '';
			} 

			$temp_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$tdc->transactionDetails->date);

			if( isset($temp_date) ){
				$tdc->date = $temp_date->format('m-d-Y');
			}
			else{
				$tdc->date = '-';
			}

			$temp_owner = \App\Models\Users::find($tdc->user_id);
			$tdc->owner = $temp_owner ? ($temp_owner->first_name.' '.$temp_owner->last_name):'';

			$data['total_d_c'] += $tdc->amount;
		}

		$data['distributor_commission'] = $temp_distributor_commission;

		$data['referal_commission'] = Bonuses::query();

		if( (request()->get('type') == 'user') && request()->get('id') ){
			$data['referal_commission']->where('payee_user_id',request()->get('id'));		
		}

		$data['referal_commission'] = $data['referal_commission']->with('transactionDetails')
																	->has('transactionDetails')
																	->orderBy('id','desc')->get();

		$data['total_r_c'] = 0;

		foreach ($data['referal_commission'] as $rc) {

			$sales_details = SalesTransactionDetails::where('transaction_id',$rc->transaction_id)->first();

			$product =Products::find($sales_details->product_id);

			$rc->product_name = $product->product_name;


			$rc->product_amt = $sales_details->amount;

			$temp_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$sales_details->date);

			if( isset($temp_date) ){
				$rc->date = $temp_date->format('m-d-Y');
			}
			else{
				$rc->date = '-';
			}

			$temp_owner = \App\Models\Users::find($rc->payee_user_id);

			$rc->owner = $temp_owner ? ($temp_owner->first_name .' '. $temp_owner->last_name) : '';

			$data['total_r_c'] += $rc->amount;
		}

		// Distributor List

		$user_list = \App\Models\Users::all();

		$data['user_list'] = [];
		$data['distributor_list'] = [];

		foreach ($user_list as $l) {
			$l_store = \App\Models\UserStores::where('user_id',$l->id)->first();
			
			if( $l_store ){
				$data['distributor_list'][] = [
					'id' => $l->id,
					'name' => $l->first_name .' '. $l->last_name,
				];
			}
			else{
				$data['user_list'][] = [
					'id' => $l->id,
					'name' => $l->first_name .' '. $l->last_name,
				];
			}
		}

		return view('admin-accounts',$data);
	}

	public function adminProductHistory(){

		$stores = \App\Models\UserStores::all();

		$products = [];

		foreach ($stores as $store) {
			$product= Products::where('store_id',$store->id)->get();

			foreach ($product as $p) {
				$products[] = $p->id;
			}
		}

		// checked sold products
		$temp_query = SalesTransactionDetails::query();

		if( request()->get('type') == 'distributor' ){
			$temp_query->whereIn('product_id',$products);
		}
		elseif( request()->get('type') == 'website' ){
			$temp_query->whereNotIn('product_id',$products);	
		}

		if( request()->get('owner') ){
			$req_user_id = request()->get('owner');

			$temp_query->whereHas('product',function($q) use($req_user_id){
				$q->whereHas('store',function($r) use($req_user_id){
					$r->where('user_id',$req_user_id);
				});
			});
		}

		if( request()->get('purchaser') ){
			$temp_query->where('purchased_by',request()->get('purchaser'));
		}

		if( !is_null(request()->get('status')) ){
			$temp_query->where('status',request()->get('status'));
		}

		$data['total'] = $temp_query->count();
		$data['sales_details'] = $temp_query->orderBy('id','desc')->paginate(10);
		$data['purchaser'] = [];

		foreach ($data['sales_details'] as $s_d) {

			if( in_array($s_d->product_id, $products) ){
				$s_d->flag = false;
			}
			else{
				$s_d->flag = true;
			}

			$u = Users::find($s_d->purchased_by);

			if( $u ){
				$s_d->purchaser = $u->first_name.' '.$u->last_name;
			}
			else{
				$s_d->purchaser = '';
			}

			if( $u ){
				if( !in_array($u->id, $data['purchaser']) ){
					$data['purchaser'][$u->id] = $s_d->purchaser;
				}
			}

			$p = Products::find($s_d->product_id);

			if( $p ){
				$s_d->product_name = $p->product_name;
				$s_d->qty = 1;
				$s_d->price = $s_d->amount;

				if( $p->store_id ){
					// find store of product
					$stor = \App\Models\UserStores::find($p->store_id);
					$stor_ow = \App\Models\Users::find($stor->user_id);
					$s_d->owner = $stor_ow->first_name.' '.$stor_ow->last_name;
				}
				else{
					$s_d->owner = 'Website';
				}
			}
			else{
				$s_d->product_name = '';
				$s_d->qty = 1;
				$s_d->price = $s_d->amount;
			}
		}

		$data['title'] = '';
		$data['description'] = '';
		$data['user_name'] = session()->get('user_name');
        $data['username'] = session()->get('username');

        $data['list_of_dist'] = Users::where('is_distributor','11')->get();


        // Pagination
        if( !request()->get('page') || request()->get('page') <= 0 ){
			$page_num = 1;
		}
		else{
			$page_num = request()->get('page');
		}

		if( $page_num ){
			$data['start'] = ($page_num - 1) * 10 + 1;
			$data['last'] = $data['start'] + count($data['sales_details']) - 1;
		}

        return view('admin_sales_progress',$data);
	}

	public function withdrawal(){

		// Get logged in user ID
		$id = session()->get('user_id'); 

		// Get User Details
		$user = Users::find($id);	

		$data['c_w'] = Withdrawals::where('user_id',$id)
										->where('type','commission')
										->get();
		$data['r_w'] = Withdrawals::where('user_id',$id)
										->where('type','referral')
										->get();

		$data['title'] = '';
		$data['description'] = '';
		$data['user_name'] = session()->get('user_name');
		$data['username'] = session()->get('username');
		$data['user_id'] = session()->get('user_id');
		$data['userRoles'] = session()->get('userRoles');

		// Check if user is distributor
		$role_id = Roles::find($user->is_distributor);

		$data['t_r'] = $user->bonuses->sum('amount');
		$data['t_r_w'] = $data['r_w']->sum('amount');

		// Check if user have debit card
		$data['dCard'] = EcoDebitCards::where('user_id',$user->id)->first();

		if( $role_id && ($role_id->role_name == 'Distributor') ){

			$data['t_c'] = $user->distributorCommission->sum('amount');
			$data['t_c_w'] = $data['c_w']->sum('amount');

			return view('distributor_withdrawal_page',$data);
		}
		else{
			return view('user_withdrawal_page',$data);
		}
	}

	public function withdrawalRequest(Request $request){

		$flag = false;
		$user = Users::find($request->get('userid'));

		if( $request->get('userid') == session()->get('user_id') ){

			if( $request->get('submit') == 'distributor_accounts_withdraw' ){
				$model = new Withdrawals;
				$model->user_id = $request->get('userid');
				$model->amount = $request->get('amount');
				$model->type = $request->get('type');
				$model->request_type = 'debit_card';

				if( $model->save() ){
					$this->__sendWithdrawalRequestMailToUser($request);
					$this->__sendWithdrawalRequestMailToAdmin($request);
				}

				return redirect()->route('distributor.accounts.history');
			}
			elseif( $request->get('submit') == 'user_account_withdraw' ){

				$model = new Withdrawals;
				$model->user_id = $request->get('userid');
				$model->amount = $request->get('amount');
				$model->type = $request->get('type');
				$model->request_type = 'debit_card';

				if( $model->save() ){
					$this->__sendWithdrawalRequestMailToUser($request);
					$this->__sendWithdrawalRequestMailToAdmin($request);
				}

				return redirect()->route('user.accounts.history');
			}
			else{
				$model = new Withdrawals;
				$model->user_id = $request->get('userid');
				$model->amount = $request->get('amount');
				$model->type = $request->get('type');
				$model->request_type = $request->get('payment_type');

				if( $model->save() ){
					$this->__sendWithdrawalRequestMailToUser($request);
					$this->__sendWithdrawalRequestMailToAdmin($request);
				}
			}
		}
			
		return redirect()->route('distributor.withdrawal');

	}

	public function adminWithdrawalHistory(){

		$data['title'] = '';
		$data['description'] = '';
		$data['user_name'] = session()->get('user_name');
		$data['username'] = session()->get('username');
		$data['user_id'] = session()->get('user_id');
		$data['userRoles'] = session()->get('userRoles');

		$data['user_list'] = Users::where('is_distributor',0)->get();
		$data['dis_list'] = Users::where('is_distributor',11)->get();

		$query = Withdrawals::orderBy('created_at','desc');

		if( request()->get('u') ){
			$query->where('user_id',request()->get('u'));
		}
		if( request()->get('d') ){
			$query->where('user_id',request()->get('d'));
		}
		if( request()->get('a') ){
			$query->where('status',request()->get('a'));
		}

		$query = $query->with('user')
						->has('user');

		$data['wr_count'] = $query->count();

		$data['wr_link'] = $query->paginate(3);

		if( !request()->get('page') || request()->get('page') <= 0 ){
			$page_num = 1;
		}
		else{
			$page_num = request()->get('page');
		}

		$data['wr_f'] = ($page_num - 1) * 3 + 1;
		$data['wr_curr'] = $data['wr_f'] + count($data['wr_link']) - 1; 

		$data['withdrawal_request'] = Withdrawals::orderBy('created_at','desc');

		if( request()->get('u') ){
			$data['withdrawal_request']->where('user_id',request()->get('u'));
		}
		if( request()->get('d') ){
			$data['withdrawal_request']->where('user_id',request()->get('d'));
		}
		if( !is_null(request()->get('a')) && in_array(request()->get('a'),[0,1,2,3]) ){
			$data['withdrawal_request']->where('status',request()->get('a'));
		}

		$data['withdrawal_request'] = $data['withdrawal_request']->with('user')
											->has('user')
											->paginate(3)
											->map(function($w){
												if( $w->type == 'commission' ){
													$w->total_bal = DistributorCommission::where('user_id',$w->user_id)->get()->sum('amount');
												}
												elseif( $w->type == 'referral' ){
													$w->total_bal = Bonuses::where('payee_user_id',$w->user_id)->get()->sum('amount');
												}

												return $w;
											});
		if( request()->get('ga-demo') == 'demo' ){
			return view('admin_withdrawal_page_demo',$data);
		}	
		return view('admin_withdrawal_page',$data);
	}
	
	public function adminUpdateWithdrawalStatus(Request $request){

		if( $request->get('id') ){

			$wr = Withdrawals::find($request->get('id'));

			if( $wr ){
				if( $request->get('status') ){
					$wr->status = $request->get('status');
					$wr->processed_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
					if( $wr->save() ){
						$this->__sendWithdrawalRequestProcessMail($wr);
					}
				}
			}

		}

		return redirect()->back();
	}

	public function __sendWithdrawalRequestProcessMail($wr){

		$user = Users::find($wr->user_id);

        if( $user ){
        	$headers = "MIME-Version: 1.0" . "\r\n";
	        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	        $headers .= 'From: KineticGold<projectmanager24x7@gmail.com>' . "\r\n";

	        $subject = 'Withdrawal Processed';

	        $name = $user->first_name .' '. $user->last_name; 
	        $name = ucwords($name);
	        $amt_req = $wr->amount;

	        if( $wr->request_type ){
	        	$trans_by=ucwords(str_ireplace('_',' ',$wr->request_type));
	        }
	        else{
	        	$trans_by = 'Debit Card';
	        }

	        $is_user_have_debit_card = $user->debitCard ? 'Yes' : 'No';

	        $type = ( $user->is_distributor != 11 ) ? 'Distributor' : 'User';

	        $prev_bal = $user->bonuses->sum('amount') - $user->withdrawal->sum('amount');

	        $remain_bal = $prev_bal - $amt_req;

	        $req_date = $wr->created_at->format('m/d/Y');

	        $html = '<html>
	        			<head>
	        			</head>
	        			<body>
	        				<p>
	        					Name : <strong>'.$name.'</strong>,
	        				</p>
	        				<p>
	        					Previous Total Bal : <strong>$'.$prev_bal.'</strong>,
	        				</p>
	        				<p>
	        					Requested Date : <strong>'.$req_date.'</strong>,
	        				</p>
	        				<p>
	        					Amount Requested : <strong>$'.$amt_req.'</strong>,
	        				</p>
	        				<p>
	        					Remaining Bal : <strong>$'.$remain_bal.'</strong>,
	        				</p>
	        				<p>
	        					Transferred By : <strong>'.$trans_by.'</strong>,
	        				</p>
	        				<p>
	        					Status : <strong>Transferred</strong>,
	        				</p>
	        			</body>
	        		</html>';

	        mail($user->email, $subject, $html,$headers);
        }

	}

	public function __sendWithdrawalRequestMailToUser($request){

        $user = Users::find($request->get('userid'));

        if( $user ){
        	$headers = "MIME-Version: 1.0" . "\r\n";
	        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	        $headers .= 'From: KineticGold<projectmanager24x7@gmail.com>' . "\r\n";

	        $subject = 'Thanks for Requesting Withdrawal';

	        $name = $user->first_name .' '. $user->last_name; 
	        $name = ucwords($name);
	        $amount = $request->get('amount');
	        if( $request->get('payment_type') ){
	        	$payment_type = ucwords(str_ireplace('_', ' ', $request->get('payment_type')));
	        }
	        else{
	        	$payment_type = 'Debit Card';
	        }

	        $html = '<html>
	        			<head>
	        			</head>
	        			<body>
	        				<p>
	        					Dear <strong>'.$name.'</strong>,
	        				</p>
	        				<p>
	        					Thanks for Requesting withdrwal of Amount $'.$amount.' by '.$payment_type.'. Your request will be processed soon.
	        				</p>
	        				<p>
								Regards
								<br />
								Admin
							</p>
	        			</body>
	        		</html>';

	        mail($user->email, $subject, $html,$headers);
        }

	}

	public function __sendWithdrawalRequestMailToAdmin($request){
		$user = Users::find($request->get('userid'));
		$admin = Users::find(1);

        if( $user ){
        	$headers = "MIME-Version: 1.0" . "\r\n";
	        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	        $headers .= 'From: KineticGold<projectmanager24x7@gmail.com>' . "\r\n";

	        $subject = 'New Request for Withdrawal';

	        $name = $user->first_name .' '. $user->last_name; 
	        $name = ucwords($name);
	        $requested_amt = $request->get('amount');
	        if( $request->get('payment_type') ){
	        	$transaction_type=ucwords(str_ireplace('_',' ',$request->get('payment_type')));
	        }
	        else{
	        	$transaction_type = 'Debit Card';
	        }

	        $is_user_have_debit_card = $user->debitCard ? 'Yes' : 'No';

	        $type = ( $user->is_distributor != 11 ) ? 'Distributor' : 'User';

	        $total_bal = $user->bonuses->sum('amount') - $user->withdrawal->sum('amount');

	        $request_date = \Carbon\Carbon::now()->format('m/d/Y');

	        $html = '<html>
	        			<head>
	        			</head>
	        			<body>
	        				<p>
	        					Name : <strong>'.$name.'</strong>,
	        				</p>
	        				<p>
	        					Type : <strong>'.$type.'</strong>,
	        				</p>
	        				<p>
	        					Having Debit Card : <strong>'.$is_user_have_debit_card.'</strong>,
	        				</p>
	        				<p>
	        					Total Bal : <strong>$'.$total_bal.'</strong>,
	        				</p>
	        				<p>
	        					Request Date : <strong>'.$request_date.'</strong>,
	        				</p>
	        				<p>
	        					Amount Requested : <strong>$'.$requested_amt.'</strong>,
	        				</p>
	        				<p>
	        					Transaction Type : <strong>'.$transaction_type.'</strong>,
	        				</p>
	        			</body>
	        		</html>';

	        mail($admin->email, $subject, $html,$headers);
        }
	}
}