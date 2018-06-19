
    <div class="navcontainer" >
        <div class="navbar-brand brand-image">
             <a href="{{URL::to('/info')}}"><sp class="kineticSm">Gold Diggers</sp></a>
        </div>

        <div style="padding:15px;">
            <ul>
                <li>
                    <a href="{{URL::to('/')}}/info">Introduction</a>
                </li>
                <li><a href="{{URL::to('/')}}/purpose2">Purpose</span></a>
                </li>
                <li><a href="{{URL::to('/')}}/plans">Business Plan<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/membercost2">Membership Cost</a></li>
                        <li><a href="{{URL::to('/')}}/benefits2">Member Benefits</a></li>
                        <li><a href="{{URL::to('/')}}/requirements2">Member Requirements</a></li>
                        <li><a href="{{URL::to('/')}}/mem_agreement2">Membership Agreement</a></li>
                        <li><a href="{{URL::to('/')}}/mem_terms2">Membership Terms and Conditions</a></li>
                        <li><a href="{{URL::to('/')}}/autoship2">Auto-Ship Policy</a></li>
                        <li><a href="{{URL::to('/')}}/returns2">Return Policy</a></li>
                        <li><a href="{{URL::to('/')}}/privacy2">Privacy Policy</a></li>
                        <li><a href="{{URL::to('/')}}/policies2">General Policy and Procedures</a></li>
                    </ul>
                </li>
                <li><a href="http://kineticgold.org/">Kinetic Gold</a></li>


                <li><a href="{{URL::to('/')}}/traininglinks">Training<span class="caret"></span></a>
                    <ul>
                        {{--<li><a href="{{URL::to('/')}}/KineticGoldOverview/index.html">Power Point</a></li>--}}
                        <li><a href="{{URL::to('/')}}/present">KineticGold Presentation</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="pull-right">
                <li><a href="{{URL::to('/')}}/about">About</a></li>
                <li><a href="{{URL::to('/')}}/contact">Contact</a></li>

                @if ($user_name == '' or $user_name == null )
                    @if($username == '')
                        <li><a href="{{URL::to('/')}}/login">Login</a></li>
                    @else
                        <li><a href="#">{{$username}}<span class="caret"></span></a>
                           <ul>
                               <l1><a href="{{URL::to('/')}}/logout2">Logout</a></l1>
                           </ul>
                        </li>
                    @endif
                    <li><a href="{{URL::to('/')}}/register">Register</a></li>
                @else

                    <li><a href="{{URL::to('/')}}/homepage/{{$user_id}}">{{$user_name}}<span class="caret"></span></a>

                        <ul>
                            <li><a href="{{URL::to('/')}}/homepage/{{$user_id}}">Personal Info</a></li>
                            <li><a href="{{URL::to('/')}}/organization">Organization</a></li>
                            <li><a href="{{URL::to('/')}}/myaccounting">Accounting</a></li>
                            <li><a href="{{URL::to('/')}}/logout2">Logout</a></li>
                            @if($userRoles[6]=='yes')
                                <li><a href="{{URL::to('/')}}/xy/admin/financial">Finance</a></li>
                            @endif
                            @if($userRoles[5]=='yes')
                                <li><a href="{{URL::to('/')}}/xy/admin/management">User Management</a></li>
                                <li><a href="{{URL::to('/')}}/xy/admin/products">Product Management</a></li>
                            @endif
                            @if($userRoles[7]=='yes')
                                <li><a href="{{URL::to('/')}}/xy/admin/config">Config</a></li>
                            @endif
                            @if($userRoles[10]=='yes')
                                <li><a href="{{URL::to('/')}}/xy/admin/gensales">General Sales</a></li>
                            @endif

                        </ul>
                    </li>
                @endif
            </ul>

        </div>

    </div>
