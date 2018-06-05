@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Awaiting Payment </div>
                <div class="panel-body">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                             <label class="col-md-10 control-label">Your membership in KineticGold is waiting for your payment.</label>

                        </div>
                        <div class="form-group">
                             <label class="col-md-10 col-md-offset-1 text-left">Please send $39.95 to:</label>
                            </div>
                            <div class="form-group">
                                 <label class="col-md-10 col-md-offset-2 text-left">Gold Diggers Association</label>
                            </div>
                        <div class="form-group">
                              <label class="col-md-10 col-md-offset-2 text-left">4083 Sea View Ave.</label>
                        </div>
                        <div class="form-group">
                              <label class="col-md-10 col-md-offset-2 text-left">Los Angelos  90065</label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-10  text-left">we accept cash, checks or money orders</label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-10  text-left">Be sure to include with your remittance your member number  of #{{$userId}} and your Registered Name of {{$username}}</label>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection