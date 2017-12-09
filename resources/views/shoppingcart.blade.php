@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-11 col-md-offset-1">
             <div class="panel panel-default display">
                 <div class="panel-heading">Shopping Cart</div>
                 <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="/purchase">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">

                          <table width="100%" border="1" class="summary">
                            {!!$shoppingCart!!}
                            {!!$shipping!!}
                          </table>

                     </form>
                  </div>
               </div>
            </div>

            <!-- <div class="col-md-11 col-md-offset-1">
                <div class="panel panel-default display">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label class="control-label">
                                      Address 1
                                    </label>
                                    <textarea class="form-control" name="addr1" rows="4" style="height: 120px;"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">
                                      Address 2
                                    </label>
                                    <textarea class="form-control" name="addr2" rows="4" style="height: 120px;"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">
                                      City
                                    </label>
                                    <input type="text" name="ship_city" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">
                                      State
                                    </label>
                                    <input type="text" name="ship_state" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">
                                      Country
                                    </label>
                                    <input type="text" name="ship_country" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">
                                      Postal Code
                                    </label>
                                    <input type="text" name="ship_postal_code" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
     </div>
  </div>
</div>
@stop


@if( !is_numeric(session()->get('user_id')) )
  @push('custom')
    <script type="text/javascript">
      alert('Register with us to save money');
    </script>
  @endpush
@endif