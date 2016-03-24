@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-11 col-md-offset-1">
             <div class="panel panel-default display">
                 <div class="panel-heading">Books and Guides</div>
                 <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="/books">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group col-md-12 ">
                              <div class="col-md-4">
                                 Select Categories:
                              </div>
                              <div class="col-md-8">
                                {!!$Categories!!}
                              </div>
                          </div>
                          <table width="100%" border="1" class="summary">
                            {!!$productSummary!!}
                          </table>
                     </form>
                  </div>
               </div>
            </div>
        </div>
     </div>
  </div>
</div>








@stop