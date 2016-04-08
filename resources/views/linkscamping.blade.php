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
                <div class="panel-heading">Links for Survival / Camping</div>
                <div class="panel-body">
                                                                                                                                                                                             {{--</div>                                                                                                                                                                                  </div>--}}
                    <div class="form-group col-md-12 " onclick="updateyoutube('5PqKuPzbQNs')">
                        Survival Myths That Could Actually Hurt You
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('48ROfan8tdU')">
                        Surviving in Urban Environment
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('Qp56HEx84u4')">
                        Pre-Collapse Planning
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('kNOB9S_kJLo')">
                        A Year Alone in the Wilderness
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('nBJOg-uKE6c')">
                        A-Z Bushcraft - survival and wilderness skills
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>







@stop