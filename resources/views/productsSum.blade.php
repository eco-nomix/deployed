@extends('layouts.default')


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
                        Eco-nomix is in its early startup phase. At this point, this site is only operational for information and registration.
                    </div>
                    <div class="form-group col-md-12 ">
                        We are just bringing our products online.  Currently we have only loaded onto the site some of our Books and Guides.
                    </div>
                    <div class="form-group col-md-12 ">
                        If you look at the categories of of Products and at the books we carry, you will get a better sense of the types of products we will be carrying.
                    </div>
                    <ul>
                        <li>Food Production</li>
                        <li>Water Purification</li>
                        <li>Energy Production</li>
                        <li>Recycling</li>
                        <li>Survival, Camping</li>
                        <li>Cooking Systems</li>
                        <li>Home Health</li>
                        <li>House Hold Products</li>
                        <li>Books and Guides</li>
                        <li>Training</li>
                    </ul>
                     <div class="form-group col-md-12 ">
                        In addition you will see also some Member Stores. Each of these categories allows our Members to create their own stores with hundreds of products.  Members can also sell individual products in numerous categories.  They can be hand made, one of a kind, or anything at all.  Now there is literally no limit to the range of products that can be available.  Most of these products will be drop shipped by the owner of the store to the purchaser.
                     </div>
                     <ul>
                        <li>Art Galleries</li>
                        <li>Botiques</li>
                        <li>Estate Sales</li>
                        <li>Stores</li>
                        <li>Services</li>
                        <li>One of a Kind</li>
                        <li>Member Products</li>

                     </ul>
                    <div class="form-group col-md-12 ">
                    Each of the products on the Eco-nomix websites participate in the Referral Bonuses.  This expansive capability will eventually offer an Amazon range of products that can benefit our members financially.
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection