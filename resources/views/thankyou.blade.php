@extends('layouts.default')

@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Thank You </div>
                <div class="panel-body">
                       <form class="form-horizontal" role="form" method="POST" action="/payment">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                             <label class="col-md-10 control-label">A Charge of $35.00 was approved for card {{$cardnumber}}.  You are now a Member of Eco-nomix.</label>

                        </div>
                        <div class="form-group">
                             <label class="col-md-10  text-center">You may now Login</label>

                        </div>





                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection