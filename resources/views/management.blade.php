@extends('layouts.default')




@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Management</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/xy/admin/management">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">
                            <div class="col-md-3">
                                 Search Last Name:
                            </div>
                            <div class="col-md-9">
                                 <input name="last_name" value="">
                            </div>
                        </div>
                        <div class="form-group col-md-12 ">
                            <button type="submit" class="btn btn-primary">
                                Search
                            </button>
                        </div>
                        <div class="form-group col-md-12 ">
                             <select id="NameSearch">
                                {!! $selectNames !!}
                             </select>
                        </div>


                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection