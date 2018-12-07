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
                             Interface to your Off-Shore Bank
                        </div>
                    </div>
                    <div class="panel panel-default display">

                        <div class="panel-body">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group col-md-12 ">
                            Kinetic Gold is much more than another cryptocurrency.  It is a complete world accessible banking platform that is backed by Gold.
                             </div>

                             <div class="form-group col-md-12 ">
                                The banking platform is controlled by an Off-Shore bank that uses the Kinetic Gold blockchain to record all transactions.
                             </div>
                            <div class="form-group col-md-12 ">
                             Since the blockchain is not hackable, the bank has a stable records platform that is totally secure even if attached by hackers.
                             </div>
                             <div class="form-group col-md-12 ">
                            The blockchain is totally decentralized, but also totally encrypted.
                            </div>
                            <div class="form-group col-md-12 ">
                            This gives you, the account holder total security.
                            </div>

                            <div class="form-group col-md-12 ">
                            Your account balance is insured by Lloyd's of London for the full value of your deposit.  There is no limit of $250,000 USD as when insured by USDA.
                            </div>

                            <div class="form-group col-md-12 ">
                            The balance of your account at the Off-Shore account is always the value of your KineticGold cryptocurrency account.  There is no need to transfer from
                            one account to the other, since they are reflections of one another.
                            </div>

                            <div class="form-group col-md-12 ">
                            The initial services of the Off-Shore bank will include:
                                <ul>
                                    <li>Payroll Deposits</li>
                                    <li>Debit Cards</li>
                                    <li>On-Line Acconting</li>
                                    <li>SWIFT wire transfers</li>
                                    <li>linkage to your cryptocurrency account</li>
                                    <li>ATM access</li>
                                    <li>Credit Card Processing</li>
                                    <li>Merchant Accounts - interface with Kinetic Gold</li>
                                        <ul>
                                            <li>No Visa/Mastercharge fees from Kinetic Gold account holders</li>
                                            <li>World Wide Accessibility</li>
                                            <li>Increase Profitability and transfer speed</li>
                                        </ul>
                                    <li>World Accessibility</li>

                                </ul>
                            </div>

                            <div class="form-group col-md-12 ">
                            The Off-Shore bank will provide other banking services as the KineticGold System expands.
                            </div>




                        </div>
                    </div>
                     <div class="skip">&nbsp;</div>
                              <div class="skip">&nbsp;</div>
                     <div class="skip">&nbsp;</div>
                     <div class="skip">&nbsp;</div>

                </div>
            </div>
        </div>


    </div>
</div>

</div>
@endsection