@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-11 col-md-offset-1">
             <div class="panel panel-default display">
              <div class="panel-heading">One of a Kind Products</div>

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