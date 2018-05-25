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
                        The Goal of Kinetic Gold is to provide the next Generation of Banking and Cryptocurrency that will allow individuals, families and communities to become more empowered to utilize their financial resources to benefit themselves.  Banking has far too long been designed to benefit only the powers that be and not the true source of wealth, the people themselves.                    </div>
                    <div class="form-group col-md-12 ">
                        To reach the greatest number of people possible, Kinetic Gold employs a Reward and profit sharing system that benefits every account holder.
                    </div>
                    <div class="form-group col-md-12 ">

                    </div>
                    <div class="form-group col-md-12 ">
                        Investigate each of the sections below to see the difference in detail.
                    </div>
                    <div class="form-group col-md-12 ">
                        The introduction tab will give a nice overview of how Kinetic Golds platform is unique and advantageous.
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