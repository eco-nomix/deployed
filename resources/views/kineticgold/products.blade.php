@extends('...layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Products</div>
                <div class="panel-body">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group col-md-12 ">
                        KineticGold is in its early startup phase. At this point, this site is only operational for information and registration.
                    </div>
                    <div class="form-group col-md-12 ">
                        We are just bringing our products online.  Currently we have only loaded onto the site some of our Books and Guides.
                    </div>
                    <div class="form-group col-md-12 ">
                        If you look at the categories of of Products and at the books we carry, you will get a better sense of the types of products we will be carrying.
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection