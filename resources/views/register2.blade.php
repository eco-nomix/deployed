@extends('layouts.default')

@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register Contact Info</div>
                <div class="panel-body">
                       <form class="form-horizontal" role="form" method="POST" action="/register2">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Home Phone</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="home_phone" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Cell Phone</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="cell_phone" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Address 1</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="addr1" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Address 2</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="addr2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="city">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">State</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="state">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Country</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="country">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Zip Code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="postal_code">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Social Security Number</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="social_security">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Continue
                                </button>
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