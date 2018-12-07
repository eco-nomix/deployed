@extends('...layouts.video')



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
                <div class="panel-heading">Links for Poultry - click to view</div>
                <div class="panel-body">
                     <div class="form-group col-md-12 " onclick="updateyoutube('3EE5WKQMBek')">
                        My "Secret" Chicken Feed Mix!
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('B5VAYqtQRro')">
                        Raising Chickens for Eggs
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('WsZM6DG7Qxw')">
                        How to Raise Chickens Made Easy - Gathering Eggs
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('msko6-fbLoE')">
                        How to raise Chickens, incubation, rearing, feeding, houseing, Chicks Hatching
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('3uWLKeEf-jI')">
                        First Time Butchering Chickens
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('PJxwCkOaL9E')">
                        How I Built My Chicken Coop Step by Step- DIY
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>







@stop