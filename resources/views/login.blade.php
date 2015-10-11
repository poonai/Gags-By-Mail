body>
{!!Form::open(array('url'=>'/register','onSubmit'=>'return check()'))!!}
email:{!!Form::email("email",null,array('placeholder'=>'enter valid mail'))!!}<br>
password{!!Form::password("pass",array('id'=>'pass'))!!}<br>
Re-Enter password{!!Form::password('repass',array('placeholder'=>'re enter password','id'=>'repass'))!!}<br>
{!!Form::submit("submit")!!}
{!!Form::close()!!}
<a href="/reset">forgot password??</a>
<h1>LOG IN</h1>
{!!Form::open(array('url'=>'/login'))!!}<br>
email:{!!Form::email("email",null)!!}<br>
Password:{!!Form::password("pass")!!}<br>
{!!Form::submit("submit")!!}
</body>
