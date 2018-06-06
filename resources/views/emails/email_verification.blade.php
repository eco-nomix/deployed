<body>

<div>
    Dear {{$user->first_name.' '.$user->last_name}};
</div>
<br>
<div>
    Thank you for registering with KineticGold and the Gold Diggers Association
</div>
<div>
    To verify your email click on the following Link :  <a href="http://kineticgold.org/emailverified/{{$user->id}}/{{$user->user_link}}">Verify Email</a>
</div>
<b>KineticGold Administration</b>
    </body>
