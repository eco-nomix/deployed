{{--@set('sealed', isset($sealed_bid_id) && ($sealed_bid_status == 'sealed)))--}}
@section('header')
<div class="navbar noprint navbar-default navbar-inverse ">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="navbar-brand brand-image">
                <img src="/assets/img/small-cbi-color-logo.png" />{!! $pageHeader or '' !!}
            </div>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li id="selection"><a href="/products/">Products</a></li>
                <li id="sandbox"><a  href="/people/">People</a></li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                 <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                         <i class="icon icon-user"></i>{!! $user_name !!} <span class="caret"></span>
                     </a>
                     <ul class="dropdown-menu">
                         <li><a href="/{{ $role }}/dashboard"><i class="icon-home"></i>Home</a></li>
                         <li><a href="{!! $economix_url !!}/logout"><i class="icon-logout"></i>Logout</a></li>
                     </ul>
                 </li>
             </ul>
        </div>
    </div>
</div>
@endsection

