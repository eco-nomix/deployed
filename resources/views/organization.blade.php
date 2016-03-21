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
                    <td>Bonuses in Level</td>
                </tr>
                <tr>
                    <td class="level" colspan="4">1st level</td>
                </tr>
                <tr class="back-white">
                     <td>
                        {!!$firstLevelSelect['select']!!}
                     </td>
                    <td>{{$firstLevelSelect['count']}}</td>
                    <td>{{$firstLevelSelect['sales']}}</td>
                    <td>{{$firstLevelSelect['bonuses']}}</td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td class="level"  colspan="4">2st level</td>
                </tr>
                <tr class="back-white">
                    <td>
                        {!!$secondLevelSelect['select']!!}
                    </td>
                    <td>{{$secondLevelSelect['count']}}</td>
                    <td>{{$secondLevelSelect['sales']}}</td>
                    <td>{{$secondLevelSelect['bonuses']}}</td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td class="level" colspan="4">3rd level</td>
                </tr>
                <tr class="back-white">
                    <td>
                        {!!$thirdLevelSelect['select']!!}
                    </td>
                    <td>{{$thirdLevelSelect['count']}}</td>
                    <td>{{$thirdLevelSelect['sales']}}</td>
                    <td>{{$thirdLevelSelect['bonuses']}}</td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td class="level" colspan="4">4rd level</td>
                </tr>
                <tr class="back-white">
                    <td>
                        {!!$fourthLevelSelect['select']!!}
                    </td>
                    <td>{{$fourthLevelSelect['count']}}</td>
                    <td>{{$fourthLevelSelect['sales']}}</td>
                     <td>{{$fourthLevelSelect['bonuses']}}</td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td class="level" colspan="4">5th level</td>
                </tr>
                <tr class="back-white">
                       <td>
                           {!!$fifthLevelSelect['select']!!}
                       </td>
                       <td>{{$fifthLevelSelect['count']}}</td>
                       <td>{{$fifthLevelSelect['sales']}}</td>
                       <td>{{$fifthLevelSelect['bonuses']}}</td>
             </tr>
             <tr><td>&nbsp;</td></tr>
             <tr>
                                 <td class="level" colspan="4">Totals</td>
                             </tr>
                             <tr class="back-white">
                                    <td>

                                    </td>
                                    <td>{{$total['count']}}</td>
                                    <td>{{$total['sales']}}</td>
                                    <td>{{$total['bonuses']}}</td>
                          </tr>
            </table>
        </form>
    </div>



</div>

@endsection