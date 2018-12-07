@extends('...layouts.default')



@@section('content')
 <div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default display">
                 <div class="panel-heading">Emotionally</div>
                 <div class="panel-body">

                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group col-md-12 ">
                              One of the most difficult tasks we face as adults is to provide the sense of safety and security to our children.  If you have ever gone through a period of un-employment, due to one of a thousand causes, you start to understand how critical many of the things we take for granted really are.

                          </div>
                          <div class="form-group col-md-12 ">
                              <ul>
                                 <li>Food</li>
                                 <li>Water</li>
                                 <li>Shelter</li>
                                 <li>Energy</li>
                                 <li>Health</li>
                                 <li>Protection</li>
                              </ul>
                          </div>
                          <div class="form-group col-md-12 ">
                              What happens when you no longer can pay for services that you have become accustomed to have, or they are something provided to you by your local community, and they can no longer provide them?  You ether do without or find a substitute.  But if you have looked into your child's eyes when they are hungry, and know that there is simply just nothing in the cupboards to feed them, you start to understand what the emotion factor
                              could be for many of the possible outcomes for the near future.
                          </div>
                          <div class="form-group col-md-12 ">
                              To be Emotionally stable in a crisis, is not just nice, but it can also be an essential one.  Not only by providing the emotional support to your children in changing times, but to keep our focus on the immediate situation and not let it get out of hand.
                           </div>

                          <div class="form-group col-md-12 ">
                              The more we are prepared to handle each of the essential aspects of our lives in a crisis environment, or even on a daily basis, which it could become, the more we can assist others in overcoming the problems around us.  Emotionally we can become a safe haven, no matter what is handed to us.
                          </div>

                          <div class="form-group col-md-12 ">
                              As we become more and more self-sufficient, we discover that the roller-coaster of emotions that most people feel on a daily basis, is not only not desirable, but counter-productive and even leading to unhealthy and unfulfilled lives.
                          </div>
                 </div>
             </div>

         </div>
     </div>
 </div>
 </div>
 @endsection