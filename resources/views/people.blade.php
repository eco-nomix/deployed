@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">People</div>
                <div class="panel-body">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group col-md-12 ">
                        Any organization is really about the people involved and what they are trying to accomplish.
                    </div>
                    <div class="form-group col-md-12 ">
                        You will find in KineticGold a mixture of many groups of individuals that you may relate with including:
                        <ul>
                            <li>Survivalists</li>
                            <li>Camping Enthusiasts</li>
                            <li>Back to Earthers</li>
                            <li>Farmers</li>
                            <li>Millennials</li>
                            <li>Urban Gardeners</li>
                            <li>Hippies</li>
                            <li>Community Creators</li>
                            <li>Families</li>
                            <li>Herbalists</li>
                            <li>Health Practitioners</li>
                            <li>Native Americans</li>
                        </ul>
                    </div>
                    <div class="form-group col-md-12 ">
                        Each and everyone of them are important and have skills, knowledge and experience that are essential to you.  One of the purposes oKineticGoldix is to provide a conduit where that information may be shared freely and openly.
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection