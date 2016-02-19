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
                <tr>
                     <td>
                        {!!$firstLevelSelect!!}
                     </td>
                    <td>number 1</td>
                    <td>sales 1</td>
                </tr>
                <tr>
                    <td class="level"  colspan="3">2st level</td>
                </tr>
                <tr>
                    <td><select>
                            <option>All</option>
                            <option>Jay Potter</option>
                            <option>Reed Davis</option>
                            <option>excentric</option>
                        </select>
                    </td>
                    <td>number 2</td>
                    <td>sales 2</td>
                </tr>
                <tr>
                    <td class="level" colspan="3">3rd level</td>
                </tr>
                <tr>
                    <td><select>
                            <option>All</option>
                            <option>Jay Potter</option>
                            <option>Reed Davis</option>
                            <option>excentric</option>
                        </select>
                    </td>
                    <td>number 3</td>
                    <td>sales 3</td>
                </tr>
                <tr>
                    <td class="level" colspan="3">4rd level</td>
                </tr>
                <tr>
                    <td><select>
                            <option>All</option>
                            <option>Jay Potter</option>
                            <option>Reed Davis</option>
                            <option>excentric</option>
                        </select>
                    </td>
                    <td>number 4</td>
                    <td>sales </td>
                </tr>
                <tr>
                    <td class="level" colspan="3">5th level</td>
                </tr>
                <tr>
                    <td><select>
                            <option>All</option>
                            <option>Jay Potter</option>
                            <option>Reed Davis</option>
                            <option>excentric</option>
                        </select>
                    </td>
                    <td>number 5</td>
                    <td>sales 5</td>
                </tr>
            </table>
        </form>
    </div>



</div>

@endsection