@extends('layouts.video')



@section('content')
<div style="left: 30px; border: 0px none; height: 450px; position: fixed; width: 600px; overflow: hidden; top: 67px;">
    <div style="overflow: hidden;">
    </div>
    <iframe id="video_iframe" width="600" height="450" src="" frameborder="1" allowfullscreen></iframe>
    </div>
    </div>

<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <div class="panel panel-default display">
                <div class="panel-heading">Links for Orchards - click to view</div>
                <div class="panel-body">
                    <div class="form-group col-md-12 " onclick="updateyoutube('foRtMmBmJk4')">
                        Pruning Basics
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('a6NsEs16ya0')">
                        Tiny Backyard Apple Orchard
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('7un4bYoV1VQ')">
                        Pecan Harvesting for Small Orchards
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('JutHZeoigI8')">
                        Small Orchard Management
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('k916oJ9mfow')">
                        Organic Tropical Fruit Orchard Grows 185 trees on 1.3 Acres
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('J6c5uZMaWOY')">
                        Where to Find the Cheapest Trees - Start an Orchard Today!
                     </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('qATcFICHutk')">
                        How to Plant Drarf Fruit Trees:  Backyard Garden Mini Orchard
                     </div>

                </div>
            </div>

        </div>
    </div>
</div>







@stop