@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Auto-Ship Policy</div>
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            There may be some products that will offer a discount for auto-shipping the product.  However Eco-nomix discourages using such auto-ship programs until you first determine that the auto-ship policy fits within the consumption needs for your family.
                        </div>
                        <div class="form-group col-md-12 ">
                           If you find that product inventory is beginning to accumulate beyond your consumption, cancel or modify the auto-ship terms immediately.
                         </div>
                       <div class="form-group col-md-12 ">
                          All auto-ship products sold through Eco-nomix allow a Member to cancel, modify the quantities and term for the auto-ship.  Please be aware that such modification may result to a change in the auto-ship price.  If the new terms are not acceptable and meet the needs of your family, please cancel the auto-ship completely.
                       </div>
                       <div class="form-group col-md-12 ">
                            Auto-ship products may be returned under the normal product return conditions.
                       </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@stop