@extends('layouts.golddiggers')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Business Details</div>
                <div class="panel-body">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group col-md-12 ">
                        The Goal of the Gold Diggers Association is to assist our members to becoming financially prepared for the changing world times
                        and to become more empowered to utilize their financial resources to benefit themselves. Too often have many critical opportunities have
                         been missed by the average man.

                    </div>

                    <div class="form-group col-md-12 ">

                    </div>
                    <div class="form-group col-md-12 ">
                        Investigate each of the sections below to see the difference in detail.
                    </div>
                    <div class="form-group col-md-12 ">
                        The introduction tab will give a nice overview of how the Gold Diggers Association is unique and advantageous.
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