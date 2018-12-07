<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function sendEmailReminder(Request $request, $id, $reminder)
    {
        $user = Users::findOrFail($id);

        Mail::send('emails.reminder', ['user' => $user], function ($message) use ($user, $reminder) {
            $pathToImage = "/images/KineticGold3731_Fotor.jpg";
            $message->from('admin@KineticGold.com', 'Admin');
            $message->subject('Reminder');
            $username = $user->first_name.' '.$user->last_name;
            $testemail = 'projectmanager24x7@gmail.com';
            $message->to($testemail, $username)->subject('Your Reminder!');
            //$message->sender($address,$name);
            //$message->cc($address,$name);
            //$message->bcc($address,$name);
            //$message->replyTo($address,$name);
            //$message->priority($level);
            //$message->attach($pathtoFile, array $options=[]);
            //      $options = ['as'=>$display,'mime'=$mime];
            //$message->attachData($data,$name,array $options=[]);
            //$message->getSwiftMessage();
        });
    }
}
