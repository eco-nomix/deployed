<body>
    Dear {{$user->first_name.' '.$user->last_name}}

    To verify your email click on the following Link :  <a href="/emailverified/{{$user->user_link}}"

    <img src="{{$message->embed('/images/Economix3731_Fotor.jpg')}}" width="150" height="24" />
</body>