@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Eco-nomix Debit Cards</div>
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            Eno-nomix will provide to each of it's member's an Eco-nomix Debit Card.  This card is good at any location which accepts credit and/or debit cards.
                        </div>
                        <div class="form-group col-md-12 ">
                            Referral Bonuses are initially placed with Eco-nomix's Reserve account and are held there until they are requested to be transferred to member's debit card by the member.
                        </div>
                        <div class="form-group col-md-12 ">
                           This allows the member to control when they receive taxable income.
                        </div>
                        <div class="form-group col-md-12 ">
                           The debit cards are only good for the amount transferred to them, there is no credit against future bonuses.
                        </div>
                        <div class="form-group col-md-12 ">
                           Transfers to the debit card will be available immediately after the transfer request.
                        </div>
                        <div class="form-group col-md-12 ">
                           The initial Debit cards will be a standard issue Pay Roll Card issued by our bank.  Soon it will be have the Eco-nomix branding on it.  When the new cards are available existing card holders will be updated with a new card.
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection