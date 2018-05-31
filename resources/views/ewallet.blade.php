@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div style="width:100%">
<div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
   <div class="skip">&nbsp;</div>
    <div class="trans row">
        <div class="col-md-8 col-md-offset-2">
            <div style="width:100%;">
                <div class="kinetic600">
                     KineticGold Ewallet
                </div>
            </div>
            <div class="panel panel-default display">

                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                        KineticGold's ewallet is designed to make it easier to view and use your KineticGold cryptocurrency.
                        </div>

                        <div class="form-group col-md-12 ">
                        Our ewallet is designed to access the records of KineticGold using the starchain blockchain.
                        </div>
                        <div class="form-group col-md-12 ">
                        With it you can see your current balance in coins, value of the coins in any fiat currency, and can transfer balances
                        to any other member of KineticGold.
                        </div>
                        <div class="form-group col-md-12 ">
                        Transfers to another account take less than 1 second to complete, anywhere in the world.
                        </div>
                        <div class="form-group col-md-12 ">
                             There is only a charge of 1/2 of 1% for any transaction.  There are no minimum or maximum transaction size.
                        </div>
                        <div class="form-group col-md-12 ">
                            Using the starchain blockchain and the dual factor authentication required, your ewallet is secure.
                        </div>
                        <div class="form-group col-md-12 ">
                            If your ewallet is lost or stolen, your account can be restored as the underlying data is also recorded at Kinetic Golds
                            off-shore banking facility.  Through there the lost or stolen ewallet can be deactivated and a new ewallet issued.  This
                            insures that you can always get to your funds.
                        </div>





            </div>
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
@endsection