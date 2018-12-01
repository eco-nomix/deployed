@extends('layouts.cbd')


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
                      Member Benefits
                 </div>
        </div>
             {{--</div>--}}
         <div class="panel panel-default cbddisplay">
            <div class="panel-body">
               <div class="form-group col-md-12 ">
                     The CBD Care Group is an association that is focused on making our members
                     aware of the benefits of CBD products and by making the best products available.  It will do this in the form
                     of a series of product categories and a monthly newletter that is sent to all of it's members detailing
                     information about various opportunities, programs, their risks and potential rewards along with a
                     a detailed 'how-to' method to get involved if you are interested.
                </div>
                <div class="form-group col-md-12 ">
                     There are no requirements for members of the CBD Care Group to participate
                     within any opportunity, program or make purchases of CBD Products.  All member's need to do their own
                     due diligence to determine if any particular product or opportunity fit's with your
                     investment goals and/or styles, limits and desires.
                </div>
                <div class="form-group col-md-12 ">
                    <strong>CBD Care Group Member Benefits are detailed as follows:</strong>
                    <ul>
                      <li>Members will receive the monthly CBD Care Group newsletter.</li>
                      <li>Educational Videos concerning the CBD Care Group goals of helping our
                      members become aware of the benefits and risks associated with CBD products.  All
                      of the Videos produced
                         over the life of the program will be available on demand to our members.</li>
                      <li>Some of the programs offered to our Members will be exclusive to our
                      members, but that will not always be the case.</li>
                      <li>CBD Care Group will track 'sponsorship' of its members that can be
                      utilized by the various programs offered to it's members</li>
                      <li>Any financial benefits from participation within a program referred
                      by CBD Care Group will be paid directly to the participants by the
                      sponsoring program.</li>
                      <li>CBD Care Group has a multi-level affiliate program where member's can earn income from purchases made by other members that they have helped sponsor.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@stop