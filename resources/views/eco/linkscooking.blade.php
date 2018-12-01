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
                <div class="panel-heading">Links for Cooking Systems - click to view</div>
                <div class="panel-body">
                                                                                                                                                                                             {{--</div>                                                                                                                                                                                  </div>--}}
                    <div class="form-group col-md-12 " onclick="updateyoutube('P0qDmHA1zHI')">
                       JetBoil Flash - Personal Cooking System
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('M8Nb39ADBqQ')">
                        Rice Cooking Systems
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('TPcLn4ZKAtw')">
                       NuWave PIC
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('TX7kwfE3cJQ')">
                       How Cooking Can Change Your Life - Michael Pollan
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>







@stop