@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div style="width:100%;">
    <div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
       <div class="skip">&nbsp;</div>
        <div class="trans row">
        <div class="col-md-8 col-md-offset-2">
         <div style="width:100%;">
                                <div class="kinetic600">
                                    Auto-Ship Policy
                                </div>
                            </div>
            <div class="panel panel-default display">
                <div class="panel-heading">Auto-Ship Policy</div>
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            Kinetic Gold does not sell products that require or utilize Auto-Ship    </div>

                </div>
            </div>
         <div class="skip">&nbsp;</div>
          <div class="skip">&nbsp;</div>
           <div class="skip">&nbsp;</div>
            <div class="skip">&nbsp;</div>
             <div class="skip">&nbsp;</div>
              <div class="skip">&nbsp;</div>
               <div class="skip">&nbsp;</div>
                <div class="skip">&nbsp;</div>
                 <div class="skip">&nbsp;</div>
                  <div class="skip">&nbsp;</div>
                  
        </div>
    </div>
    </div>
</div>
</div>
@stop