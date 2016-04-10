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
                <div class="panel-heading">Links for Greenhouses - click to view</div>
                <div class="panel-body">
                     <div class="form-group col-md-12 " onclick="updateyoutube('sz20zUiTLUk')">
                        Aquaponics Greenhouse Build
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('FPjko9DDhcU')">
                        What Type of Greenhouse Should You Build?
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('LlEczaE0-eg')">
                        Winter Growing in a Greenhouse
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('0YCP5wGCqqY')">
                        PVC greenhouse in a day DIY
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('sCvTNM_UdlI')">
                        DIY Greenhouse for Heavy Snow & High Wind Areas
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('0r8UHFsrGJA')">
                        Geo Thermal Greenhouse Works!  LDSPrepper Tour
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('OfUncmuI6tA')">
                        11 Ways to Regulate the Temperature in the Greenhouse
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>







@stop