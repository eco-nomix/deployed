@extends('layouts.default')



@section('content')
   <div style="height:1400px; background-attachment:fixed; background-size:100% 100%; background-image:  url({{$imageUrl}});">
   </div>
   <div class="message">
       <p>{{$message}}</p>
   </div>
@stop