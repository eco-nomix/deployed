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
    max-font-size:24px;
    line-heght:4vw;
}
.navcontainer{
      max-font-size:24px;
}
#main{
  width:98vw;
  margin:0 0 0 2vw;
  text-align:center;
  position:absolute;
  top:5vw;

}
#img0{

    width:95vw;
     height:calc(95vw/3);
}
#div0{
  text-align:center; margin:10px;
}
#div1{
  margin:10px;
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

                <li><a href="{{URL::to('/')}}/shop">Shop<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/Gummies">Gummies</a></li>
                        <li><a href="{{URL::to('/')}}/HempOil">Hemp Oil</a></li>
                        <li><a href="{{URL::to('/')}}/capsules">Capsules</a></li>
                        <li><a href="{{URL::to('/')}}/topical">Topical</a></li>
                        <li><a href="{{URL::to('/')}}/vape">Vapes</a></li>
                        <li><a href="{{URL::to('/')}}/Balms">Balms</a></li>
                        <li><a href="{{URL::to('/')}}/skincare">Skin Care</a></li>
                        <li><a href="{{URL::to('/')}}/cbdoils">CBD Oils</a></li>
                        <li><a href="{{URL::to('/')}}/papin">Pain Treatment</a></li>
                        <li><a href="{{URL::to('/')}}/edibles">Edibles</a></li>
                    </ul>

                </li>

            </ul>
             <ul>

                <li><a href="{{URL::to('/')}}/shop">Income<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/benefits3">Member Benefit</a></li>
                        <li><a href="{{URL::to('/')}}/membercost3">Member Cost</a></li>
                        <li><a href="{{URL::to('/')}}/HempOil">Profit Sharing</a></li>
                        <li><a href="{{URL::to('/')}}/capsules">Referral Links</a></li>
                        <li><a href="{{URL::to('/')}}/limitations">Limitations on Sponsoring</a></li>
                        <li><a href="{{URL::to('/')}}/accounting">On-Line Accounting</a></li>
                        <li><a href="{{URL::to('/')}}/Balms">Member Requirements</a></li>
                        <li><a href="{{URL::to('/')}}/mem_agreement3">Member Agreement</a></li>
                        <li><a href="{{URL::to('/')}}/memberterms3">Member Terms and Conditions</li>
                        <li><a href="{{URL::to('/')}}/autoship3">Auto-Ship Policy</a></li>
                        <li><a href="{{URL::to('/')}}/returns3">Return Policy</a></li>
                        <li><a href="{{URL::to('/')}}/privacy3">Privacy Policy</a></li>
                        <li><a href="{{URL::to('/')}}/policies3">General Policies and Procedures</a></li>
                    </ul>

                </li>

                        </ul>

            <ul class="pull-right">
                <li><a href="{{URL::to('/')}}/about4">About</a></li>


                @if ($user_name == '' or $user_name == null )
                    @if($username == '')
                        <li><a href="{{URL::to('/')}}/login4">Login</a></li>
                    @else
                        <li><a href="#">{{$username}}<span class="caret"></span></a>
                           <ul>
                               <l1><a href="{{URL::to('/')}}/logout4">Logout</a></l1>
                           </ul>
                        </li>
                    @endif
                @else

                    <li><a href="{{URL::to('/')}}/homepage4/{{$user_id}}">{{$user_name}}<span class="caret"></span></a>

                        <ul>
                            <li><a href="{{URL::to('/')}}/homepage4/{{$user_id}}">Personal Info</a></li>
                            <li><a href="{{URL::to('/')}}/organization4">Organization</a></li>
                            <li><a href="{{URL::to('/')}}/myaccounting4">Accounting</a></li>
                            <li><a href="{{URL::to('/')}}/logout4">Logout</a></li>
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
