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
                <div class="panel-heading">Links for Water Purification - click to view</div>
                <div class="panel-body">
                                                                                                                                                                                             {{--</div>                                                                                                                                                                                  </div>--}}
                    <div class="form-group col-md-12 " onclick="updateyoutube('WyJIu6O9bsI')">
                        Water Purification in a Wilderness Survival Situation
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('QaAblon69sI')">
                        Make your Survival Water Filter - Step by Step
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('wg8J2a20CVg')">
                        Making water Purification Tablets
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('')">

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>







@stop