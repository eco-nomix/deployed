@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">On-Line Accounting System</div>
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <div class="form-group col-md-12 ">
                            When Members login they will have a special item in their personal pull down menus -  Organization and Accounting.
                         </div>
                         <div class="form-group col-md-12 ">
                           The Organization Module contains a number of sections that you will find very interesting
                         </div>
                         <div class="form-group col-md-12 ">
                               1.  The ability to see who is in your complete down-line of referrals.  Over time this could grow to be thousands of individuals.  And if any one of those individuals makes a purchase, no matter how big or small, that will result in a referral bonus to you.
                         </div>
                         <div class="form-group col-md-12 ">
                              2.  The ability to see where all of your bonuses are coming from, and how much.
                         </div>

                         <div class="form-group col-md-12 ">
                              3.  The ability to contact via email those in your down-line - through the eco-nomix messaging system.
                         </div>
                         The Accounting Module allows you to:
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