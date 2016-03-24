@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Accounting System</div>
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <div class="form-group col-md-12 ">
                           Coming Soon
                         </div>

                         <div class="form-group col-md-12 ">
                          The Accounting Module allows you to:
                         </div>
                         <div class="form-group col-md-12 ">
                              1.  The ability to check balances in your reserve account, debit-card, and donations from sales.
                         </div>
                         <div class="form-group col-md-12 ">
                             2.  A history of all sales in your organization over time, income, and spending.
                         </div>


                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection