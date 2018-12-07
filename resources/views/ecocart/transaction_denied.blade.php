@extends('...layouts.default')

@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Transaction Denied</div>
                <div class="panel-body">
                       <form class="form-horizontal" role="form" method="POST" action="/payment">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                             <label class="col-md-10">A Charge of ${{$grand_total}} was disapproved for card {{$credit_card}}.  </label>

                        </div>
                        <div class="form-group">
                            <label class="col-md-10">Your disapproval code is {{$approval_code}}. </label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-10">The reason is: {{$error_code}}. </label>
                        </div>





                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection