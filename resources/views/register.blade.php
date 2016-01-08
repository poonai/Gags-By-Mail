@extends('header')
<!-- content -->
@section('middle')
<script type="text/javascript">
	function check(form)
	{
         if(!form.terms.checked)
         {
         	  alert("Accept terms and Condition");
         	return false;
         }
         return true;
	}
</script>
  <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>New account / Sign in</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>New account / Sign in</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <h2 class="text-uppercase">New account</h2>

                            <p class="lead">Not our registered customer yet?</p>
                            <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                            <p class="text-muted">If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.</p>

                            <hr>

                            <form action="/register" onsubmit="return check(this)" method="post">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="name-login">Name</label>
                                    <input type="text" pattern="[A-Z,a-z].{5,20}" name="name" class="form-control" id="name-login" title="character should be 5 to 20 characters" required>
                                </div>

                                @if(isset($error) ? $error :  0)
                                  <div class="form-group has-error">
                                 <label for="email-login">Already taken Email</label>
                                    <input type="email" name="mail" class="form-control" id="email-login" required>
                                    @else
                                    <div class="form-group ">
                                    <label for="email-login">Email</label>
                                    <input type="email" name="mail" class="form-control" id="email-login" required>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password-login">Password</label>
                                    <input pattern=".{6,}"  type="password" name="password" class="form-control" id="password-login" required title="minimum 6 characters">
                                    <label style="margin-top:1%;">
      <input id="ck" name="terms" type="checkbox" required title="please accept the terms and condition before you proceed"> I Accept Terms And Condition
    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i> Register</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box">
                            <h2 class="text-uppercase">Login</h2>

                            <p class="lead">Already our customer?</p>
                            <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                ultricies mi vitae est. Mauris placerat eleifend leo.</p>

                            <hr>

                            <form action="/login" method="post">
                                <div class="form-group">
                                    {!! csrf_field() !!}
                                    <label for="email">Email</label>
                                    <input type="text" name="mail" class="form-control" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
@endsection
