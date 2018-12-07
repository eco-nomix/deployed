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
                <div class="panel-heading">Links for Protection - click to view</div>
                <div class="panel-body">
                     <div class="form-group col-md-12 " onclick="updateyoutube('xfpMEin8D4c')">
                        Top 5 Guns for Home Defense
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('l2FAD4bYMuY')">
                        Preppers Home Invasion Security Defense:  Hardening the House for SHTF
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('Kdv2DiSUc8g')">
                        Home Security:  how to prevent burglars from breaking into your home
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('oRLO56_jhr4')">
                        Gold, Silver & Home Protection for a Reluctant Prepper
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('2VNPH_z3MwE')">
                        The Day that SHTF Happened - A Scenario
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>







@stop