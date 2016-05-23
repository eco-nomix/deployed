@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-11 col-md-offset-1">
             <div class="panel panel-default display">
              <div class="panel-heading">{{$store_type}} - {{$store->name}} </div>
                 <div class="panel-body">
                    <div class="inline">

                        <div >
                            <img src="/images/{{$store->logo}}" width="300">
                        </div>
                    </div>
                    <div class="inline" style="width:30px;">
                    &nbsp
                    </div>
                    <div class="inline">
                        @if($user->picture)
                            <img src="/images/{{$user->picture}}" width="200">
                        @endif
                    </div>
                    <div class="inline-right" style="width:700px;">
                        <div>{{$store->gen_description}}</div>
                        <br>
                        <div>{{$store->detailed_description}}</div>
                        <br>
                        <div>{{$store->owner_description}}</div>
                        @if($store->user_id == $user_id)
                        <br>
                        <br>
                        <div>
                           <a href="/store/addproduct/{{$store->id}}" class="btn btn-primary">Add Product</a>
                        </div>
                        @endif
                    </div>
                 </div>
                 <div class="panel-body">

                     <div class="form-group" >
                        <table width="100%" border="1" class="summary">
                            {!!$productSummary!!}
                        </table>
                     </div>

                  </div>
               </div>
            </div>
        </div>
     </div>
  </div>
</div>








@stop