<h3>Thank You {{$model['full_name']}}</h3>

<p>We're excited to have you get started. First, you need to confirm your account, click below link.</p>

<a href="{{url('user/verify',$verifyuser->token)}}" target="_blank">Confirm Account</a></td>