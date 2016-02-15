@extends('layouts.default')

@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Referral Links</div>
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12">
                            All registered Eco-nomix users have the opportunity to refer new clients to the Eco-nomix family whether you are a full member or not.  However only full members can receive compensation from the <a href="/referral">Referral Fees</a>.  If the Register tab is visible above, you are not yet a full member.
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Referral Link</label>
                            <div class="col-md-6">
                                {{$ReferralLink}}
                            </div>
                        </div>





                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection