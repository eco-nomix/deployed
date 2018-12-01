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
                <div class="panel-heading">Links for Livestock - click to view</div>
                <div class="panel-body">
                     <div class="form-group col-md-12 " onclick="updateyoutube('-8OrvLeUVl4')">
                        Small Scale Integrated Livestock Farm
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('swyyZgXkr9E')">
                        Livestock Fence Bracing and Stretching
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('K1sEpGxeTsg')">
                        Urban Survival Livestock:  Raising Rabbits
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('3kQ27JlEEls')">
                        How to Choose Livestock For Your Homestead
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('z9EGqv-5Wbc')">
                        Finding Free Livestock Food
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('oqdw2uoAa4k')">
                        Quit Your Job and Become a Farmer 7 Small Farm Ideas
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('SmH9FsnTrTQ')">
                        A Basic Introduction to Raising Goats
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>







@stop