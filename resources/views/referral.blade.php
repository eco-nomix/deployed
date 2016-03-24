@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Referral Bonuses</div>
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            There are two types of registration statuses for clients of Eco-nomix.  Registered and Member.
                        </div>
                        <div class="form-group col-md-12 ">
                            Both types are eligible to earn bonuses by referring clients to Eco-nomix.  However, to receive the bonuses, you must be a member and have received the Eco-nomix debit card.

                        </div>
                        <div class="form-group col-md-12 ">
                           A 10% referral bonus is paid on all the purchases of eco-nomix products by Registered or Member clients that you have personally referred.
                        </div>
                        <div class="form-group col-md-12 ">
                           A 4% referral bonus is paid on all the purchases of eco-nomix products by 2nd Generation Registered or Member Clients. (Those that were referred by your personally referred clients.)
                        </div>
                        <div class="form-group col-md-12 ">
                           A 4% referral bonus is paid on all the purchases of eco-nomix products by 3rd Generation Registered or Member Clients. (You've got the idea!)

                        </div>
                        <div class="form-group col-md-12 ">
                            A 4% referral bonus is paid on all the purchases of eco-nomix products by 4th Generation Registered or Member Clients. (Now this is getting interesting)

                        </div>
                         <div class="form-group col-md-12 ">
                            A 4% referral bonus is paid on all the purchases of eco-nomix products by 5th Generation Registered or Member Clients. (Wow!!!)
                         </div>
                         <div class="form-group col-md-12 ">
                            That's right at least a 4% referral bonus on all the purchases made by 5 generations of referrals.
                         </div>
                         <div class="form-group col-md-12 ">
                            Now when you consider the magic of exponential growth that is possible with the Eco-nomix system.  If each person recruited 5 others, you would have over 3000 members in 5 generations.  That obviously is not going to happen so nice and neat, but it does show the potential.  Look at the potential tab under the Plans section for further information.
                         </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection