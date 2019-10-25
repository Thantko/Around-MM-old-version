<?php
//dd($package);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AroundMM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Around MM travel & Tours" />
    <meta name="keywords" content="AroundMMM Travel & Tours" />
    <meta name="author" content="aroundmm.com" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=pyidaungsu' />

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{URL::to('app-assets/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{URL::to('app-assets/css/icomoon.css')}}">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="{{URL::to('app-assets/css/themify-icons.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{URL::to('app-assets/css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{URL::to('app-assets/css/magnific-popup.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ URL::asset('plugin/datepicker/bootstrap-datepicker.min.css')}}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{URL::to('app-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('app-assets/css/owl.theme.default.min.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{URL::to('app-assets/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{URL::to('app-assets/js/modernizr-2.6.2.min.js')}}"></script>

    <script src="{{URL::to('app-assets/js/respond.min.js')}}"></script>

</head>
<body>
<body>

<div class="gtco-loader"></div>

<div id="page">


    <!-- <div class="page-inner"> -->
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">

            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="{{URL::to('/')}}"><img src="{{URL::to('images/logoa.png')}}" width="100px" height="20px"></a></div>
                </div>
                <div class="col-xs-8 text-lg-right menu-1">
                    <ul>
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="{{URL::to('packages')}}">Packages</a></li>
                        <li><a href="{{URL::to('request_package')}}">Request Packages</a></li>
                        <li><a href="{{URL::to('contact_us')}}">Contact Us</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url({{URL::to('images/beach.jpg')}})">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="row row-mt-15em">

                        <div class="col-md-12 mt-text text-lg-center animate-box" data-animate-effect="fadeInUp">
                            <h1>Packages for Everyone</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>



    <div class="gtco-section border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 text-center gtco-heading">
                    <h2>Choose The Best Package For You</h2>
                    <p>We are listed right tours packages for you.</p>

                    <h2>Inbound</h2>
                </div>
            </div>
            <div class="row">

                @foreach($package as $value)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{URL::to('packages/'.$value['id'])}}" class="fh5co-card-item">
                        <figure>
                            <img src="{{URL::to('public/upload/'.$value['image'])}}" alt="Image" width="100%" height="100%">
                        </figure>
                        <div class="fh5co-text">
                            <h2 style="font-family:Pyidaungsu;">{{$value['title']}}</h2>
                            <p>Price - {{$value['amount']}} MMK</p>
                            <div class="row">
                                    <span class="btn btn-primary">See More</span>
                            </div>

                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <!--
    <div class="gtco-section border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 text-center gtco-heading">
                    <h2>Outbound</h2>
                </div>
            </div>
            <div class="row">

                @foreach($package as $value)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="{{URL::to('packages/'.$value['id'])}}" class="fh5co-card-item">
                            <figure>
                                <img src="{{URL::to('public/upload/'.$value['image'])}}" alt="Image" width="100%" height="100%">
                            </figure>
                            <div class="fh5co-text">
                                <h2 style="font-family:Pyidaungsu;">{{$value['title']}}</h2>
                                <p>Price - {{$value['amount']}} MMK</p>
                                <div class="row">
                                    <span class="btn btn-primary">See More</span>
                                </div>

                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="gtco-section border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 text-center gtco-heading">
                    <h2>Bus Rental</h2>
                </div>
            </div>
            <div class="row">

                @foreach($package as $value)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="{{URL::to('packages/'.$value['id'])}}" class="fh5co-card-item">
                            <figure>
                                <img src="{{URL::to('public/upload/'.$value['image'])}}" alt="Image" width="100%" height="100%">
                            </figure>
                            <div class="fh5co-text">
                                <h2 style="font-family:Pyidaungsu;">{{$value['title']}}</h2>
                                <p>Price - {{$value['amount']}} MMK</p>
                                <div class="row">
                                    <span class="btn btn-primary">See More</span>
                                </div>

                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    -->


    <footer id="gtco-footer" role="contentinfo" style="background-color: darkgoldenrod; color: #ffffff" >
        <div class="gtco-container">
            <div class="row row-p	b-md">

                <div class="col-md-6 col-md-push-1">
                    <div class="gtco-widget">
                        <h3 style="color: #ffffff">About Us</h3>
                        <p>AroundMM is a travel and tour platform in Myanmar to provide travelers with fair prices and excellent services. We offer other services like tour guide and car rental services. </p>
                    </div>
                </div>

                <div class="col-md-2"></div>


                <div class="col-md-4 col-md-push-1">
                    <div class="gtco-widget">
                        <h3 style="color: #ffffff">Get In Touch</h3>
                        <ul class="gtco-quick-contact" >
                            <li><a href="#" style="color: #ffffff"><i class="fa fa-phone" ></i> +95 9692215106</a></li>
                            <li><a href="#" style="color: #ffffff"><i class="fa fa-envelope"></i> aroundmm@gmail.com</a></li>
                            <li><a href="#" style="color: #ffffff"><i class="fa fa-home"></i>No 256,Room 19 Yan Aung Street NA, Yangon</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row copyright" style="color: #ffffff">
                <div class="col-md-12">
                    <p class="pull-left">
                        <small class="block">&copy; 2019 AroundMM Tour Platform. All Rights Reserved.</small>
                        <small class="block">Developed by <a href="https://ravenmm.co/" target="_blank" style="color: #000000">RavenMM Solutions</a> </small>
                    </p>
                </div>
            </div>

        </div>
    </footer>
<!-- </div> -->

</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="{{URL::to('app-assets/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{URL::to('app-assets/js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{URL::to('app-assets/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{URL::to('app-assets/js/jquery.waypoints.min.js')}}"></script>
<!-- Carousel -->
<script src="{{URL::to('app-assets/js/owl.carousel.min.js')}}"></script>
<!-- countTo -->
<script src="{{URL::to('app-assets/js/jquery.countTo.js')}}"></script>

<!-- Stellar Parallax -->
<script src="{{URL::to('app-assets/js/jquery.stellar.min.js')}}"></script>

<!-- Magnific Popup -->
<script src="{{URL::to('app-assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::to('app-assets/js/magnific-popup-options.js')}}"></script>

<!-- Datepicker -->
<script type="text/javascript" src="{{ URL::asset('plugin/datepicker/bootstrap-datepicker.js') }}"></script>


<!-- Main -->
<script src="{{URL::to('app-assets/js/main.js')}}"></script>

</body>
</html>

