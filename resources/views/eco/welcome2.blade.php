@extends('...layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
    <table >
        <tr>
            <td><div style="width:600px; height:500px;  background-size:100% 100%; background-image:  url({{$imageUrl}});"></div></td>
            <td><div class="message2">{{$message}}</div></td>
        </tr>
    </table>
    </div>










@stop