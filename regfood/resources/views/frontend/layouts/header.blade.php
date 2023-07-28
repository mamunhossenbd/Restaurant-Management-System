<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themefax.com/RegFood/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 07:17:19 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>RegFood || Restaurant HTML Template</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.exzoom.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
</head>

<body>

    <!--=============================
        TOPBAR START
    ==============================-->
    <section class="tf__topbar">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-6 col-md-8">
                    <ul class="tf__topbar_info d-flex flex-wrap d-none d-sm-flex">
                        <li><a href="mailto:example@gmail.com"><i class="fas fa-envelope"></i> examplemail@gmail.com</a>
                        </li>
                        <li class="d-none d-md-block"><a href="callto:123456789"><i class="fas fa-phone-alt"></i>
                                +96487452145214</a></li>
                    </ul>
                </div>
                <div class="col-xl-6 col-sm-6 col-md-4">
                    <ul class="topbar_icon d-flex flex-wrap">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a> </li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a> </li>
                        <li><a href="#"><i class="fab fa-behance"></i></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TOPBAR END
    ==============================-->


    <!--=============================
        MENU START
    ==============================-->
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('frontend/images/logo.png')}}" alt="RegFood" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-bars menu_icon_bar"></i>
                <i class="far fa-times close_icon_close"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/abouts')}}">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/menu')}}">menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/chefs')}}">chefs</a>
                    </li>
                   
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">pages <i class="far fa-angle-down"></i></a>
                        <ul class="droap_menu">
                            <li><a href="{{url('/menu_details')}}">menu details</a></li>
                            <li><a href="{{url('/blog_details')}}">blog details</a></li>
                            <li><a href="{{url('/cart_view')}}">cart view</a></li>
                            <li><a href="{{url('/check_out')}}">checkout</a></li>
                            <li><a href="{{url('/payment')}}">payment</a></li>
                            <li><a href="{{url('/testimonial')}}">testimonial</a></li>
                            <li><a href="404.html">404/Error</a></li>
                            <li><a href="{{url('/faqs')}}">FAQs</a></li>
                            <li><a href="{{url('/sing_in')}}">sign in</a></li>
                            <li><a href="{{url('/sing_up')}}">sign up</a></li>
                            <li><a href="forgot_password.html">forgot password</a></li> 
                            <li><a href="privacy_policy.html">privacy policy</a></li>
                             <li><a href="terms_condition.html">terms and condition</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/blog')}}">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/contact')}}">contact</a>
                    </li>                     
                        @guest
                            
                            <li class="nav-item"><a href="{{ url('user') }}" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="{{ url('user_register') }}"class="nav-link">Register</a></li>
                        @else
  
                            <li class="nav-item">
                                <a href="{{url('logout')}}" class="nav-link">Logout</a> 
                               
                            </li>
                        @endguest
                    
                </ul>
                <ul class="menu_icon d-flex flex-wrap">
                    @guest
                    <li>
                        <a class="cart_icon" href="{{url('/cart_view')}}"><i class="fas fa-shopping-basket"></i>
                            <span></span></a>
                    </li>
                    @else
                    <li>
                        <a class="cart_icon" href="{{url('/cart_view',Auth::user()->id)}}"><i class="fas fa-shopping-basket"></i>
                            <span></span></a>
                    </li>

                    @endguest
                    <li>
                        <a href="{{url('/dashboard')}}"><i class="fas fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>