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
                <div class="panel-heading">Links for Recycling - click to view</div>
                <div class="panel-body">
                                                                                                                                                                                             {{--</div>                                                                                                                                                                                  </div>--}}
                    <div class="form-group col-md-12 " onclick="updateyoutube('eym10GGidQU')">
                       How This Town Produces No Trash
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('4xEVsrwmPTY')">
                        Scrap Metal - How to make money Scraping & Recycling Metal, Tricks and Tips
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('jHx95PQIl4k')">
                        Aluminum Recycling
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('TJqpXdMHNTM')">
                        20 Ideas of How to Reuse and Recycle Old Tires
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>







@stop