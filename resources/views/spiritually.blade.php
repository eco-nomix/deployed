@extends('layouts.default')



@@section('content')
 <div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default display">
                 <div class="panel-heading">Spiritually</div>
                 <div class="panel-body">

                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group col-md-12 ">
                              As we become more self-sufficent and our daily emotions start to get off the daily roller-coaster, we start to discover that there is another side to us,  our Spiritual side.
                          </div>
                          <div class="form-group col-md-12 ">
                              I'm not speaking of any particular religion or set of beliefs, but the general awareness that there is much more out there, than our personal needs and desires.  Many feel
                              a great expansion of one's self as they start to seek answers beyond their own personal boundaries.
                          </div>
                          <div class="form-group col-md-12 ">
                              I have found many people that have achieved a sense of 'peace' as they have explored the universe that goes beyond their sense of touch and smell.  I don't think it matters so much
                              how you go about this exploration, but that you do it.  It may be expressed within a religeous belief, or a sense of wonder as you walk in the forest, or even a ceremonial dance, any way, your life is enhanced by a spiritual path.
                          </div>
                          <div class="form-group col-md-12 ">
                              Eliminating many of the world's distractions is one of the purposes of KineticGold, so that you can explore your inner self and arrive at a true peace, not at some point in the indefinite future, but now.
                          </div>

                 </div>
             </div>

         </div>
     </div>
 </div>
 </div>
 @endsection