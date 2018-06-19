@extends('layouts.golddiggers')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div style="width:100%;">
 <div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
  <div class="skip">&nbsp;</div>

    <div class="trans row">

        <div class="col-md-8 col-md-offset-2">
            <div style="width:100%;">
                <div class="kinetic600">
                      Gold Diggers Association
                </div>
            </div>
            <div class="panel panel-default display">

                <div class="panel-body">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group col-md-12 ">
                        Gold Diggers is an association that is focused on making our members aware of opportunities in investments, banking and financing.  It will do this in the form
                        of a monthly newletter that is sent to all of it's members detailing information about various investments, banking programs and opportunities, their risks and potential rewards along with a
                        a detailed 'how-to' method to get involved if you are interested.
                    </div>
                    <div class="form-group col-md-12 ">
                        It also provides special promotions and benefits to its members that are only open to its members.
                    </div>
                    <div class="form-group col-md-12 ">
                        There are no requirements for members of the Gold Digger's association to participate within any program.  This information is provided as 'information' only and is not
                        to be construed as investment advise.  All member's need to do their own due dilligence to determine if any particular opportunity fit's with your investment goals and/or
                        styles, limits and desires.
                    </div>



                </div>
                <div class="skip">&nbsp;</div>
                <div class="skip">&nbsp;</div>
               <div class="skip">&nbsp;</div>
                <div class="skip">&nbsp;</div>
               <div class="skip">&nbsp;</div>
                <div class="skip">&nbsp;</div>
                <div class="skip">&nbsp;</div>
                <div class="skip">&nbsp;</div>

            </div>
        </div>
        </div>

    </div>

</div>
</div>

@endsection