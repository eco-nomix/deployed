
    <div class="navcontainer" >
        <div class="navbar-brand brand-image">
             <a href=""><img src="/images/Economix3731_Fotor.jpg" width="150" height="24" /></a>
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

                <li><a href="{{URL::to('/')}}/gold/traininglinks">Training Links<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/gold/links/blockchain">Block Chain</a></li>
                        <li><a href="{{URL::to('/')}}/gold/links/cryptocurrencies">Cryptocurrencies</a></li>

                    </ul>
                </li>
                <li><a href="{{URL::to('/')}}/gold/people">People<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/gold/founders">Founders</a></li>

                    </ul>
                </li>
                <li><a href="{{URL::to('/')}}/gold/purpose">Purpose<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/security">Security</a></li>
                        <li><a href="{{URL::to('/')}}/savings">Savings</a></li>
                        <li><a href="{{URL::to('/')}}/stability">Stability</a></li>
                        <li><a href="{{URL::to('/')}}/transfers">Transfers</a></li>
                        <li><a href="{{URL::to('/')}}/acceptance">Acceptance</a></li>
                        <li><a href="{{URL::to('/')}}/income">Income</a></li>
                    </ul>
                </li>
                <li><a href="{{URL::to('/')}}/plans">Business Plan<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/gold/membercost">Membership Cost</a></li>
                        <li><a href="{{URL::to('/')}}/gold/discount">Member Discount</a></li>
                        <li><a href="{{URL::to('/')}}/gold/referral">Referral Bonuses</a></li>
                         <li><a href="{{URL::to('/')}}/gold/productsSum">Products</a></li>
                        <li><a href="{{URL::to('/')}}/gold/debitcards">Debit Card</a></li>
                        <li><a href="{{URL::to('/')}}/gold/businesscards">Business Cards</a></li>
                         <li><a href="{{URL::to('/')}}/gold/startup">Start Up Package</a></li>
                         <li><a href="{{URL::to('/')}}/gold/referrallinks">Referral Links</a></li>
                        <li><a href="{{URL::to('/')}}/gold/requirements">Requirements for Earning Bonuses</a></li>
                        <li><a href="{{URL::to('/')}}/gold/limitations">Limitations on Recruiting</a></li>
                        <li><a href="{{URL::to('/')}}/gold/accounting">On-line Accounting</a></li>
                        <li><a href="{{URL::to('/')}}/gold/transfers">Immediate Transfers</a></li>
                        <li><a href="{{URL::to('/')}}/gold/potential">Potentials</a></li>
                        <li><a href="{{URL::to('/')}}/gold/comparison">Eco-Coin compared to Multi-Level</a></li>
                        <li><a href="{{URL::to('/')}}/gold/benefits">Member Benefits</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{URL::to('/')}}/gold/policies">Policies and Procedures<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/gold/mem_agreement">Membership Agreement</a></li>
                        <li><a href="{{URL::to('/')}}/gold/mem_terms">Membership Terms and Conditions</a></li>
                        <li><a href="{{URL::to('/')}}/gold/returns">Return Policy</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{URL::to('/')}}/gold/intro">Introduction</a>
                </li>
                <li>
                    <a href="{{URL::to('/')}}/gold/whitepaper">White Paper</a>
                </li>
            </ul>

            <ul class="pull-right">
                <li><a href="{{URL::to('/')}}/gold/about">About</a></li>
                <li><a href="{{URL::to('/')}}/gold/contact">Contact</a></li>

                @if ($user_name == '' or $user_name == null )
                    @if($username == '')
                        <li><a href="{{URL::to('/')}}/gold/login">Login</a></li>
                    @else
                        <li><a href="#">{{$username}}<span class="caret"></span></a>
                           <ul>
                               <l1><a href="{{URL::to('/')}}/gold/logout2">Logout</a></l1>
                           </ul>
                        </li>
                    @endif
                    <li><a href="{{URL::to('/')}}/gold/register">Register</a></li>
                @else

                    <li><a href="{{URL::to('/')}}/gold/homepage/{{$user_id}}">{{$user_name}}<span class="caret"></span></a>

                        <ul>
                            <li><a href="{{URL::to('/')}}/gold/homepage/{{$user_id}}">Personal Info</a></li>
                            <li><a href="{{URL::to('/')}}/gold/organization">Organization</a></li>
                            <li><a href="{{URL::to('/')}}/gold/myaccounting">Accounting</a></li>
                            <li><a href="{{URL::to('/')}}/gold/logout2">Logout</a></li>
                            @if($userRoles[6]=='yes')
                                <li><a href="{{URL::to('/')}}/gold/xy/admin/financial">Finance</a></li>
                            @endif
                            @if($userRoles[5]=='yes')
                                <li><a href="{{URL::to('/')}}/gold/xy/admin/management">User Management</a></li>
                                <li><a href="{{URL::to('/')}}/gold/xy/admin/products">Product Management</a></li>
                            @endif
                            @if($userRoles[7]=='yes')
                                <li><a href="{{URL::to('/')}}/gold/xy/admin/config">Config</a></li>
                            @endif
                            @if($userRoles[10]=='yes')
                                <li><a href="{{URL::to('/')}}/gold/xy/admin/gensales">General Sales</a></li>
                            @endif

                        </ul>
                    </li>
                @endif
            </ul>

        </div>

    </div>
