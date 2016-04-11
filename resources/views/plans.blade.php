@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Business Plan</div>
                <div class="panel-body">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group col-md-12 ">
                        The Goal of Eco-nomix is to provide the products, training and service that will enable individuals, families and communities to become more prepared for the tough times ahead of us.  We anticipate major changes in society around us, and most of what we see concerns us.
                    </div>
                    <div class="form-group col-md-12 ">
                        To reach the greatest number of people possible, a new form of multi-level marketing was created, one that eliminated all of the negative aspects of multi-level marketing, but preserving the essential ability of impacting in a positive way the maximum number of people.
                    </div>
                    <div class="form-group col-md-12 ">
                        No investment, no monthly purchase of products, and no hard sell.
                    </div>
                    <div class="form-group col-md-12 ">
                        Investigate each of the sections below to see the difference in detail.
                    </div>
                    <div class="form-group col-md-12 ">
                        The introduction tab will give a nice overview of how Eco-nomix marketing is different.
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