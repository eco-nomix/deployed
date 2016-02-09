{{--@set('sealed', isset($sealed_bid_id) && ($sealed_bid_status == 'sealed)))--}}
<div id="navcontainer" >
    {{--<div class="container-fluid">--}}

        <div class="navbar-brand brand-image">
                <img src="/images/Economix3731_Fotor.jpg" width="150" height="24" />{!! $pageHeader or '' !!}
        </div>


        <div style="padding:5,0,0,0">

<ul id="drop-nav" ">
  <li><a href="#">Products</a>
      <ul>
        <li><a href="#">Food Production</a></li>
        <li><a href="#">Water Purification</a></li>
        <li><a href="#">Energy Production</a></li>
        <li><a href="#">Recycling</a></li>
        <li><a href="#">Survival, Camping</a></li>
        <li><a href="#">Cooking Systems</a></li>
        <li><a href="#">Home Health</a></li>
        <li><a href="#">Books and Guides</a></li>
        <li><a href="#">Training</a></li>
      </ul>
    </li>
  <li><a href="#">People</a>
      <ul>
        <li><a href="#">Founders</a></li>
        <li><a href="#">Members</a></li>
        <li><a href="#">Charities</a></li>
        <li><a href="#">Sponsored Groups</a></li>
      </ul>
    </li>
  <li><a href="#">Purpose</a>
    <ul>
      <li><a href="#">Physically</a></li>
      <li><a href="#">Emotionally</a></li>
      <li><a href="#">Spiritually</a></li>
      <li><a href="#">Economically</a></li>
    </ul>
  </li>
  <li><a href="#">Plans</a>
    <ul>
      <li><a href="#">Member Discount</a></li>
      <li><a href="#">Referral Fees</a></li>
      <li><a href="#">Donations</a></li>
    </ul>
  </li>
  <ul class="pull-right">
  <li><a href="#">About</a></li>
  <li><a href="#">Contact</a></li>
  @if($user_name == '')
  <li><a href="#">Login</a></li>
  @else

  <li><a href="#">{!! $user_name !!}</a>
      <ul>
        <li><a href="#">Home Page</a></li>
        <li><a href="#">Got Money</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </li>
  @endif
  </ul>
</ul>
        </div>

</div>