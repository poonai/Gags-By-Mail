{!!Form::open(array('url'=>'/resetpass'))!!}
<input type="text" name="password" placeHolder="enter the new password" required><br>
<input name="token"  value={{$token}} type="hidden">
{!!Form::submit("submit")!!}
