
    <div class="navcontainer" >
        <div class="navbar-brand brand-image">
             <a href="{{URL::to('/')}}"><sp class="kineticSm">KineticGold</sp></a>
        </div>
        <div class="referral" >
        @if(!isset($referral_link))
            Your Referral Link: <br>
            Not logged in
        @else
            Your Referral Link: <br>
            {{$referral_link}}
        @endif
        </div>
        <div style="padding:15px;">
            <ul>
                <li>
                    <a href="{{URL::to('/')}}/intro">Introduction</a>
                </li>
                <li><a href="{{URL::to('/')}}/purpose">Purpose</span></a>

                </li>
                <li><a href="{{URL::to('/')}}/plans">Business Plan<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/membercost">Membership Cost</a></li>
                        <li><a href="{{URL::to('/')}}/cryptocurrency">Kinetic Gold Cryptocurrency</a></li>
                        <li><a href="{{URL::to('/')}}/ewallet">E-wallet</a></li>
                         <li><a href="{{URL::to('/')}}/offshorebank">Offshore Bank Account</a></li>
                        <li><a href="{{URL::to('/')}}/debitcards">Debit Card</a></li>
                        <li><a href="{{URL::to('/')}}/interface">Cryptocurrency Interface</a></li>
                        <li><a href="{{URL::to('/')}}/rewards">Rewards Program</a></li>

                        <li><a href="{{URL::to('/')}}/profitsharing">Profit Sharing</a></li>
                        <li><a href="{{URL::to('/')}}/referrallinks">Referral Links</a></li>
                        <li><a href="{{URL::to('/')}}/businesscards">Business Cards</a></li>
                        <li><a href="{{URL::to('/')}}/limitations">Limitations on Recruiting</a></li>
                        <li><a href="{{URL::to('/')}}/accounting">On-line Accounting</a></li>
                        <li><a href="{{URL::to('/')}}/transfers">Immediate Transfers</a></li>
                        <li><a href="{{URL::to('/')}}/potential">Potentials</a></li>

                        <li><a href="{{URL::to('/')}}/comparison">Kinetic Gold compared to other marketing programs</a></li>
                        <li><a href="{{URL::to('/')}}/benefits">Member Benefits</a></li>
                        <li><a href="{{URL::to('/')}}/mem_agreement">Membership Agreement</a></li>
                        <li><a href="{{URL::to('/')}}/mem_terms">Membership Terms and Conditions</a></li>
                        <li><a href="{{URL::to('/')}}/autoship">Auto-Ship Policy</a></li>
                        <li><a href="{{URL::to('/')}}/returns">Return Policy</a></li>
                    </ul>
                </li>
                <li><a href="{{URL::to('/')}}/traininglinks">Presentation<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/KineticGoldOverview/index.html">Power Point</a></li>
                        <li><a href="{{URL::to('/')}}/presentation">Presentation</a></li>

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
