@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-11 col-md-offset-1">
             <div class="panel panel-default display">
                 <div class="panel-heading">{{$title}}</div>
                 <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="/books">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">

                          <table width="100%" border="1" class="summary" border="1">
                            @foreach($stores as $store)
                                <tr>

                                    <td style="width:200px; vertical-align:middle;">
                                        <a href="/store/{{$store->id}}">
                                            <div align="center" style="width:200px;">{{$store->name}}</div>
                                            <div align="center" style="display:table-cell; vertical-align:middle; text-align:center; width:200px; height:60px;"><img src="../images/{{$store->logo}}" width="150"  ></div>
                                        </a>
                                    </td>
                                    <td>
                                         <a href="/store/{{$store->id}}">
                                            <div align="center" >{{$store->gen_description}}</div>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                            <tr>
                                 <td> 
                                     <a href="/store/{{$product_group}}/add/{{$user_id}}">
                                           <div align="center" style="width:200px;">Add/Edit your own {{$store_type}}</div>
                                           <div align="center" style="display:table-cell; vertical-align:middle; text-align:center; width:200px; height:60px;"><img src="../images/KineticGold3731_Fotor.jpg" width="150"  ></div>
                                     </a>
                                 </td>
                                 <td>
                                      <a href="/store/{{$product_group}}/add/{{$user_id}}">
                                          <div align="center" >Create or Edit your Own {{$store_type}} using KineticGold.  You can carry any product/service that you like,  get to set your own price,<br> shipping procedure. You can even take orders for custom products. Set it up the way you want.</div>
                                      </a>
                                 </td>
                            </tr>
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