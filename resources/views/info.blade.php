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
                       The Gold Diggers Association purpose is to provide it's members with information about finance, money and investments.
                    </div>
                    <div class="form-group col-md-12 ">
                        It accomplishes this by providing a monthly newsletter that analyzes  various investments, banking programs and oppertunites that can impact your financial future.
                    </div>
                     <div class="form-group col-md-12 ">
                        It also provides special promotions and benefits to its members that are only open to its members.
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