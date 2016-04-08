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
                <div class="panel-heading">Links for Food Production</div>
                <div class="panel-body">
                    <div class="form-group col-md-12 " onclick="updateyoutube('rfX525YOr_4')">
                        Back to Eden - wood chips
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('uM_gtZb8qyk')">
                        Back to Eden - short tour
                    </div> {{--</div>                                                                                                                                                                                  </div>--}}
                    <div class="form-group col-md-12 " onclick="updateyoutube('fbCMnMYMkZo')">
                        Back To Eden - 4 hour tour
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('HIWfGfgUCII')">
                        Paul's Compost
                    </div>

                    <div class="form-group col-md-12 " onclick="updateyoutube('foRtMmBmJk4')">
                        Pruning Basics
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('M4HnTs3hDiQ')">
                        No Dig Gardening
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>







@stop