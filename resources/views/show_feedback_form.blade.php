@extends('layouts.default')
@section('content')
<div style="position:absolute; top:52px; z-index:-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if( session()->has('error') )
                    <script type="text/javascript">
                        alert('{{ session()->get("error") }}');
                    </script>
                @endif
                @if( session()->has('success') )
                    <script type="text/javascript">
                        alert('{{ session()->get("success") }}');
                        location.href = '{{ route(session()->get("route")) }}'
                    </script>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>
                            Provide Your feedback for product "{{ $s->product->product_name }}"
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form id='feedback' class="form-horizontal" role="form" method="POST" action="">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ $s->purchased_by }}">
                            <div class="form-group">
                                <label class="col-md-3 control-label" style="font-size: 15px;line-height: 10px;">
                                    <strong>
                                        Product Name
                                    </strong>
                                </label>
                                <div class="col-md-7">
                                    <input type="text" value="{{ $s->product->product_name }}" disabled="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" style="font-size: 15px;line-height: 10px;">
                                    <strong>
                                        Purchased Date
                                    </strong>
                                </label>
                                <div class="col-md-7">
                                    <input type="text" value="{{ $s->date }}" disabled="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" style="font-size: 15px;line-height: 10px;">
                                    <strong>
                                        Feedback
                                    </strong>
                                </label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="feedback" required=""></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-3">
                                    
                                </div>
                                <div class="col-md-9">
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop