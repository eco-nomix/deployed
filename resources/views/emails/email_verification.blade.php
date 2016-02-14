<body>
    Dear {{$user->first_name.' '.$user->last_name}}

    To verify your email click on the following Link :  <a href="{{getenv('Site_URL')}}/emailverified/{{$user->user_link}}"

    <img src="{{$message->embed(getenv('ECONOMIX_LOGO'))}}" width="150" height="24" />
</body>