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
                            There are two types of registrations statuses for clients of Eco-nomix.  Registered and Member.
                        </div>
                        <div class="form-group col-md-12 ">
                            The Registered status has no up-front costs, no monthly or annual dues - nothing at all.  A Registered customer is entitled purchase products at the non-member price.  This price is discounted from the suggested retail value by 5-10%.  Registered members may also use the referral link to recruit new registrations and members for Eco-nomix.
                            Referral fees from sales of the downline organization will be credited, but will not be paid out until the registered customer upgrades their status to 'Member'.
                        </div>
                        <div class="form-group col-md-12 ">
                           As a Registered client.  You may build your organization, as quickly as you like,  The same referral fees are earned as though you were a full member.  But are on 'hold' for payment, until you receive your eco-nomix debit card.
                        </div>
                        <div class="form-group col-md-12 ">
                            To become a member, the registered customer needs to upgrade their status.  There is a one-time charge for this upgrade of $35.00.  There are no additional fees or dues associated with membership, ever.
                            The member will receive a debit-card for payment of any referral fees and business cards which will have their referral link printed on them.
                        </div>
                        <div class="form-group col-md-12 ">
                            The member will can authorize the transfer of accrued referral fees to their eco-nomix debit card as often as their as referral fees yet to be paid out.
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection