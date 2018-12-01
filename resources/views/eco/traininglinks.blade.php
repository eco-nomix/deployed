@extends('...layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Training Links</div>
                <div class="panel-body">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group col-md-12 " onclick="updateyoutube('7xlYqHDd7CU')">
                         Education is one of our most valuable assets during time of crisis.  Knowing what to do, when to do it, could make all the difference in a critical situation.
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('2IaFlGiHX4o')">
                         These video links were all independently produced by their respective authors.  Eco-nomics makes no claims to ownership, only that they contain material and information that could be useful to our members.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection