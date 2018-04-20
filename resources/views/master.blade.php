<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ url('cssnjs/bs4/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cssnjs/awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cssnjs/owl/carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cssnjs/owl/carousel/assets/owl.theme.default.min.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <script type="text/javascript" src="{{ url('cssnjs/jquery/jquery-3.3.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('cssnjs/popper/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('cssnjs/bs4/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('cssnjs/owl/carousel/owl.carousel.min.js') }}"></script>
        <style type="text/css">
            body{
            }
            ul{
                padding: 0;
                margin: 0;
            }
            nav.nav_top{               
            }
            ul.social_link>li{
                padding: 10px;
            }
            ul.social_link>li>a{
                
            }
            ul.social_link>li>a{
                color: #fff;
                padding: 5px;
            }

            div.menu_container{
                background: #900fff;
                margin-top: -5px;
            }
            ul.menu{
                list-style: none;
                margin: 0;
                display: flex;
            }
            ul.menu li{

                display: inline-flex;
            }
            ul.menu li a{
                color: #fff;
                text-decoration: none;
                font-weight: bold;
                padding: 15px;
            }
            ul.menu li a:hover{
                background: #18181973;
            }
            ul.sub{
                display: none;
                width: auto;
                background: #234;
                position: absolute;
                margin-top: 53px;
                z-index: 2;
            }
            ul.sub li{
                min-width: 250px;
                display: flex;
                border: solid 1px #ffffff0f;
            }
            ul.sub li a{
                width: 100%;
            }
            .hasub:hover .sub{
                display: block;
            }

            @media screen and ( min-width: 1024px){
                div.menu_container{
                    padding-left: 15%;
                    padding-right: 15%;
                }
            }
        </style>
    </head>
    <body>

        <nav class="bg-dark nav_top">
            <div class="container">

                <ul class="social_link nav justify-content-center">
                    <li class="fb"><a class="" href="{{ url("https://fb.com/") }}" target="blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="intstagram"><a class="" href="{{ url('https://www.instagram.com/excelpolitan_unive') }}" target="blank"><i class="fa fa-instagram"></i></a></li>
                    <li class="twitter"><a class="" href="{{ url('https://twitter.com/excelpolitan') }}" target="blank"><i class="fa fa-twitter"></i></a></li>
                </ul>

            </div>
        </nav>
        <nav class="bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-2">
                        <div>
                            <img src="/logo/logo.png" class="img-fluid" style="width: 20%;">
                        </div>
                    </div>
                    <div class="col-sm-8">
                    </div>
                </div>
            </div>
        </nav>

        <marquee class="bg-success">
                <i class="fa fa-map-marker"></i> 
                <var>Suntown Plaza, Cnr Russian Blvd & Northbridge Rd, Sangkat Teuk Thla, Khan Sen Sok, Phnom Penh. </var>
                <i class="fa fa-envelope"></i>
                <var>info.excelpolitan@gmail </var>
                <i class="fa fa-phone"></i>
                <var>(+855) 23 884 149 </var>
                <i class="fa fa-fax"></i>
                <var>(+855) 23 885 231 </var>
        </marquee>

        <div class="menu_container">
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Why Us</a></li>
                <li class="hasub"><a href="#">Academic</a>
                    <ul class="sub">
                        <li><a href="#">ACC</a></li>
                        <li><a href="#">B@B</a></li>
                        <li><a href="#">Bussines Management</a></li>
                    </ul>
                </li>
                <li class="hasub"><a href="#">Compus</a>
                    <ul class="sub">
                        <li><a href="#">Cambodia</a></li>
                        <li><a href="#">Malaysia</a></li>
                        <li><a href="#">Singapore</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact</a></li>

            </ul>
        </div>
        <!-- END OF TOP -->
        <!-- START BODY -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10">
                    @yield('body')
                </div>
            </div>
        </div>
        <nav class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-4">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="#">KHMERONEAIR ©2018</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-4">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Term of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>



        <script type="text/javascript">
            $(document).ready(function(){
              $(".owl-carousel").owlCarousel({
                items: 3,
                margin: 5,
                loop:true,
                autoplay: true,
                autoplayTimeout: 250,
                autoplayHoverPause: true,
              });
            });
            $('li').mouseover( function(){
                $(this).find('.sub_menu').show();
            }); 

            $('li').mouseout( function(){
                $(this).find('.sub_menu').hide();
            }); 
        </script>
    </body>
</html>
