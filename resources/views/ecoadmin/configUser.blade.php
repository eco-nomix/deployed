@extends('...layouts.default')

@section('content')
<div class="container-fluid" style="position:absolute; top:52px; z-index:-1">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>
                   <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/xy/admin/configuser/{{$user_id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="user_id" value="{{ $user_id }}" />




                            <div class="form-group">
                                <label class="col-md-4 control-label">First Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="first_name" value="{{$first_name}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Last Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="last_name" value="{{$last_name}}">
                                </div>
                            </div>

                            <div class="form-group col-md-12 ">
                                <label class="col-md-4 control-label">Member Roles</label>
                                <div class="col-md-6">
                                <select id="Roles" name="member_roles[]" multiple>
                                    {!! $MemberRoles !!}
                                </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">sponsor ID</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="sponsor_id" value="{{$SponsorId}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
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