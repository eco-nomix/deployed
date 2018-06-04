@extends('layouts.default')


@section('content')
<div style="width:100%; position:absolute; top:52px; z-index:-1">
<div style="width:100%;">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/MemberCosts-small.jpg" ></div>--}}
<div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
   <div class="skip">&nbsp;</div>

    <div class="trans row">
        <div class="col-md-8 col-md-offset-2">
            <div style="width:100%;">
                            <div class="kinetic600">
                                  Member Costs for KineticGold
                            </div>
                        </div>


            <div class="panel panel-default display">

                <div class="panel-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group col-md-12 ">
                            Gold Diggers is the association that is focused on the use and expansion of the KineticGold banking and Cryptocurrency platform.
                        </div>
                        <div class="form-group col-md-12 ">
                            Kinetic Gold will only be accessible by members of the Gold Digger's Association.
                        </div>
                        <div class="form-group col-md-12 ">
                            To become a member of the association there is a one-time registration fee of $39.95.   </div>
                         <div class="form-group col-md-12 ">
                              There are no annual, monthly costs for Kinetic Gold or the Gold Digger's Association, or required products to purchase</div>
                         <div class="form-group col-md-12 ">Registration is a simple process just
                            <ul>
                                <li>Provide your basic information (name, email, desired username and password, verify your email,update and contact information)</li>
                                <li>Submit your registration Fee</li>
                            </ul>
                         </div>
                        <div class="form-group col-md-12 ">
                           Benefits from membership in the Gold Digger's Association</div>
                        <div class="form-group col-md-12 ">
                           <ul>
                               <li>Kinetic Gold will only be accessible by members of the Gold Diggers Association.</li>
                               <li>Members will receive a KineticGold cryptocurrency account.</li>
                               <li>Members will receive an e-wallet which can access this account</li>
                               <li>Members will receive a banking account at an offshore bank affiliated with KineticGold.
                                    <ul>
                                       <li>Your account is linked with your KineticGold account.</li>
                                       <li>Your account is denominated in ounces of Gold.</li>
                                       <li>Gold in in storage at a secure vault in Dubai.</li>
                                       <li>Account is insured to the full amount of deposit.</li>
                                       <li>Account will have a Mastercard/Visa Debit card associated with it.</li>
                                       <li>You set the limit that can be spent per transaction.</li>
                                       <li>This type of account is normally not available and would be quite expensive to obtain</li>
                                    </ul>
                               </li>
                               <li>The banking account will interact directly with their cryptocurrency account.</li>
                               <li>The banking account will include a Debit card where you can access your accounts anywhere in the world through the Visa/Mastercard platform.</li>
                               <li>Members automatically qualify for KineticGold rewards program.  Rewards are automatically credited into your savings account at your offshore bank account.</li>
                               <li>Members can participate in KineticGold's profit sharing and mining program
                               </li>
                                 <li>Establish and update your down-line for Profit-Sharing within the Blockchain.
                                   <ul>
                                       <li>Awards for deposits is controlled by the Blockchain</li>
                                       <li>Profit-Sharing is controlled by the Blockchain</li>
                                   </ul>
                               </li>
                               <li>Help you Promote your downline organization
                                   <ul>
                                       <li>Make members aware of Association Events
                                           <ul>
                                               <li>Training on how Kinetic Gold works</li>
                                               <li>Training on sponsoring your organization</li>
                                           </ul>

                                       </li>
                                   </ul>
                               </li>
                               <li>Maintain the downline organization
                                   <ul>
                                       <li>You can see who is in your downline at the GoldDiggers website.</li>
                                       <li>You can contact members of your downline through the GoldDiggers website.</li>
                                   </ul>
                               </li>
                               <li>Gold Diggers will have products to promote KineticGold and the Association but none of them will be required to purchase under any situation.</li>

                           </ul>
                        </div>

                </div>
            </div>

        </div>
    </div>
     <div class="skip">&nbsp;</div>
       <div class="skip">&nbsp;</div>
          <div class="skip">&nbsp;</div>
          <div class="skip">&nbsp;</div>
          <div class="skip">&nbsp;</div>
           <div class="skip">&nbsp;</div>
                    <div class="skip">&nbsp;</div>
</div>
</div>
</div>
@endsection