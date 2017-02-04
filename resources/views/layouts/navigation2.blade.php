
    <div class="navcontainer" >
        <div class="navbar-brand brand-image">
             <a href="/test/"><img src="/images/Economix3731_Fotor.jpg" width="150" height="24" /></a>
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
                <li><a href="/products">Products<span class="caret"></span></a>
                    <ul>
                        <li><a href="/selection">Product Selection</a></li>
                        <li><a href="/stores/39">Art Galleries</a></li>
                        <li><a href="/stores/38">Boutiques</a></li>
                        <li><a href="/stores/40">Estate Sales</a></li>
                        <li><a href="/stores/42">Stores</a></li>
                        <li><a href="/stores/41">Services</a></li>
                        <li><a href="/onekind">One of Kind</a></li>
                        <li><a href="/multikind">Member Products</a></li>
                        <li><a href="/food">Food Production</a></li>
                        <li><a href="/water">Water Purification</a></li>
                        <li><a href="/energy">Energy Production</a></li>
                        <li><a href="/recycling">Recycling</a></li>
                        <li><a href="/camping">Survival, Camping</a></li>
                        <li><a href="/cooking">Cooking Systems</a></li>
                        <li><a href="/health">Home Health</a></li>
                        <li><a href="/house">Household Products</a></li>
                        <li><a href="/books">Books and Guides</a></li>
                        <li><a href="/training">Training</a></li>

                    </ul>
                </li>
                <li><a href="/traininglinks">Training Links<span class="caret"></span></a>
                    <ul>
                        <li><a href="/links/gardening">Gardening</a></li>
                        <li><a href="/links/orchards">Orchards</a></li>
                        <li><a href="/links/greenhouses">Greenhouses</a></li>
                        <li><a href="/links/food">Food Production/Preservation</a></li>
                        <li><a href="/links/aquaponics">Aquaponics</a></li>
                        <li><a href="/links/poultry">Poultry</a></li>
                        <li><a href="/links/livestock">Livestock</a></li>
                        <li><a href="/links/beekeeping">Beekeeping</a></li>
                        <li><a href="/links/water">Water</a></li>
                        <li><a href="/links/energy">Energy Production</a></li>
                        <li><a href="/links/biogas">Biogas</a></li>
                        <li><a href="/links/recycling">Recycling</a></li>
                        <li><a href="/links/camping">Survival, Camping</a></li>
                        <li><a href="/links/cooking">Cooking Systems</a></li>
                        <li><a href="/links/health">Home Health</a></li>
                        <li><a href="/links/house">Household Products</a></li>
                        <li><a href="/links/protection">Protection</a></li>
                    </ul>
                </li>
                <li><a href="/people">People<span class="caret"></span></a>
                    <ul>
                        <li><a href="/founders">Founders</a></li>
                        <li><a href="/members">Members</a></li>
                        <li><a href="/charities">Charities</a></li>
                        <li><a href="/groups">Sponsored Groups</a></li>
                        <li><a href="/experiences">Experiences</a></li>
                    </ul>
                </li>
                <li><a href="/purpose">Purpose<span class="caret"></span></a>
                    <ul>
                        <li><a href="/physically">Physically</a></li>
                        <li><a href="/emotionally">Emotionally</a></li>
                        <li><a href="/spiritually">Spiritually</a></li>
                        <li><a href="/economically">Economically</a></li>
                        <li><a href="/selfreliance">Self-Reliance</a></li>
                    </ul>
                </li>
                <li><a href="/plans">Business Plan<span class="caret"></span></a>
                    <ul>
                        <li><a href="/membercost">Membership Cost</a></li>
                        <li><a href="/discount">Member Discount</a></li>
                        <li><a href="/referral">Referral Bonuses</a></li>
                         <li><a href="/productsSum">Products</a></li>
                        <li><a href="/debitcards">Debit Card</a></li>
                        <li><a href="/businesscards">Business Cards</a></li>
                         <li><a href="/startup">Start Up Package</a></li>
                         <li><a href="/referrallinks">Referral Links</a></li>
                        <li><a href="/requirements">Requirements for Earning Bonuses</a></li>
                        <li><a href="/limitations">Limitations on Recruiting</a></li>
                        <li><a href="/accounting">On-line Accounting</a></li>
                        <li><a href="/transfers">Immediate Transfers</a></li>
                        <li><a href="/potential">Potentials</a></li>
                        <li><a href="/donations">Donations</a></li>
                        <li><a href="/comparison">Eco-nomix compared to Multi-Level</a></li>
                        <li><a href="/benefits">Member Benefits</a></li>
                        <li><a href="/autoship">Auto-Ship Policy</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/intro">Introduction</a>
                </li>
            </ul>

            <ul class="pull-right">
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>

                @if ($user_name == '' or $user_name == null )
                    @if($username == '')
                        <li><a href="/login">Login</a></li>
                    @else
                        <li><a href="#">{{$username}}<span class="caret"></span></a>
                           <ul>
                               <l1><a href="/logout2">Logout</a></l1>
                           </ul>
                        </li>
                    @endif
                    <li><a href="/register">Register</a></li>
                @else

                    <li><a href="/homepage/{{$user_id}}">{{$user_name}}<span class="caret"></span></a>
                        <ul>
                            <li><a href="/homepage/{{$user_id}}">Personal Info</a></li>
                            <li><a href="/organization">Organization</a></li>
                            <li><a href="/myaccounting">Accounting</a></li>
                            <li><a href="/logout2">Logout</a></li>
                            @if($userRoles[6]=='yes')
                                <li><a href="/xy/admin/financial">Finance</a></li>
                            @endif
                            @if($userRoles[5]=='yes')
                                <li><a href="/xy/admin/management">User Management</a></li>
                                <li><a href="/xy/admin/products">Product Management</a></li>
                            @endif
                            @if($userRoles[7]=='yes')
                                <li><a href="/xy/admin/config">Config</a></li>
                            @endif
                            @if($userRoles[10]=='yes')
                                <li><a href="/xy/admin/gensales">General Sales</a></li>
                            @endif

                        </ul>
                    </li>
                @endif
            </ul>

        </div>

    </div>
