@extends('layouts.default')

@section('content')
<div style="position:absolute; top:52px; z-index:-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Thank You</div>
                    <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-md-10">
                                     <label class="">Transaction completed successfully.</label>
                                </div>
                            </div>
                            <div class="clearfix clear"></div>
                            <div class="row">
                                <div class="form-group col-md-10">
                                     <label class="">Transaction Status : {{ $addnewdistri_success_msg['status'][0] }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-10">
                                    <label class="">
                                        Account Number : {{ $addnewdistri_success_msg['acc_num'][0] }}
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-10">
                                    <label class="">
                                        User Name : {{ $addnewdistri_success_msg['user_name'][0] }}
                                    </label>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-md-10">
                                    <label class="">
                                        Temporary Password : {{ $addnewdistri_success_msg['temp_pass'][0] }}
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-10">
                                    <label class="">
                                        Assigned Tier : {{ $addnewdistri_success_msg['assigned_tier'][0] }}
                                    </label>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
