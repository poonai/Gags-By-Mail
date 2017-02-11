<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gags By Mail</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="{{URL::asset('css/animate.css')}}" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="{{URL::asset('css/style.default.css')}}" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="{{URL::asset('css/custom.css')}}" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="{{URL::asset('img/favicon')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="{{URL::asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/owl.theme.css')}}" rel="stylesheet">

</head>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
<script type="text/javascript">

          function add(id)
    {

          $.ajax({url: "/add/"+id, success: function(result){

 document.getElementById("chan").className="btn btn-template-main btn-lg disabled";
 document.getElementById("chan").innerHTML="Added to Cart";
    }});
      }
    function d(id)
 {
 //$('#t').remove();

   $("#pooda"+id).remove();
   $.ajax({url:'remove/'+id,success:function(result)
{
    $("th[id='p']").html(JSON.parse(result).price);

}});

}

</script>

<body>

    <div id="all">

        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">E-mail us on : info@gagsbymail.in</p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="https://www.facebook.com/gagsbymail/?fref=ts" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>

                                <a href="https://twitter.com/GagsByMail" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="https://instagram/gagsbymail/" class="email" data-animate-hover="pulse"><i class="fa fa-instagram"></i></a>
                            </div>

                            <div class="login">

                            @if(Session::get('loginfo',1))
                              @if( isset($invalid) ? $invalid :  0)
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span><span class="label label-danger"> Invaid Credential</span></a>
                                @elseif(isset($placelogin)?$placelogin :  0 )
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span><span class="label label-danger"> Login before placing order</span></a>
                                  @else

                                  <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                                  @endif
                                @else
                                 <a href="/logout"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Log out</span></a>
                                 @endif
                                <a href="/register"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="/">
                                <img src="{{asset('img/logo.png')}}" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="{{asset('img/logo-small.png')}}" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li >
                                    <a href="/" >Home </a>

                                </li>
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="/shop" >Products</a>

                                </li>

                                <!-- ========== FULL WIDTH MEGAMENU ================== -->

                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->

                                <li class="dropdown">
                                    <a href="/checkout" >Cart</a>


                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="/login" method="post">
                        {!! csrf_field() !!}
                            <div class="form-group">
                                <input type="text" name="mail" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="/register"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>
@yield('middle')

        <footer id="footer">
            <div class="container">
                <div class="col-md-4 col-sm-6">
                    <h4>About us</h4>

                    <p>We at GagsByMail believe in spreading happiness across India through our specialized list of products</p>

                    <hr>
                    @if(isset($added)?$added:0)

<span class="label label-success">added to our mailing list</span>
@endif
                    <h4>Join our monthly newsletter</h4>

                    <form method="post" action="/mailing">
                        <div class="input-group">
          {!! csrf_field() !!}
                            <input type="email" name="mail" class="form-control" required>

                            <span class="input-group-btn">

                        <button type="submit" class="btn btn-default" type="button"><i class="fa fa-send"></i></button>

                    </span>

                        </div>
                        <!-- /input-group -->
                    </form>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-4 col-sm-6">

                  <center>  <h4>Follow Us On</h4></center>

                    <div class="blog-entries">
                    <center>
                    <a href="https://www.facebook.com/gagsbymail/?fref=ts">  <i style="font-size:5em" class="fa fa-facebook"></i></a><br>
                     <a href="https://instagram/gagsbymail"> <i style="font-size:5em" class="fa fa-instagram"></i></a><br>
<a href="https://twitter.com/GagsByMail"><i style="font-size:5em" class="fa fa-twitter"></i></a>
</center>

                    </div>

                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-4 col-sm-6">

                    <h4>Contact</h4>

                    <p><strong>E-mail us on : info@gagsbymail.in</strong>

                    </p>



                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->




                <!-- /.col-md-3 -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2015. Gags By Mail</p>
                    <a href="" class="pull-right" data-toggle="modal" data-target="#myModal" onclick="">Terms and Condition
                        <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :) -->
                    </a>

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Terms And Condition</h4>
            </div>
            <div class="modal-body">
              <ol>
                <li>You may NOT use our service to threaten, constitute harassment, violate a legal restraint, or any other unlawful purpose. The customer agrees this is a gag gift, novelty service for entertainment ONLY and that is their only intention. </li>
                <li>You must be 18 years old to purchase and recipient must be over the age of 18.  </li>
                <li>You may not send a gift to any person or organization you do not personally know, this includes famous individuals, politicians and companies.</li>
                <li>All Custom notes are reviewed and any content deemed inappropriate will be omitted, which includes threats and harassment.</li>
                <li>All content on the site is for comedic purposes only. Please do not use our service for any other reason than as a novelty, gag gift and for entertainment purposes only. If you are not 100% sure the recipient will understand the novelty of the item, DO NOT SEND. </li>
              </ol>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="{{URL::asset('js/jquery.cookie.js')}}"></script>
    <script src="{{URL::asset('js/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{URL::asset('js/front.js')}}"></script>



    <!-- owl carousel -->
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript">
  /*  $(document).ready(function() {



    });*/
    $("#owl-example").owlCarousel({singleItem:true});
/* function remove(id)
 {
    $("#t"+id).remove();
 }*/
function first()
{
$("input[id^='irstname']").attr('disabled','disabled');
$("#my").attr('class','active');
$("#vic").attr('class','');
   $("input[id^='firstname']").removeAttr('disabled');
   //  $("input[id^='place']").attr('id',"1");
   document.getElementById('place').value=1;
}
function second()
{
    $("#my").attr('class','');
$("#vic").attr('class','active');
$("input[id^='firstname']").attr('disabled','disabled');
   $("input[id^='irstname']").removeAttr('disabled');
          //$("input[id^='place']").attr('id',"2");
          document.getElementById('place').value=2;
}
 first();

 </script>
</html>
