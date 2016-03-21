@extends('layouts.default')



@@section('content')
 <div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default display">
                 <div class="panel-heading">Physically</div>
                 <div class="panel-body">

                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group col-md-12 ">
                          One of Eco-nomix's purposes is to provide essential products and knowledge that will promote our individual and Family's physical well being.  These areas can be
                          further broken down to the following general topics:
                          </div>
                          <div class="form-group col-md-12 ">
                              <ul>
                                 <li>Food Production</li>
                                 <li>Water and Water purification</li>
                                 <li>Shelter</li>
                                 <li>Energy</li>
                                 <li>Cooking</li>
                                 <li>Cleaning</li>
                                 <li>Health</li>
                                 <li>Protection</li>
                              </ul>
                          </div>
                          <div class="form-group col-md-12 ">
                              Each of these subjects have dozens of sub-divisions that may require specific preparation, knowledge and even alternative solutions.  Our amazing society has given us as both individual and families a comfort level that has never been enjoyed before in history.  But it is providing these things at great cost and
                              in a manner than cannot be sustained.  There are alternatives to today's unsustainable answers that can be achieved without great personal cost in time, energy and resources.  Some may just require a minimal shift in how we do things, or what our expectations are.
                          </div>
                          <div class="form-group col-md-12 ">
                              Because many of the answers are not necessarily physical products but knowledge, Eco-nomix will also be a source of knowledge and skills.  These skills may become our most essential service that we provide.  As much of this knowledge is being lost or simply has never been readily available.
                          </div>

                          <div class="form-group col-md-12 ">
                              In addition, Eco-nomix will provide products and services that can expedite you reaching your personal goals of self-reliance.  We will specialize in products that you won't typically find at your local stores at affordable prices.  Not only will we provide the unusual products, but at the most affordable prices possible.
                          </div>


                 </div>
             </div>

         </div>
     </div>
 </div>
 </div>
 @endsection