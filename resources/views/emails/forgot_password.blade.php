<h1> Hello</h1>
<p> Please click the email to reset your password
    <a href="{{ env('FRONT_END_URL') }}/reset-password/{{ $user[0]->email }}/{{ $reminderCode }}">
        Reset Password
    </a>
</p>
