@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div style="width:100%">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/On-Line Accounting-small.jpg" ></div>--}}
<div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
   <div class="skip">&nbsp;</div>
    <div class="trans row">
        <div class="col-md-10 col-md-offset-1">
            <div style="width:100%;">
                           <div class="kinetic600">
                               Profit Sharing
                           </div>
                       </div>

            <div class="panel panel-default display">

                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                         <div class="form-group col-md-12 ">
                              All members are eligible to receive profit sharing (Mining).
                         </div>
                         <div class="form-group col-md-12 ">
                              Normally mining of a cryptocurrency requires a large investment in computer equipment to show you are doing work for the cryptocurrency.
                              KineticGold's version of Mining is much simpler and requires no knowledge of computers or upfront investment.
                         </div>
                         <div class="form-group col-md-12 ">
                              By Referring potential members to KineticGold, you can mine actual Gold.  When someone you refer joins as a member in the KineticGold Member Association,
                               you receive Profit Sharing.  You will initially receive $10 per sponsored member deposited to your checking account in Gold.  This doesn't sound like much, but consider that
                               <ul>
                                    <li>You sponsor them by getting them to the KineticGold.org website to learn about KineticGold.</li>
                                    <li>It is the responsibility of the Website to teach them how the system works, and get them to sign up.</li>
                                    <li>There are no products that you are selling.</li>
                                    <li>You have no obligation beyond getting them to the website.  A true referral.</li>
                               </ul>
                         </div>
                         <div class="form-group col-md-12 ">
                            Obviously the more people that you sponsor, then that $10 per sponsor Profit-Sharing will be multiplied.  But let's look beyond that.
                         </div>

                         <div class="form-group col-md-12 ">
                            <div class="col-md-12 standout">
                                The below example is only intended to serve as an example of what can happen with the exponential Growth that is possible with
                                Kinetic Gold.  This is NOT what you WILL make in Profit-Sharing.  If you make more than a few hundred dollars per month, then
                                then you did a lot of things right and you happened to sponsor the right people with an attitude for success.
                            </div>
                            <br>&nbsp;<br>
                            <div class="col-md-12 standout">
                                In addition, the figure of $1000 per month of
                                average deposits for a member is potentially low for countries like the United States and Europe, and would be considered high for members from countries in
                                Africa, but represents what we feel is a realistic average world-wide.
                            </div>
                         </div>
                         <div class="form-group col-md-12 ">
                            When a sponsored member starts to use the system, KineticGold's Profit Sharing starts to become much more interesting.  Remember that Kinetic
                            Gold is a Bank and that Banks make money from depositors.
                         </div>
                         <div class="form-group col-md-12 ">
                            With their new Gold-Backed Bank account, your sponsored member can make deposits and spend their account just like a normal account.  In fact,
                            they don't even have to change how much they deposit or where they spend their funds.
                         </div>
                         <div class="form-group col-md-12 ">
                            With their first deposit, your Profit-Sharing begins.  You will receive as Profit-Sharing 1% of the amount your sponsored member deposits.  Note, this
                            does not come from their deposit, but is coming from Bank Profits.
                         </div>
                         <div class="form-group col-md-12 ">
                            If your sponsored member deposits $1000 into their account, you would receive $10 in Profit-Sharing.  This doesn't sound like much but
                            <ul>
                                <li>Profit-Sharing will occur EVERY time the sponsored member makes a deposit</li>
                                <li>You will receive 1% Profit-Sharing even for larger deposits ($20 for a $2000 deposit)</li>
                                <li>There are no limits to how many people you can sponsor</li>

                            </ul>
                         </div>
                         <div class="form-group col-md-12 ">
                             If you sponsored 10 members that average $1000 per month in deposits, then you would receive a total of $100 in Profit-Sharing.  There is no limit to the number of people you could sponsor.
                             If you had a 100 sponsored members that average $1000 per month in deposits you would receive $1000 in Profit-Sharing.  That's ok, but it sounds like a lot of time
                             to really make a difference.  But here is where you can kick Profit-Sharing into high gear.
                         </div>
                         <div class="form-group col-md-12 ">
                             Once you have sponsored at least 5 members, you qualify for Profit-Sharing of the Second Generation depositors.
                         </div>
                         <div class="form-group col-md-12 ">
                             Any member can qualify for Profit-Sharing, so after some period of time (hard to predict how long), the members that you
                             sponsored will begin to sponsor their associates.  These are potential Second Generation depositors and should eventually start to
                             user their KineticGold Bank account.
                         </div>
                         <div class="form-group col-md-12 ">
                             The Profit Sharing you receive from 2nd Generation depositors is only .4%, but this can start to add up fast.  Lets assume that your sponsored members each
                             sponsored 5 members to qualify for this Profit-Sharing.  Let's assume that they average $1000 per month in deposits and spending.
                             <ul>
                                <li>5 members in the 1st Generation -  a total of $5,000 in deposits - $50/month in Profit-Sharing.</li>
                                <li>25 members in the 2st Generation - a total of $25,000 in deposits - $100/month in Profit-Sharing.</li>
                                <li>a total of $150 per month</li>
                             </ul>
                             And remember that this Profit-Sharing came without any cost or obligation on your part beyond getting your potential members to the website.
                         </div>
                         <div class="form-group col-md-12 ">
                               Once you have sponsored at least 10 members, you qualify for Profit-Sharing of the Third Generation depositors.
                         </div>
                         <div class="form-group col-md-12 ">
                               Again your 2nd Generation members can qualify for Profit-Sharing, so after some period of time (hard to predict how long),
                               the 2nd Generation members will begin to sponsor their associates.  These are potential Third Generation depositors and
                               should eventually start to user their KineticGold Bank accounts.
                         </div>
                         <div class="form-group col-md-12 ">
                               The Profit Sharing you receive from 3nd Generation depositors is only .4%, but this can start to add up fast.
                               Lets assume that your sponsored members each sponsored 5 members to qualify for this Profit-Sharing and the 3nd Generation also sponsored 3 members each.
                               Notice I reduced the average sponsored to allow for those that just won't do anything.
                                 Let's assume that they average $1000 per month in deposits and spending.
                               <ul>
                                  <li>&nbsp;&nbsp;10 members in the 1st Generation -  a total of $10,000 in deposits - $100/month in Profit-Sharing.</li>
                                  <li>&nbsp;&nbsp;50 members in the 2st Generation - a total of $50,000 in deposits - $200/month in Profit-Sharing.</li>
                                  <li>150 members in the 3rd Generation - a total of $150,000 in deposits - $600/month in Profit-Sharing.</li>
                                  <li>a total of $900 per month</li>
                               </ul>
                               And remember that this Profit-Sharing came without any cost or obligation on your part beyond getting your potential members to the website.
                         </div>
                         <div class="form-group col-md-12 ">
                               Once you have sponsored at least 15 members, you qualify for Profit-Sharing of the Fourth Generation depositors.
                         </div>
                         <div class="form-group col-md-12 ">
                               Again your 3rd Generation member can qualify for Profit-Sharing, so after some period of time (hard to predict how long),
                               the 3nd Generation members will begin to sponsor their associates.  These are potential Fourth Generation depositors and
                               should eventually start to user their KineticGold Bank accounts.
                         </div>
                         <div class="form-group col-md-12 ">
                               The Profit Sharing you receive from 4th Generation depositors is only .4%, but this can start to add up fast.
                               Lets assume that your sponsored members followed your pattern.
                                 Let's assume that they average $1000 per month in deposits and spending.
                               <ul>
                                  <li>&nbsp;&nbsp;&nbsp;&nbsp;15 members in the 1st&nbsp; Generation -  a total of $&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15,000 in deposits - $&nbsp;&nbsp;&nbsp;150/month in Profit-Sharing.</li>
                                  <li>&nbsp;&nbsp;150 members in the 2nd Generation - a total of $&nbsp;&nbsp;&nbsp;&nbsp;150,000 in deposits - $&nbsp;&nbsp;&nbsp;600/month in Profit-Sharing.</li>
                                  <li>&nbsp;&nbsp;750 members in the 3rd&nbsp; Generation - a total of $&nbsp;&nbsp;&nbsp;&nbsp;750,000 in deposits - $3,000/month in Profit-Sharing.</li>
                                  <li>2250 members in the 4th &nbsp;&nbsp;Generation - a total of $2,250,000 in deposits - $9,000/month in Profit-Sharing.</li>
                                  <li>a total of $12,250 per month</li>
                               </ul>
                               And remember that this Profit-Sharing came without any cost or obligation on your part beyond getting your potential members to the website.
                         </div>
                         <div class="form-group col-md-12 ">
                                Once you have sponsored at least 20 members, you qualify for Profit-Sharing of the Fifth Generation depositors.
                         </div>
                         <div class="form-group col-md-12 ">
                                Again your 4rd Generation member can qualify for Profit-Sharing, so after some period of time (hard to predict how long),
                                the 4nd Generation members will begin to sponsor their associates.  These are potential Fifth Generation depositors and
                                should eventually start to user their KineticGold Bank accounts.
                         </div>
                         <div class="form-group col-md-12 ">
                                The Profit Sharing you receive from 5th Generation depositors is only .4%, but this can start to add up fast.
                                Lets assume that your sponsored members followed your pattern.
                                  Let's assume that they average $1000 per month in deposits and spending.
                                <ul>
                                   <li>&nbsp;&nbsp;&nbsp;&nbsp;20 members in the 1st Generation -  a total of $&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20,000 in deposits - $&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200/month in Profit-Sharing.</li>
                                   <li>&nbsp;&nbsp;200 members in the 2st Generation - a total of $&nbsp;&nbsp;&nbsp;200,000 in deposits - $&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;800/month in Profit-Sharing.</li>
                                   <li>1000 members in the 3rd Generation - a total of $1,000,000 in deposits - $&nbsp;&nbsp;4,000/month in Profit-Sharing.</li>
                                   <li>3000 members in the 4th Generation - a total of $3,000,000 in deposits - $12,000/month in Profit-Sharing.</li>
                                   <li>3000 members in the 5th Generation - a total of $3,000,000 in deposits - $12,000/month in Profit-Sharing.</li>

                                   <li>a total of $28,250 per month</li>
                                </ul>
                                And remember that this Profit-Sharing came without any cost or obligation on your part beyond getting your potential members to the website.
                         </div>
                         <div class="form-group col-md-12 ">
                                <ul>
                                    <li>Become a member - no deposit required</li>
                                    <li>Refer someone</li>
                                    <li>The more people you Refer that become members increases the number of generations that profit sharing is paid on</li>
                                        <ul>
                                            <li>1+&nbsp;&nbsp; - 1st&nbsp; Generation Profit-Sharing - &nbsp;1% deposits</li>
                                            <li>5+&nbsp;&nbsp; - 2nd Generation Profit-Sharing - .4% deposits</li>
                                            <li>10+ - 3rd&nbsp; Generation Profit-Sharing - .4% deposits</li>
                                            <li>15+ - 4th&nbsp; Generation Profit-Sharing - .4% deposits</li>
                                            <li>20+ - 5th&nbsp; Generation Profit-Sharing - .4% deposits</li>
                                        </ul>
                                </ul>

                         </div>

                         <div class="form-group col-md-12 ">
                         </div>
                         <div class="form-group col-md-12 ">
                                Now lets see what you don't have to do.
                         </div>
                         <div class="form-group col-md-12 ">
                               <ul>
                                    <li>No minimum personal sales requirements</li>
                                    <li>No direct selling of products - all sales are done through thKineticGoldix website</li>
                                    <li>No collecting of money</li>
                                    <li>No required marketing meetings</li>
                                    <li>No minimum number of sponsered members in your organization are required to 'qualify'</li>
                                    <li>No stocking of inventory</li>
                                    <li>No purchasing of product you don't want or need</li>
                                    <li>No confusing Marketing plan</li>
                                    <li>No waiting for the check that is in the mail</li>
                                    <li>No Hidden Fees</li>
                                    <li>No hard sell - hand out a business card, let the site do the work for you</li>
                               </ul>
                         </div>
                         <div class="form-group col-md-12 ">
                            <div class="col-md-12 standout">
                                Now let's get Realistic, YOUR ORGANIZATION will not grow so predictable or as quick as you might hope.
                                Many of the people you sponsor will NEVER sponsor anyone else, and will be totally satisfied with just the Rewards from
                                their own Deposits.  But many will be just curious enough to try to sponsor some other people and benefit
                                from the Company Profit-Sharing.  You may even have someone that is working in social media and
                                may be able to sponsor hundreds of people.  How fast and large your organization will grow is a total unknown by anyone.
                                Expect a fully expanded organization to take years to form.

                            </div><br>&nbsp;<br>
                            <div class="col-md-12 standout">
                               Can you make some Profit-Sharing, yes.  Even if it is just a few hundred dollars per month, consider what
                               it took to get you there.  Referring a few people that became members.
                            </div>
                         </div>
                         <div class="form-group col-md-12 ">
                                About the only way to not succeed with KineticGold is to do nothing at all.
                         </div>

                </div>
            </div>
            <div class="skip">&nbsp;</div>
            <div class="skip">&nbsp;</div>
        </div>
    </div>
</div>
</div>
@endsection