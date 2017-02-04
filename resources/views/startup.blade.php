@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Eco-nomix Start-Up Package</div>
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12   ">
                            Members can OPTIONALLY purchase an Eco-nomix Start-up Package.    </div>
                        <div class="form-group col-md-12 ">
                           The Start-up Package is comprised of
                        </div>
                        <ul>
                            <li>The Eco-nomix Debit Card</li>
                            <li>500 Business Cards</li>
                        </ul>
                        <div class="form-group col-md-12 ">
                           This is a special discount package to help our members get started.
                        </div>


                        <div class="form-group col-md-12 ">
                            The Member cost for the Eco-nomix Start-up Package is $35.00 ($55.00 for Members outside of the US).<br>
                            Normal Annual renewal fees for the Debit Card are (US) $20.00  and (non-US) $35.00.
                        </div>

                         <div class="form-group col-md-12 ">
                            Cost for this and any Eco-Nomix product may be paid for through accrued Referral Bonuses.
                         </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection