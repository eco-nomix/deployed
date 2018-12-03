@extends('...layouts.cbd')


@section('content')

<div id="main">
    <div style="width:99vw">

        <img id="img0" src="../images/freedom.jpeg" alt="" title="freedom" />
        <div STYLE="position:absolute; top:5vw;  left:40vw; width:50vw; height:20vw">
             <div>
                <h1 style="color:white;">CBD Care Group</h1>
             </div>
            <div >
                <h2 id="text1" style="color:white;">Latest Technology</h2>
            </div>
            <div >
                <p id="text2" style="color:white;">Micro-encapsulation and Polarizing</p>
            </div>
        </div>
    </div>

    <div id="div1" style="width:98vw" >
        <div class="col-md-10 col-md-offset-1">
             {{--<div style="width:100%;">--}}
                 <div class="cbd600">
                      Member Costs
                 </div>
        </div>
             {{--</div>--}}
         <div class="panel panel-default cbddisplay">
            <div class="panel-body">
               <div class="form-group col-md-12 ">
                            There are no initial, startup, annual, or monthly costs for CBD Card Group,
                             or required products to purchase</div>
               </div>
                <div class="form-group col-md-12 ">
                Registration is a simple process just
                        <ul>
                            <li>Provide your basic information (name, email, desired username and password, verify your email,update and contact information)</li>
                            <li>Submit your registration Fee</li>
                        </ul>
                </div>

            </div>
        </div>
    </div>
</div>

@stop