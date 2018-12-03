@extends('...layouts.cbd')


@section('content')

<div id="main">
    <div>

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

    <div style="width:98vw">
        <div class="cbdheader">
            Referral Links
        </div>
    </div>
     <div  class="panel panel-default cbddisplay">


        <div class="panel-body">
            <div class="form-group col-md-12 ">
                   All KineticGold Members have the opportunity to refer new clients to the KineticGold family.
               </div>
               <div class="form-group col-md-12 ">
                   Once registered and logged in the Referral Link below will show 'Your Referral Link'.
               </div>
              <div class="form-group col-md-12 ">
                   Use the Referral Link below to help grow your organization and your income possibilities.
                   Simply encourage potential clients to initially access the site using your referral link.
                   When they do, the site knows who referred them and if they register, you will receive the
                   credit of 'Sponsoring' them . They will have full access to the site and can determine
                   first if they want to complete their registeration or not. </div>
               <div class="form-group">
                   <label class="col-md-4 control-label">Referral Link</label>
                   <div class="col-md-6">
                       {{--{{$ReferralLink}}--}}
                   </div>
               </div>
             <div class="form-group col-md-12 standout">
                   Suggestions:  These links can be placed on business cards, added to emails,  facebook, tweets,
                   anyway you want to get the word out.  If anyone uses one of these links.  You get to Mine Gold
             </div>

             <div class="form-group col-md-12 ">

             </div>
        </div>
    </div>

</div>

@stop