<body>
    Dear {{$user->first_name.' '.$user->last_name}}

    As a reminder {{$user->first_name}}:  {{$reminder}}

    Here is an image:

    <img src="{{$message->embed($pathToImage)}}" width="150" height="24" />
</body>
