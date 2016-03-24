@extends('layouts.default')




@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Business Cards</div>
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                           Each Member will receive as part of their membership package 100 Eco-nomics Business Cards.

                        </div>
                        <div class="form-group col-md-12 ">
                          Each card will be printed with the Name of the member, plus their Eco-nomix referral link.
                        </div>
                        <div class="form-group col-md-12 ">
                          The card will be a full color professional card, that will invite potential customers to visit Eco-nomix's web site.

                        </div>
                        <div class="form-group col-md-12 ">
                          When the Referral link is used, the referring member will be recorded in all transactions and future transactions performed by the referred member.
                        </div>
                        <div class="form-group col-md-12 ">
                            <img src="/images/business_card.png">
                        </div>
                        <div class="form-group col-md-12 ">
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection