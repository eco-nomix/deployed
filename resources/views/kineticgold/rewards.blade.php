@extends('...layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div style="width:100%">
    <div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
        <div class="skip">&nbsp;</div>
            <div class="trans row">
                <div class="col-md-8 col-md-offset-2">
                    <div style="width:100%;">
                        <div class="kinetic600">
                             Rewards Program
                        </div>
                    </div>
                    <div class="panel panel-default display">

                        <div class="panel-body">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group col-md-12 ">
                            As a new banking platform, KineticGold is providing an exciting Rewards
                            program that is available to all members of the Gold Diggers Association.  This program is restricted to members of that Association.
                            </div>

                             <div class="form-group col-md-12 ">
                             It is simple to qualify for the Rewards Program, as a member of Gold Diggers Association, just use KineticGold as your bank account.
                             </div>
                            <div class="form-group col-md-12 ">
                            Whenever you make a deposit into KineticGold you will automatically receive a reward of 10% of whatever
                            amount you deposited.  This will continue for as long you have a KineticGold account.
                             </div>
                             <div class="form-group col-md-12 ">
                             Your reward will be placed into your rewards account with a 6 month maturity in KineticGold's
                             Off-shore Bank.
                            </div>
                            <div class="form-group col-md-12 ">
                            KineticGolds rewards accounts pay an interest of 6% / year, compounded monthly with a 6 month maturity.
                            Note, other maturity periods are available for direct deposits into your rewardss at various interest rates.
                            </div>

                            <div class="form-group col-md-12 ">
                            Once the maturity period is over, your rewards may be transferred to your regular account which is accessible by your
                            Debit Card and your on-line account.
                           </div>

                            <div class="form-group col-md-12 ">
                            Once matured, you may also roll-over your savings into other Rewards programs with interest and maturity periods.
                            </div>

                            <div class="form-group col-md-12 ">
                            Since rewardss accounts are denominated in Gold, as the price of Gold in fiat currency increases, the value of your rewardss
                            will also increase.  This is in addition to any interest that is paid.
                            </div>

                            <div class="form-group col-md-12 ">
                            There is no other requirement necessary to receive this reward, other than use your account.  Without making any adjustments
                            to your income or how you spend money, you profit by using KineticGolds Rewards program.

                            </div>
                            <div class="form-group col-md-12 ">
                                Now lets see what you don't have to do.
                            </div>
                            <div class="form-group col-md-12 ">
                                    <ul>
                                        <li>
                                        No direct selling of products - all sales are done through the site.
                                        </li>
                                        <li>
                                        No minimum personal sales requirements.
                                        </li>
                                        <li>
                                        No collection of money
                                        </li>
                                        <li>
                                        No required marketing meetings
                                        </li>
                                        <li>
                                        No minimum number in your organization to 'qualify'
                                        </li>
                                        <li>
                                        No purchasing of product you don't want or need
                                        </li>
                                        <li>
                                        No stocking of inventory
                                        </li>
                                        <li>
                                        No confusing Marketing plan
                                        </li>
                                        <li>
                                        No Waiting for the check that is in the mail.
                                        </li>
                                        <li>
                                        No hidden Fees
                                        </li>

                                    </ul>
                            </div>
                            <div class="form-group col-md-12 ">
                                Even you can benefit from this.  Even from Day One, with no sales organization at all
                            </div>


                        </div>
                    </div>
                     <div class="skip">&nbsp;</div>
                              <div class="skip">&nbsp;</div>


                </div>
            </div>
        </div>


    </div>
</div>

</div>
@endsection