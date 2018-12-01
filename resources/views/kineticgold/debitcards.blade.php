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
                             KineticGold Debit Cards
                        </div>
                    </div>
                    <div class="panel panel-default display">

                        <div class="panel-body">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group col-md-12 ">
                            All Members will receive a KineticGold Debit Card to access their offshore account.
                             </div>

                             <div class="form-group col-md-12 ">
                                This card will have the Visa or Mastercharge Logo on it.
                             </div>
                            <div class="form-group col-md-12 ">
                             This card is good at any location which accepts credit and/or debit cards including ATM's.
                             </div>
                             <div class="form-group col-md-12 ">
                            This card will be issued as soon as the Off-Shore bank is on line.
                            </div>
                            <div class="form-group col-md-12 ">
                            KineticGold Profit-Sharing and Mining Bonuses are deposited directly in your Off-Shore account / cryptocurrency and can immediately be access through your Debit Card.
                            </div>

                            <div class="form-group col-md-12 ">
                            The card balance is in ounces of Gold on deposit with Kinetic Gold and the value in fiat currency will vary as to the
                            spot price of gold.
                            </div>

                            <div class="form-group col-md-12 ">
                           The debit cards are only good for the current amount within your crypto-currency account / Off-shore account.
                            </div>

                            <div class="form-group col-md-12 ">
                           The Debit cards will be a standard issue Debit Card issued by our bank.  It will have KineticGolds branding on it.
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
                     <div class="skip">&nbsp;</div>
                </div>
            </div>
        </div>


    </div>
</div>

</div>
@endsection