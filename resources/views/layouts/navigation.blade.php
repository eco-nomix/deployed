{{--@set('sealed', isset($sealed_bid_id) && ($sealed_bid_status == 'sealed)))--}}
<div id="navcontainer" >
    {{--<div class="container-fluid">--}}

        <div class="navbar-brand brand-image">
                <img src="/images/Economix3731_Fotor.jpg" width="150" height="24" />{!! $pageHeader or '' !!}
        </div>


        <div style="padding:5,0,0,0">
        <ul class="navigation">
                <li ><a href="/products/">Products</a></li>
                <li ><a  href="/people/">People</a></li>
                <li ><a  href="/marketing/">Purpose</a></li>
                <li ><a  href="/marketing/">Plans</a></li>

                @if($user_name == '')
                    <ul class="navigation pull-right">
                        <li >  <a href="/login/">Login</a></li>
                    </ul>

                @else
                    <ul class="navigation pull-right">
                        <li><a href="/about/">about</a></li>
                        <li><a href="/contact/">Contact</a></li>
                        <li ><a href="/{{$homePage}}">{!! $user_name !!}</a></li>
                        <li ><a href="/logout/">Logout</a></li>
                    </ul>
                @endif
            </ul>
        </div>

</div>


