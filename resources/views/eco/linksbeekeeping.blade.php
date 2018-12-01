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
                <div class="panel-heading">Links for Beekeeping - click to view</div>
                <div class="panel-body">
                     <div class="form-group col-md-12 " onclick="updateyoutube('hmgv1NuRFEU')">
                        Beekeeping For Beginners and Beekeeping Basics
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('zDZDYgBkCx0')">
                        Beekeeping for Beginners - Hive Set Up
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('if0C046XXmA')">
                        Difference between a Flow ive and Langstroth hive
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('P9L8yYDWvmo')">
                        Collecting Honey Without Extractor
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('LUjHlhm_sbI')">
                        Part Time Income With Hobby Beekeeping
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('-rwDPXJdJG8')">
                        Michael Bush, Lazy Beekeeping
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('z9Bj9vJpZhg')">
                        Beekeeping for Beginners - Really
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('CfuQXa5rUP0')">
                        Building New Hives
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>







@stop