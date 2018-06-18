@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div style="height:100%;">
<div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
   <div class="skip">&nbsp;</div>

     <div class="trans row">
        <div class="col-md-8 col-md-offset-2">
            <div style="width:100%;">
                            <div class="kinetic400">
                                  Purpose
                            </div>
                        </div>
            <div class="panel panel-default display">

                <div class="panel-body">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group col-md-12 ">
                        Our present economic situation is a house of cards that has been stacked carefully during the last 100 years,
                        but with removal of a few essential cards, the whole situation could come crashing down.
                        If it does, life as we know it, especially in the United States will change and it could change literally overnight.
                    </div>
                    <div class="form-group col-md-12 ">
                        The economic down-turn that could result would be radically different then anything experienced
                        in the last century including the Great Depression, not necessary worse, but very different.
                        During the Great Depression, much of the population was tied to the small farm, they may have
                        been broke, but they still produced food for themselves and others.  Today it is much different.
                    </div>
                    <div class="form-group col-md-12 ">
                        If the same type of changes took place today, it would have much greater effect as few have
                        the skills necessary to support themselves or their families.
                    </div>
                    <div class="form-group col-md-12 ">
                        There is still time to prepare and make a major difference in how the future plays out for your family.
                    </div>
                    <div class="form-group col-md-12 ">
                       Gold Diggers Association can help you become economically more stable, inflation proof, mobile and responsive.  This will allow your family to access your funds regardless of current banking conditions or your location.                   </div>
                    <div class="form-group col-md-12 ">
                        Gold Diggers Association sees that this preparation will have significant impact in our physical and economic conditions.  With the overall goal to become more self-sufficient and independent and self-reliant.
                    </div>
                    <div class="form-group col-md-12 ">
                        The time to act is now.
                    </div>
                </div>
            </div>

        </div>
   </div>
   <div class="skip">&nbsp;</div>
   <div class="skip">&nbsp;</div>
      <div class="skip">&nbsp;</div>
      <div class="skip">&nbsp;</div>
      <div class="skip">&nbsp;</div>
            <div class="skip">&nbsp;</div>
</div>
</div>
</div>
@endsection