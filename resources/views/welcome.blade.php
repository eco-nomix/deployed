@extends('layouts.default')



@section('content')
   {{--<div style="z-index:-5; height:1400px; background-attachment:fixed; background-size:100% 100%; background-image:  url({{$imageUrl}});">--}}
   {{--</div>--}}

   <div >
     <p>Kinetic Gold is a new cryptocurrency1</p>
   </div>
   <div >
     <p>Kinetic Gold is a new cryptocurrency2</p>
   </div>
    <div class="center kinetic">
             <p>Kinetic Gold</p>
    </div>
    <img src="{{URL::asset('images/denmark.jpg')}}" >
    <div class="display container-fluid" >
                <p>Kinetic Gold is a new cryptocurrency that is in its Pre-Launch phase.  </p>
                <p>Unlike any other cryptocurrency, Kinetic Gold has been designed to be utilized like a standard bank account.  Features like payroll deposit, ATM access, Debit Card Access and on-line banking are among the standard banking features.</p>
                <p>Unlike your standard bank account, your account is denomonated in ounces of Gold, insured to the full value of your deposits (no $250,000 limit) by Lloyds of London, and can be used within any country.</p>
                <p>The cryptocurrency feature of decentralized transactions allows full privacy of banking, having no regards to national borders or transaction amounts.</p>
    </div>


@stop