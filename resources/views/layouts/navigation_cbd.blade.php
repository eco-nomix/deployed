<style>
h1{
    font-size:5.7vw;


}
h2{
    font-size:4.0vw;

}
h3{
    font-size:3.2vw;
}
h4{
    font-size:2.5vw;
}
p{
    font-size:3.5vw;
    max-font-size:18px;
    line-heght:4vw;
 }

 p strong{
    font-size:4.0vw;
    font-weight:bolder;
    max-font-size:22px;
    color:darkgreen;
    line-heght:4vw;
 }
 strong{
    font-size:4.0vw;
     font-weight:bolder;
     max-font-size:22px;
     color:darkgreen;
     line-heght:4vw;
 }
.navcontainer{
      max-font-size:24px;
}
#main{
  width:100%;
  margin:0 0 0 0;
  text-align:center;
  position:absolute;
  top:5vw;

}
#img0{

    width:100%;
     height:calc(99vw/3);
}
#div0{
  text-align:center; margin:10px;
}
#div1{
  margin:.2vw;
  text-align:justify;
}

#div2{
    margin:10px;
     text-align:justify;
 }
 #div3{
   margin:10px;
    text-align:justify;
 }
 #div4{
    margin:10px;
     text-align:justify;
 }
</style>
    <div class="navcontainer" >
        {{--<div class="navbar-brand brand-image">--}}
             {{--<a href="{{URL::to('/')}}"><sp class="tibSm">TCHAMGANG</sp></a>--}}
        {{--</div>--}}

        <div style="padding:2px;">
            <ul>

                <li><a href="{{URL::to('/')}}/">Shop<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/">Gummies</a></li>
                        <li><a href="{{URL::to('/')}}/">Hemp Oil</a></li>
                        <li><a href="{{URL::to('/')}}/">Capsules</a></li>
                        <li><a href="{{URL::to('/')}}/">Topical</a></li>
                        <li><a href="{{URL::to('/')}}/">Vapes</a></li>
                        <li><a href="{{URL::to('/')}}/">Balms</a></li>
                        <li><a href="{{URL::to('/')}}/">Skin Care</a></li>
                        <li><a href="{{URL::to('/')}}/">CBD Oils</a></li>
                        <li><a href="{{URL::to('/')}}/">Pain Treatment</a></li>
                        <li><a href="{{URL::to('/')}}/">Edibles</a></li>
                    </ul>

                </li>

            </ul>
             <ul>

                <li><a href="{{URL::to('/')}}/">Income<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/benefits4">Member Benefit</a></li>
                        <li><a href="{{URL::to('/')}}/membercost4">Member Cost</a></li>
                        <li><a href="{{URL::to('/')}}/profitsharing4">Profit Sharing</a></li>
                        <li><a href="{{URL::to('/')}}/active">Active Membership</a></li>
                        <li><a href="{{URL::to('/')}}/">Referral Links</a></li>
                        <li><a href="{{URL::to('/')}}/">Limitations on Sponsoring</a></li>
                        <li><a href="{{URL::to('/')}}/">On-Line Accounting</a></li>
                        <li><a href="{{URL::to('/')}}/">Member Requirements</a></li>
                        <li><a href="{{URL::to('/')}}/">Member Agreement</a></li>
                        <li><a href="{{URL::to('/')}}/">Member Terms and Conditions</li>
                        <li><a href="{{URL::to('/')}}/">Auto-Ship Policy</a></li>
                        <li><a href="{{URL::to('/')}}/">Return Policy</a></li>
                        <li><a href="{{URL::to('/')}}/">Privacy Policy</a></li>
                        <li><a href="{{URL::to('/')}}/">General Policies and Procedures</a></li>
                    </ul>

                </li>

                        </ul>

            <ul class="pull-right">
                <li><a href="{{URL::to('/')}}/">About</a></li>


                @if ($user_name == '' or $user_name == null )
                    @if($username == '')
                        <li><a href="{{URL::to('/')}}/">Login</a></li>
                    @else
                        <li><a href="#">{{$username}}<span class="caret"></span></a>
                           <ul>
                               <l1><a href="{{URL::to('/')}}/">Logout</a></l1>
                           </ul>
                        </li>
                    @endif
                @else

                    <li><a href="{{URL::to('/')}}/homepage4/{{$user_id}}">{{$user_name}}<span class="caret"></span></a>

                        <ul>
                            <li><a href="{{URL::to('/')}}/homepage4/{{$user_id}}">Personal Info</a></li>
                            <li><a href="{{URL::to('/')}}/">Organization</a></li>
                            <li><a href="{{URL::to('/')}}/">Accounting</a></li>
                            <li><a href="{{URL::to('/')}}/">Logout</a></li>
                            @if($userRoles[6]=='yes')
                                <li><a href="{{URL::to('/')}}/cbd/admin/financial">Finance</a></li>
                            @endif
                            @if($userRoles[5]=='yes')
                                <li><a href="{{URL::to('/')}}/cbd/admin/management">User Management</a></li>
                                <li><a href="{{URL::to('/')}}/cbd/admin/products">Product Management</a></li>
                            @endif
                            @if($userRoles[7]=='yes')
                                <li><a href="{{URL::to('/')}}/cbd/admin/config">Config</a></li>
                            @endif
                            @if($userRoles[10]=='yes')
                                <li><a href="{{URL::to('/')}}/cbd/admin/gensales">General Sales</a></li>
                            @endif

                        </ul>
                    </li>
                @endif
            </ul>

        </div>

    </div>
