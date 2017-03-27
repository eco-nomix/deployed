@extends('layouts.default')

@section('content')
 <div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
  <div class="pagecontainer"><img src="/images/Potentials.png" style="width:1000px;">
   <div class="trim"><img src="/images/5 Levels.jpg" style="width:1000px;"></div></div>

     {{--<div class="row">--}}
         {{--<div class="col-md-8 col-md-offset-2">--}}

             {{--<div class="panel panel-default display">--}}
                 {{--<div class="panel-heading">Potentials</div>--}}
                 {{--<div class="panel-body">--}}

                         {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                          {{--<div class="form-group col-md-12 ">--}}
                              {{--One of the major factors that impact nearly every company the utilizes multi-level compensation systems is member 'churn'.  Churn is the description of the process where--}}
                              {{--a member joins the marketing multi-level program for the sake of the opportunity.  The new members are initially excited to purchase their monthly subscriptions of products, so they--}}
                              {{--can too earn the big bucks.  But reality starts to show up pretty early,  monthly costs keep accumulating, many times to hundreds of dollars every month for purchases.  But the--}}
                              {{--income just doesn't come in like it shows on the charts.  Their organization is always too small for the bonus that is always just around the corner.  And eventually the vast majority of new recruits--}}
                              {{--simply give up and 'fail'.  In most of the multi-level organizations, 60-90% of the entire membership quits on an annual basis, only to have to be replaced with a new crop of 'opportunity seekers'.--}}

                          {{--</div>--}}
                          {{--<div class="form-group col-md-12 ">--}}
                              {{--Churn is the biggest factor in why people rarely succeed with multi-level.  By the time their organization finally is big enough to qualify for that first promotion, their recruits start to churn (quit), and it seems--}}
                              {{--like you never quite get there with older recruits dropping out as fast as you can recruit new ones.  Meanwhile the costs keep racking up and few have little or nothing to show for it.  In one major multi-level organization the average monthly commissions is $13.00.  And that is not even--}}
                              {{--half of what the typical monthly product subscription amounts too.--}}

                          {{--</div>--}}
                          {{--<div class="form-group col-md-12 ">--}}
                              {{--People churn because they are loosing money every month, or they aren't making enough to justify the time it is taking to get their organization to the 'payout' level.--}}
                          {{--</div>--}}
                          {{--<div class="form-group col-md-12 ">--}}
                              {{--In Eco-nomix, why would a member quit?  There is no cost to join or remain a member. They have no on-going costs for monthly purchase requirements.  They only purchase what they want or need, and then at a discount. They don't have to spend a lot of time recruiting new members.  It reminds me of getting a grocery store discount card.  Once I have gotten one, I rarely throw it away, just because, I might--}}
                              {{--need it someday.  If an Eco-nomix member makes a purchase, they are going to have an immediate benefit of a lower purchase price, plus access to products that otherwise would be difficult to find.  That purchase might take place years after they have obtained their membership.--}}
                          {{--</div>--}}

                          {{--<div class="form-group col-md-12 ">--}}
                              {{--Can you imagine that member being 4 generations away, and they make that purchase?  Even if it had been years ago since they joined, you will still receive a referral bonus!  Those bonuses are always a nice surprise.  So why would you quit?  To stop receiving bonuses out of thin air?  I don't think so.--}}
                          {{--</div>--}}
                          {{--<div class="form-group col-md-12 ">--}}
                              {{--The effect is, that your organization keeps growing and growing, and that should represent an ever larger potential income.  This type of growth can be exponential in nature.--}}
                          {{--</div>--}}
                          {{--<div class="form-group col-md-12 ">--}}
                              {{--Normal growth is sporadic.  You recruit a number of members and every once in a while, you get a 'hot runner', someone who really digs in.  Most Members won't do much besides watch other's succeed. But with Eco-nomics it doesn't take all that much to be successful, so even the 'lookers' can help your organization grow.--}}
                          {{--</div>--}}
                          {{--<div class="form-group col-md-12 ">--}}
                              {{--Let's look at a slow growth model.  If each member succeeded in recruiting one new member a month, and they teach their new Members to duplicate what they are doing. The Key to this success is getting the downstream people to do at least what you are doing.  <br><br>--}}

                              {{--Let's see what would happen.  Month 1 -  just you.   Month 2 -  you and your 1st recruit.  Month 3 -  you + 2 recruits.  But here is the magic.  The 1 recruit from last month, also recruited 1 so you have 1 on the 2nd generation.  This is where the exponential growth starts to kick in.<br><br>--}}
                              {{--<ul>--}}
                                {{--<li>Month 1 - 1 total</li>--}}
                                {{--<li>Month 2 - 2 total</li>--}}
                                {{--<li>Month 3 - 4 total</li>--}}
                                {{--<li>Month 4 - 8 total</li>--}}
                                {{--<li>Month 5 - 16 total</li>--}}
                                {{--<li>Month 6 - 32 total</li>--}}
                                {{--<li>Month 7 - 63 total<br> (You are limited to 5 generation of referral fees<br>some are starting to drop off- beyond 5 generations)--}}
                                {{--</li>--}}
                                {{--<li>Month 8 - 120 total</li>--}}
                                {{--<li>Month 9 - 219 total</li>--}}
                                {{--<li>Month 10 - 382 total</li>--}}
                                {{--<li>Month 11 - 638 total</li>--}}
                                {{--<li>Month 12 - 1024 total</li>--}}
                              {{--</ul>--}}
                          {{--</div>--}}
                          {{--<div class="form-group col-md-12 ">--}}
                            {{--At this point lets say your active downline members were averaging $20 per month in purchases from Eco-nomix.  (Within a year we expect to have over 1000 products, so I hope this average is a bit higher)--}}
                               {{--That would be a total of $20,480 in purchases across your organization, that would generate over $820 in income to you for that month.  Now this doesn't happen so uniformly in reality,--}}
                               {{--but most people if they are interested will recruit not just 1 per month, but higher.  Then the numbers could get really crazy.--}}

                          {{--</div>--}}
                          {{--<div class="form-group col-md-12 ">--}}
                             {{--And you got to that point by handing out 1 business card a month that turns into an active member.  I reality you will have to hand out more than 1 card to get that "one active" member.  Even with the Eco-nomix's ease of getting someone to become a member, the vast majority of people out there just won't do anything to get started.  But it only takes one a month to make this work.--}}
                             {{--<br><br>--}}
                             {{--In all the other multi-levels, people are dropping out as fast as you can recruit them.  In ours they stay as they have nothing to loose, causing amazing growth potential.--}}
                          {{--</div>--}}

                           {{--<div class="form-group col-md-12 ">--}}
                              {{--I can't tell you what reality will bring for you with Eco-nomix,  but even if it just generated a few hundred dollars per month in extra income, would it be worth it?  And it should just keep going and hopefully expanding.  Keep the above example expanding for a few more months, then all of a sudden, it starts to become an income that could make a real difference.--}}

                           {{--</div>--}}

                           {{--<div class="form-group col-md-12 ">--}}
                               {{--What are you willing to put into it to help your organization grow?  Maybe two business cards per month?  How about more,  especially if you can teach those that you recruit that same work ethic.  Make it happen,  It really is possible.--}}
                           {{--</div>--}}

                 {{--</div>--}}
             {{--</div>--}}

         {{--</div>--}}
     {{--</div>--}}
 </div>
 </div>
 @endsection