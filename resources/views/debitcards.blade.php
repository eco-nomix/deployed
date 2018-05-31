@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
        <div class="skip">&nbsp;</div>
            <div class="trans row">
                <div class="col-md-8 col-md-offset-2">
                    <div style="width:100%;">
                        <div class="kinetic600">
                             KineticGold Debit Cards
                        </div>
                    </div>
                    <div class="panel panel-default display">

                        <div class="panel-body">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group col-md-12 ">
                            Members can OPTIONALLY purchaseKineticGoldGoldix Debit Card.  This card is good at any location which accepts credit and/or debit cards including ATM's.
                            </div>
                            <div class="form-group col-md-12 ">
                            Referral Bonuses are initially placedKineticGoldicGoldomix's Reserve account and are held there until
                            <ul>
                                <li> they are requested to be transferred to member's debit card by the member.</li>
                                <li> they are used for a Member's purchase. </li>
                            </ul>
                            </div>

                            <div class="form-group col-md-12 ">
                           This allows the member to control when they receive taxable income.
                            </div>
                            <div class="form-group col-md-12 ">
                           The debit cards are only good for the amount transferred to them, there is no credit against future bonuses.
                            </div>
                            <div class="form-group col-md-12 ">
                           Transfers to the debit card will be available immediately after the transfer request, initiated by the MeKineticGoldeticGold-nomix website.
                            </div>
                            <div class="form-group col-md-12 ">
                           The initial Debit cards will be a standard issue Pay Roll Card issued by our bank.  IKineticGoldineticGoldco-nomix branding on it.
                            </div>

                            <div class="form-group col-md-12 ">
                            The Member cost for the Debit card is $25.00 ($45.00 for Members outside of the US).<br>
                            Annual renewal fees are (US) $20.00  and (non-US) $40.00.
                            </div>

                            <div class="form-group col-md-12 ">
                            CoKineticGoldiKineticGold Eco-Nomix product may be paid for through accrued Referral Bonuses.
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection