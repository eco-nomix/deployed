@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1; width:100%; ">

    <div style="width:100%">

        <div style="width:100%" class="text-center display">Organization for {{$user_name}}</div>

        <form class="form-horizontal" role="form" method="POST" action="/organization">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <table style="width:100%" class="text-center">
               <tr class="header">
                    <td>Members Name</td>
                    <td>Number in Level</td>
                    <td>Sales in Level</td>
                </tr>
                <tr>
                    <td class="level" colspan="3">1st level</td>
                </tr>
                <tr class="white">
                     <td>
                        {!!$firstLevelSelect['select']!!}
                     </td>
                    <td>{{$firstLevelSelect['count']}}</td>
                    <td>{{$firstLevelSelect['sales']}}</td>
                </tr>
                <tr>
                    <td class="level"  colspan="3">2st level</td>
                </tr>
                <tr>
                    <td>
                        {!!$secondLevelSelect['select']!!}
                    </td>
                    <td>{{$secondLevelSelect['count']}}</td>
                    <td>{{$secondLevelSelect['sales']}}</td>
                </tr>
                <tr>
                    <td class="level" colspan="3">3rd level</td>
                </tr>
                <tr>
                    <td>
                        {!!$thirdLevelSelect['select']!!}
                    </td>
                    <td>{{$thirdLevelSelect['count']}}</td>
                    <td>{{$thirdLevelSelect['sales']}}</td>
                </tr>
                <tr>
                    <td class="level" colspan="3">4rd level</td>
                </tr>
                <tr>
                    <td>
                        {!!$fourthLevelSelect['select']!!}
                    </td>
                    <td>{{$fourthLevelSelect['count']}}</td>
                    <td>{{$fourthLevelSelect['sales']}}</td>
                </tr>
                <tr>
                    <td class="level" colspan="3">5th level</td>
                </tr>
                <tr>
                       <td>
                           {!!$fifthLevelSelect['select']!!}
                       </td>
                       <td>{{$fifthLevelSelect['count']}}</td>
                       <td>{{$fifthLevelSelect['sales']}}</td>
             </tr>
            </table>
        </form>
    </div>



</div>

@endsection