<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Users;
use App\Models\Products;
use App\Models\SalesTransactionDetails;
use App\Models\Feedback;
use Carbon\Carbon;

class FeedbackController extends Controller
{
	public function sendFeedback($id, Request $request){
		$u = Users::find(session()->get('user_id'));
	    if( $u ){
	      
	    	$invalid_route = $u->is_distributor == '11' ? 'distributor.product.history' : 'user.product.history';

	      	$s = SalesTransactionDetails::find($id);

	      	if( $s->purchased_by == $u->id ){
	      		$s->date = Carbon::createFromFormat('Y-m-d H:i:s',$s->date)->format('m/d/Y');
	      		$data = $this->userData(request());
	      		$data['s'] = $s;

	      		return view('show_feedback_form',$data);
	      	}
	      	else{
	      		return redirect()->route($invalid_route);
	      	}
	    }
	    else{
	      return redirect('/');
	    }
	}

	public function saveFeedback($id, Request $request){
		$u = Users::find($request->get('user_id'));

	    if( $u ){
	      
	    	$invalid_route = 'product.complaint';

	      	$s = SalesTransactionDetails::find($id);

	      	if( $s->purchased_by == $u->id ){

	      		$model = new Feedback;
	      		$model->user_id = $request->get('user_id');
	      		$model->reason = $request->get('reason');
	      		$model->transaction_details_id = $id;
	      		$model->feedback = $request->get('feedback');
	      		$model->save();

	      		// $this->__sendMailToUser($model);
	      		// $this->__sendMailToOwner($model);
	      		// $this->__sendMailToAdmin($model);

	      		return redirect()->back()->with(['success' => 'Feedback submitted. Thank you, we will get back to you!','route' => $invalid_route]);
	      	}
	      	else{
	      		return redirect()->route($invalid_route);
	      	}
	    }
	    else{
	      return redirect()->back()->with('error','You are not unauthorized!');
	    }
	}

	private function __sendMailToAdmin($model){
		// Get Admins Email Address
		$admin = Users::find(1);

		$headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: KineticGold<projectmanager24x7@gmail.com>' . "\r\n";
        $subject = 'New Complaint';

        $purchaser_name = $model->user->first_name .' '. $model->user->last_name;

        if( $model->transactionDetails->product->store_id ){
        	$owner_obj = $model->transactionDetails->product->store->owner;
        	$owner = $owner_obj->first_name .' '. $owner_obj->last_name;
        }
        else{
        	$owner = 'Website';
        }

        $purchase_date = Carbon::createFromFormat('Y-m-d H:i:s',$model->transactionDetails->date)->format('m/d/Y');

        $html = '<html>
	    			<body>
	    				<p>
	    					User Name : <strong>'.$purchaser_name.'</strong>
	    				</p>
	    				<p>
	    					Owner : <strong>'.$owner.'</strong>
	    				</p>
	    				<p>
	    					Product Name : <strong>'.$model->transactionDetails->product->product_name.'</strong>
	    				</p>
	    				<p>
	    					Date Of Purchase : <strong>'.$purchase_date.'</strong>
	    				</p>
	    				<p>
	    					Description : <strong>'.$model->feedback.'</strong>
	    				</p>
	    			</body>
	    		</html>';

	    mail($admin->email, $subject, $html,$headers);
	}

	private function __sendMailToOwner($model){

		$owner_details = $model->transactionDetails->product->store->owner;

		if( $owner_details ){
			$email = $owner_details->email;
		}
		else{
			$admin = Users::find(1);
			$email = $admin->email;
		}

		$headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: KineticGold<projectmanager24x7@gmail.com>' . "\r\n";
        $subject = 'New Complaint';

        $purchaser_name = $model->user->first_name .' '. $model->user->last_name;

        if( $model->transactionDetails->product->store_id ){
        	$owner_obj = $model->transactionDetails->product->store->owner;
        	$owner = $owner_obj->first_name .' '. $owner_obj->last_name;
        }
        else{
        	$owner = 'Website';
        }

        $purchase_date = Carbon::createFromFormat('Y-m-d H:i:s',$model->transactionDetails->date)->format('m/d/Y');

        $html = '<html>
	    			<body>
	    				<p>
	    					User Name : <strong>'.$purchaser_name.'</strong>
	    				</p>
	    				<p>
	    					Owner : <strong>'.$owner.'</strong>
	    				</p>
	    				<p>
	    					Product Name : <strong>'.$model->transactionDetails->product->product_name.'</strong>
	    				</p>
	    				<p>
	    					Date Of Purchase : <strong>'.$purchase_date.'</strong>
	    				</p>
	    				<p>
	    					Description : <strong>'.$model->feedback.'</strong>
	    				</p>
	    			</body>
	    		</html>';

	    mail($email, $subject, $html,$headers);
	}

	private function __sendMailToUser($model){
		// Get Purchaser's Details

		$headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: KineticGold<projectmanager24x7@gmail.com>' . "\r\n";
        
        $subject = 'Feedback Recieved';

        $html = '<html>
	    			<body>
	    				<p>
	    					We recieved your feedback for Product <strong>"'.$model->transactionDetails->product->product_name.'"</strong>. We will get back to you in 24 hours. 
	    				</p>
	    				<p>
	    					Regards,
	    					<br/>
	    					Admin
	    				</p>
	    			</body>
	    		</html>';

	    mail($model->user->email, $subject, $html,$headers);
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

    public function feedbackExists(Request $request){

    	$f = Feedback::where('transaction_details_id', $request->get('id'))
    					->where('status','1')
    					->first();

    	if( $f ){
    		return response()->json([
				'exists' => true, 
				'user_id' => $f->user_id,
				'feedback_id' => $f->id
			]);
    	}
    	else{
    		return response()->json(['exists' => false]);
    	}

    }

    public function getChatList(Request $request){

    	// Check if User Exists
    	$u = Users::find($request->get('user_id'));

    	if( $u ){
    		// check feedback exists?
    		$f = Feedback::find($request->get('feedback_id'));

    		if( $f ){
    			// Check if feedback is provided by given user
    			if( $f->user_id == $u->id ){
    				$r = \DB::table('complaint_reason')->where('id',$f->reason)->first();
    				$f->u_name = $u->first_name .' '. $u->last_name;

					$f->reason = $r->value;

					$replies = $f->replies->map(function($t) use($f){
						$t->u = $t->user->first_name .' ' . $t->user->last_name;
						if( $t->user->id != $f->user_id ){
							$t->role = $t->user->id == '1' ? '( Admin )' : '( Moderator )';
						}
						else{
							$t->role = '';
						}
						return $t;
					});

    				return response()->json([
    					'error' => false,
    					'feedback' => $f,
    					'replies' => $replies
    				]);

    			}
    			else{
    				return response()->json([
    					'error' => true,
    					'msg' => 'You are not authorized'
    				]);
    			}

    		}
    		else{
    			return response()->json([
    				'error' => true,
    				'msg' => 'No Complaint yet'
    			]);	
    		}

    	}
    	else{
			return response()->json(['error' => true,'msg' => 'Invalid user']);
    	}

    }

    public function submitReply(Request $request){

    	// Check if User Exists
    	$u = Users::find($request->get('user_id'));

    	if( $u ){
    		// check feedback exists?
    		$f = Feedback::find($request->get('feedback_id'));

    		if( $f ){
    			// Check if feedback is provided by given user
    			if( $f->user_id == $u->id ){

    				$r = new \App\Models\FeedbackReply;
    				$r->user_id = $u->id;
    				$r->feedback_id = $f->id;
    				$r->reply = $request->get('reply');

    				if( $r->save() ){
    					return response()->json([
	    					'error' => false,
	    					'user_id' => $f->user_id,
							'feedback_id' => $f->id,
	    					'msg' => 'Submitted successfully'
	    				]);
    				}
    				else{
    					return response()->json([
	    					'error' => true,
	    					'msg' => 'Something went wrong. please try again'
	    				]);
    				}
    			}
    			else{
    				return response()->json([
    					'error' => true,
    					'msg' => 'You are not authorized'
    				]);
    			}

    		}
    		else{
    			return response()->json([
    				'error' => true,
    				'msg' => 'No Complaint yet'
    			]);	
    		}

    	}
    	else{
			return response()->json(['error' => true,'msg' => 'Invalid user']);
    	}
    }

    public function closeTicket(Request $request){

    	// Check if User Exists
    	$u = Users::find($request->session()->get('user_id'));

    	if( $u ){
    		// check feedback exists?
    		$f = Feedback::where([
    					'id' => $request->get('feedback_id'),
    					'status' => 1
    				])
    				->first();

    		if( $f ){
    			// Check if feedback is provided by given user
    			if( $f->user_id == $u->id ){
    				$f->status = 0;

    				if( $f->save() ){
    					return response()->json([
	    					'error' => false,
	    					'msg' => 'Ticket closed successfully'
	    				]);
    				}
    				else{
    					return response()->json([
	    					'error' => true,
	    					'msg' => 'Something went wrong. please try again'
	    				]);
    				}
    			}
    			else{
    				return response()->json([
    					'error' => true,
    					'msg' => 'You are not authorized'
    				]);
    			}

    		}
    		else{
    			return response()->json([
    				'error' => true,
    				'msg' => 'No Complaint yet'
    			]);	
    		}

    	}
    	else{
			return response()->json(['error' => true,'msg' => 'You are not Authorized']);
    	}

    }
}