<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>D'Villa - Find Your Most Comfortable Villa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"/>
    <meta name="keywords" content="Vicarage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{asset('css/fontawesome-all.min.css')}}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" property=""/>
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
<!-- banner -->
<div class="banner">
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
            <h1>
                <a class="navbar-brand text-white" href="/" style="font-family: 'Comfortaa Light'">
                    D'Villa
                </a>
            </h1>
            <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto text-center">
                    <li class="nav-item mr-3 mt-lg-0 mt-3">
                        <a class="nav-link" href="/" style="font-family: 'Comfortaa Light'">Home</a>
                    </li>
                    <li class="nav-item  mr-3 mt-lg-0 mt-3">
                        <a class="nav-link" href="/services" style="font-family: 'Comfortaa Light'">Services</a>
                    </li>
                    <li class="nav-item  mr-3 mt-lg-0 mt-3">
                        <a class="nav-link" href="/about" style="font-family: 'Comfortaa Light'">About</a>
                    </li>
                    <li class="nav-item mr-3 mt-lg-0 mt-3">
                        <a class="nav-link" href="/contact" style="font-family: 'Comfortaa Light'">Contact</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a href="{{route('login')}}" class="nav-link" style="font-family: 'Comfortaa Light'">
                                Login
                            </a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" style="font-family: 'Comfortaa Light'">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="{{ route('home') }}" class="dropdown-item" style="font-family: 'Comfortaa Light'">Dashboard</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none; font-family: 'Comfortaa Light';" >
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>
    <!-- //header -->
    <div class="container">
        <!-- banner-text -->
        <div class="banner-text">
            <div class="slider-info" >
                <h3 style="font-family: 'Comfortaa Light'">Find Your Most Comfortable Villa</h3>

            </div>
        </div>
    </div>
</div>
<!-- //container -->
<!-- //banner -->

<div class="container">
    @yield('content')
</div>

<!-- Footer -->
<footer id="footer" class="py-5">
    <div class="container">
        <div class="row  py-lg-5">
            <div class="col-lg-3 col-sm-6 footer-logo">
                <h5>Payment</h5>
                <img src="images/bni.png" alt="" width="50%">
                <p class="mt-3">BNI account : <br>
                    a.n DVilla <br>
                    no rek 445500692</p>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li>
                        <a href="/">
                            <i class="fa fa-angle-double-right"></i>Home</a>
                    </li>
                    <li>
                        <a href="/services">
                            <i class="fa fa-angle-double-right"></i>Services</a>
                    </li>
                    <li>
                        <a href="/about">
                            <i class="fa fa-angle-double-right"></i>About</a>
                    </li>
                    <li>
                        <a href="/contact">
                            <i class="fa fa-angle-double-right"></i>Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                <h5>working hours</h5>
                <ul class="list-unstyled quick-links">
                    <li>
                        Monday - Friday
                        <br>
                        <span>09.00 - 19.00</span>
                    </li>
                    <li>
                        Saturday
                        <br>
                        <span> 09.00 - 16.00 </span>
                    </li>
                    <li>
                        Sunday
                        <br>
                        <span> 10.00 - 19.00 </span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 footer_grid1 mt-lg-0 mt-4">
                <h5>Address</h5>
                <div class="fv3-contact">
                    <span class="fas fa-envelope-open mr-2"></span>
                    <p>
                        <a href="mailto:example@email.com">info@dvilla.com</a>
                    </p>
                </div>
                <div class="fv3-contact my-2">
                    <span class="fas fa-phone-volume mr-2"></span>
                    <p>(022) 4455789</p>
                </div>
                <div class="fv3-contact">
                    <span class="fas fa-home mr-2"></span>
                    <p>Jl. Telekomunikasi No 1,
                        <br>Bandung, Jawa Barat.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="cpy-right text-center py-4">
    <p class="text-white">© 2018 D'Villa. All rights reserved </p>
</div>
</div>
<!-- /Footer -->

<!-- login  -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Username</label>
                        <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name"
                               required="">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder=" " name="Password" id="password"
                               required="">
                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Login">
                    </div>
                    <div class="row sub-w3l my-3">
                        <div class="col sub-agile">
                            <input type="checkbox" id="brand1" value="">
                            <label for="brand1" class="text-secondary">
                                <span></span>Remember me?</label>
                        </div>
                        <div class="col forgot-w3l text-right">
                            <a href="#" class="text-secondary">Forgot Password?</a>
                        </div>
                    </div>
                    <p class="text-center dont-do">Don't have an account?
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"
                           class="text-dark font-weight-bold">
                            Register Now</a>

                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //login -->
<!--/Register-->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="modal-title text-center text-dark mb-4">REGISTER NOW</h5>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label class="col-form-label">First name</label>

                            <input type="text" class="form-control" id="validationDefault01" placeholder=""
                                   required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Last name</label>
                            <input type="text" class="form-control" id="validationDefault02" placeholder=""
                                   required="">
                        </div>

                        <div class="form-group">
                            <label class="mb-2 col-form-label">Password</label>
                            <input type="password" class="form-control" id="password1" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password2" placeholder="" required="">
                        </div>
                        <div class="reg-w3l">
                            <button type="submit" class="form-control submit mb-4">Register</button>
                        </div>
                        <p class="text-center pb-4">
                            <a href="#" class="text-secondary">By clicking Register, I agree to your terms</a>
                        </p>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<!--//Register-->

<!-- //footer -->
<!-- js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- //js -->
