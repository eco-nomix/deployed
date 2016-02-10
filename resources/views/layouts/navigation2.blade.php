{{--@set('sealed', isset($sealed_bid_id) && ($sealed_bid_status == 'sealed)))--}}
<div id="navcontainer" >
    {{--<div class="container-fluid">--}}

        <div class="navbar-brand brand-image">
                <a href="/test/"><img src="/images/Economix3731_Fotor.jpg" width="150" height="24" /></a>
        </div>


        <div style="padding:5,0,0,0">

<ul id="drop-nav" >
  <li><a href="/products">Products<span class="caret"></span></a>
      <ul>
        <li><a href="/food">Food Production</a></li>
        <li><a href="/water">Water Purification</a></li>
        <li><a href="/energy">Energy Production</a></li>
        <li><a href="/recycling">Recycling</a></li>
        <li><a href="/camping">Survival, Camping</a></li>
        <li><a href="/cooking">Cooking Systems</a></li>
        <li><a href="/health">Home Health</a></li>
        <li><a href="/books">Books and Guides</a></li>
        <li><a href="/training">Training</a></li>
      </ul>
    </li>
  <li><a href="/people">People<span class="caret"></span></a>
      <ul>
        <li><a href="/founders">Founders</a></li>
        <li><a href="/members">Members</a></li>
        <li><a href="/charities">Charities</a></li>
        <li><a href="/groups">Sponsored Groups</a></li>
      </ul>
    </li>
  <li><a href="/purpose">Purpose<span class="caret"></span></a>
    <ul>
      <li><a href="/physically">Physically</a></li>
      <li><a href="/emotionally">Emotionally</a></li>
      <li><a href="/spiritually">Spiritually</a></li>
      <li><a href="/economically">Economically</a></li>
    </ul>
  </li>
  <li><a href="/plans">Plans<span class="caret"></span></a>
    <ul>
      <li><a href="/discount">Member Discount</a></li>
      <li><a href="/referral">Referral Fees</a></li>
      <li><a href="/donations">Donations</a></li>
    </ul>
  </li>
  <ul class="pull-right">
  <li><a href="/about">About</a></li>
  <li><a href="/contact">Contact</a></li>

  @if ($user_name == '' or $user_name == null )
    <li><a href="/login">Login</a></li>
    <li><a href="/register">Register</a></li>
  @else

  <li><a href="/homepage/{{$user_id}}">{{$user_name}}<span class="caret"></span></a>
      <ul>
        <li><a href="/homepage/{{$user_id}}">Home Page</a></li>
        <li><a href="/money/{{$user_id}}">Got Money</a></li>
        <li><a href="/logout2">Logout</a></li>
      </ul>
    </li>
  @endif
  </ul>
</ul>
        </div>

</div>
<br>
<br>
hhhh