@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-11 col-md-offset-1">
             <div class="panel panel-default display">
                 <div class="panel-heading">{{$Product->product_name}}
                        @if($user_id == $store->user_id)
                            <a href="/store/{{$store->id}}/productedit/{{$Product->id}}" class="btn btn-primary" >Edit</a>
                            @endif
                        <span title="single-click to add; double-click to view" data-id="{{$Product->id}}" data-userid="{{$user->id}}" class="pull-right addcart">+<img width="40px" src="\images\shopping_cart_small.jpg"><span id="cartcount">{{$ItemCount}}</span></span>
                 </div>
                 <div class="panel-body">
                        <div class="form-group col-md-12 ">
                             {{$Product->description}}
                        </div>
                        <br>
                        <table width="100%"  style="margin:4px;">
                            <tr >
                                 <td class="eighth"><img src="\images\{{$Product->image}}" width="400"></td>
                                 <td>
                                    <table width="100%" style="margin:4px;">
                                        <tr>
                                            <td>Botique: {{$store->name}}</td>
                                            <td><img src="/images/{{$user->picture}}" width="200"></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <th rowspan=2 class="summary">
                                              {!!$Product->display_description!!}
                                            </th>
                                            <td class="my200">
                                               Member Price:
                                               Shipping:
                                               Handling:
                                            </td>
                                            <td>
                                                ${{$Product->retail}}<br>
                                                ${{$Product->cost_shipping}}<br>
                                                ${{$Product->shipping_handling}}

                                            </td>

                                        </tr>
                                        <tr>

                                        </tr>
                                        <tr><td>&nbsp;</td></tr>
                                        <tr>
                                            <td colspan="3" class="author">{!! $store->owner_description !!}</td>
                                        </tr>

                                    </table>
                                 </td>
                            </tr>


                        </table>

                  </div>
               </div>
            </div>
        </div>
     </div>
  </div>
</div>








@stop