
    <div class="navcontainer" >
        <div class="navbar-brand brand-image">
             KineticGold
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
                    </ul>
                </li>
                <li><a href="{{URL::to('/')}}/traininglinks">Video Links<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/links/gardening">Gardening</a></li>
                        <li><a href="{{URL::to('/')}}/links/orchards">Orchards</a></li>
                        <li><a href="{{URL::to('/')}}/links/greenhouses">Greenhouses</a></li>
                        <li><a href="{{URL::to('/')}}/links/food">Food Production/Preservation</a></li>
                        <li><a href="{{URL::to('/')}}/links/aquaponics">Aquaponics</a></li>
                        <li><a href="{{URL::to('/')}}/links/poultry">Poultry</a></li>
                        <li><a href="{{URL::to('/')}}/links/livestock">Livestock</a></li>
                        <li><a href="{{URL::to('/')}}/links/beekeeping">Beekeeping</a></li>
                        <li><a href="{{URL::to('/')}}/links/water">Water</a></li>
                        <li><a href="{{URL::to('/')}}/links/energy">Energy Production</a></li>
                        <li><a href="{{URL::to('/')}}/links/biogas">Biogas</a></li>
                        <li><a href="{{URL::to('/')}}/links/recycling">Recycling</a></li>
                        <li><a href="{{URL::to('/')}}/links/camping">Survival, Camping</a></li>
                        <li><a href="{{URL::to('/')}}/links/cooking">Cooking Systems</a></li>
                        <li><a href="{{URL::to('/')}}/links/health">Home Health</a></li>
                        <li><a href="{{URL::to('/')}}/links/house">Household Products</a></li>
                        <li><a href="{{URL::to('/')}}/links/protection">Protection</a></li>
                    </ul>
                </li>
                <li><a href="{{URL::to('/')}}/people">People<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/founders">Founders</a></li>
                        <li><a href="{{URL::to('/')}}/members">Members</a></li>
                        <li><a href="{{URL::to('/')}}/charities">Charities</a></li>
                        <li><a href="{{URL::to('/')}}/groups">Sponsored Groups</a></li>
                        <li><a href="{{URL::to('/')}}/experiences">Experiences</a></li>
                    </ul>
                </li>


                <li>
                    <a href="{{URL::to('/')}}/policies">Policies and Procedures<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/mem_agreement">Membership Agreement</a></li>
                        <li><a href="{{URL::to('/')}}/mem_terms">Membership Terms and Conditions</a></li>
                        <li><a href="{{URL::to('/')}}/autoship">Auto-Ship Policy</a></li>
                         <li><a href="{{URL::to('/')}}/returns">Return Policy</a></li>
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