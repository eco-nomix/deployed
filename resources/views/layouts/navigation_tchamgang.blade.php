
    <div class="navcontainer3" >
        <div class="navbar-brand brand-image">
             <a href="{{URL::to('/')}}"><sp class="tibSm">TCHAMGANG</sp></a>
        </div>

        <div style="padding:15px;">
            <ul>
                <li>
                    <a href="{{URL::to('/')}}/intro_tib">Introduction</a>
                </li>

                <li><a href="{{URL::to('/')}}/products">Products<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/')}}/membercost3">Books</a></li>
                        <li><a href="{{URL::to('/')}}/benefits3">Movies</a></li>
                        <li><a href="{{URL::to('/')}}/mem_agreement3">Design</a></li>
                        <li><a href="{{URL::to('/')}}/mem_terms3">Jewelry</a></li>
                        <li><a href="{{URL::to('/')}}/autoship3">Fashion</a></li>
                        <li><a href="{{URL::to('/')}}/returns3">Nutrition</a></li>
                        <li><a href="{{URL::to('/')}}/privacy3">Herbal Supplements</a></li>
                        <li><a href="{{URL::to('/')}}/policies3">Music</a></li>
                        <li><a href="{{URL::to('/')}}/privacy3">Beauty Products</a></li>
                        <li><a href="{{URL::to('/')}}/policies3">African Art</a></li>
                    </ul>

                </li>

            </ul>

            <ul class="pull-right">
                <li><a href="{{URL::to('/')}}/about3">About</a></li>
                <li><a href="{{URL::to('/')}}/contact3">Contact</a></li>

                @if ($user_name == '' or $user_name == null )
                    @if($username == '')
                        <li><a href="{{URL::to('/')}}/login3">Login</a></li>
                    @else
                        <li><a href="#">{{$username}}<span class="caret"></span></a>
                           <ul>
                               <l1><a href="{{URL::to('/')}}/logout3">Logout</a></l1>
                           </ul>
                        </li>
                    @endif
                    <li><a href="{{URL::to('/')}}/register3">Register</a></li>
                @else

                    <li><a href="{{URL::to('/')}}/homepage3/{{$user_id}}">{{$user_name}}<span class="caret"></span></a>

                        <ul>
                            <li><a href="{{URL::to('/')}}/homepage3/{{$user_id}}">Personal Info</a></li>
                            <li><a href="{{URL::to('/')}}/organization3">Organization</a></li>
                            <li><a href="{{URL::to('/')}}/myaccounting3">Accounting</a></li>
                            <li><a href="{{URL::to('/')}}/logout3">Logout</a></li>
                            @if($userRoles[6]=='yes')
                                <li><a href="{{URL::to('/')}}/tib/admin/financial">Finance</a></li>
                            @endif
                            @if($userRoles[5]=='yes')
                                <li><a href="{{URL::to('/')}}/tib/admin/management">User Management</a></li>
                                <li><a href="{{URL::to('/')}}/tib/admin/products">Product Management</a></li>
                            @endif
                            @if($userRoles[7]=='yes')
                                <li><a href="{{URL::to('/')}}/tib/admin/config">Config</a></li>
                            @endif
                            @if($userRoles[10]=='yes')
                                <li><a href="{{URL::to('/')}}/tib/admin/gensales">General Sales</a></li>
                            @endif

                        </ul>
                    </li>
                @endif
            </ul>

        </div>

    </div>
