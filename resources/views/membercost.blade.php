@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Member Costs for Eco-nomix</div>
                <div class="panel-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            There is NO membership costs for clients of Eco-nomix to participate in its Referral Bonus Program.
                        </div>
                        <div class="form-group col-md-12 ">
                            The only requirement to participate in Eco-nomix’s referral program is to register as a Member.   </div>
                        <div class="form-group col-md-12 ">
                           Because this program involves payments and bonuses, sufficient information to satisfy government requirements will be required to complete the registration.</div>
                        <div class="form-group col-md-12 ">
                           Benefits from Registration </div>
                        <div class="form-group col-md-12 ">
                           <ul>
                               <li>Registered members will typically receive a discount on products from the Suggested Retail Price.</li>
                               <li>Registered members participate in the Referral Bonus Program</li>
                               <li>Registered members may utilize Referral Bonuses to purchase or apply payments to Eco-nomix Products.</li>
                               <li>Using Referral Bonuses, Eco-nomix Products may be “purchased” with no out of pocket money.</li>
                               <li>One such product is the Economics Promotion Program.</li>
                           </ul>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection