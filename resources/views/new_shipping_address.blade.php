@extends('layouts.default')

@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Shipping Address</div>
                <div class="panel-body">
                       <form class="form-horizontal" role="form" method="POST" action="/changeshippingaddress">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">



                        <div class="form-group">
                            <label class="col-md-4 control-label">shipping Name </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="shipping_name" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Shipping Addr1 </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="shipping_addr1" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Shipping Addr1 </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="shipping_addr2" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">City </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="shipping_city" value="">
                            </div>
                        </div>
                       <div class="form-group">
                              <label class="col-md-4 control-label">State </label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control" name="shipping_state" value="">
                              </div>
                          </div>
                       <div class="form-group">
                            <label class="col-md-4 control-label">Postal Code </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="shipping_postal_code" value="">
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Shipping Address
                                </button>

                                <a class="btn btn-default" href="{{ route('shoppingcart') }}">
                                    Go to Shopping Cart
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection