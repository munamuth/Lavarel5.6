<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ url('cssnjs/bs4/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cssnjs/awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cssnjs/owl/carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cssnjs/owl/carousel/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cssnjs/style.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <script type="text/javascript" src="{{ url('cssnjs/jquery/jquery-3.3.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('cssnjs/popper/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('cssnjs/bs4/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('cssnjs/owl/carousel/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('cssnjs/dropzone.js')}}"></script>
        <style type="text/css">
           a{
            text-decoration: none;
           }
           a:hover{
            text-decoration: none;
           }
            ul{
                padding: 0;
                margin: 0;
                list-style: none;
            }
            .header{
                display: flex;
                width: 100%;
                background: transparent;
            }
            .header .header_left{
                width: 20%;                    
                min-width: 250px;
                padding: 15px;
                float: left;
                text-align: center;       
                box-shadow: 1px 0px 0px 0px #f8eded;
                background: #bccfe378;
            }
            .header .header_left span{
                text-align: center;
                font-weight: bold;
                color: #fff;
                text-shadow: 2px 2px #000000aa;   
            }

            .header .header_right{
                width: 80%;
                background: #bccfe378;
                height: 55px;
                max-height: 55px;
                /*float: left;*/
                padding: 15px;
            }
            .header .header_right .left_con{
                display: block;
                float: left;                
                cursor: pointer;
            }
            .header .header_right .right_con{
                display: block;
                float: right;
            }
            .body{
                width: 100%;
                display: flex;
            }
            .body .body_left{
                width: 20%;
                min-width: 250px;
                height: 654px;
                background: #eeeff15c;                
                box-shadow: 1px 0px 0 0 #f8eded; 
                overflow-y: auto; 
            }
            .body .body_right{
                width: 80%;
                margin-top: -75px;
                padding: 15px;
            }
            ul.menu{
                width: 100%;
            }
            ul.menu li{
                width: 100%;
                box-shadow: 0px 1px 0 0 #f8eded;           
                float: left;
            }
            ul.menu li a{
                width: 100%;
                padding: 10px;                
                float: left;
            }


            ul.menu li a span{
                float: right;
                padding-top: 4px;
            }
            ul.menu li a i{
                padding-right: 10px;
            }
            ul.sub{       
                display: none;
                transition: width 2s;
            }
            ul.sub li{  
                background: #d1cac040;
                border-top: solid 1px #e5d8d8;  
            }
            ul.sub li:last-child{  
                border-bottom: solid 1px #e5d8d8;  
            }
            ul.sub li a{
                padding-left: 50px;
            }
            .hasub:focus-within .sub{
                display: block;
            }
            @media screen and ( max-width: 1023.99px){
                .header{
                    display: block;
                }
                .header .header_left{
                    width: 100%;
                    box-shadow: 0px 1px 0px 0px #f8eded;
                    padding-left: 15px;
                    float: left;
                }
                #logo{
                    float: left;
                }
                #logo img{                    
                    width: 20px!important;
                }
                .header .header_right{
                    width: 100%;
                    float: left;
                }

                .body_left{
                    display: none;
                }
                .body .body_right{
                    width: 100%;
                    margin-top: 0px;
                }
            }
        </style>
        @yield('head')
    </head>
    <body>
        <!-- HEADER CONTAINER -->
        <div class="header">
            <div class="header_left" style="text-align: center;">
                <div class="img-fluid" id="logo">
                    <img src="/logo/logo.png" style="width: 50px;">
                </div>
                <span>KHMERONEAIR</span>
            </div>
            <div class="header_right">
                <div class="left_con">
                    <i class="fa fa-reorder"></i>
                </div>
                <div class="right_con">
                    <ul>
                        <li><a href="#">Username</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- BODY CONTAINER -->
        <div class="body">
            <div class="body_left">
                <ul class="menu">
                    <li><a href="#"><i class="  fa fa-th-large"></i> Dashboard</a></li>
                    <li class="hasub"><a href="#"><i class="fa fa-desktop" style="padding-right: 7px;"></i> Content Management <span class="fa fa-angle-double-right"></span></a>
                        <ul class="sub">
                            <li><a href="/admin/property"><i class="fa fa-building"></i> Property</a></li>
                            <li><a href="/admin/why_us"><i class="fa fa-angle-right"></i>Why Us</a></li>
                            <li><a href="/admin/academics"><i class="fa fa-angle-right"></i>Academics</a></li>
                            <li><a href="/admin/utility"><i class="fa fa-plus-circle"></i> Utility</a></li>      
                        </ul>
                    </li>
                    <li class="hasub"><a href="#"><i class="fa fa-user" style="padding-right: 13px;"></i> Users Management <span class="fa fa-angle-double-right"></span></a>
                        <ul class="sub">
                            <li><a href="/admin/users/admininstrators">Admininstrators</a></li>
                            <li><a href="/admin/users">Users</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-cogs"></i> Setting</a></li>
                </ul>
            </div>
            <div class="body_right">
                <div class="text-center session">{{Session('status')}}</div>
                @yield('body')
            </div>
        </div>


        <script type="text/javascript">
               var menu = 1;
               $('.left_con').on('click', function(){
                    con = $('.body_left').is(":visible");
                    hideBodyLeft( con );
                    menu ++;
               });
               function hideBodyLeft( con ){
                    if(con)
                    {
                        $('.body_left').hide();
                        if( $(window).width() >= 1024){                            
                            $('#logo').hide();
                            $('.body_right').css({'width':'100%', 'margin-top':'0px'});
                        }
                    } else {
                        $('.body_left').show();
                        if( $(window).width() >= 1024){ 
                            $('.body_right').css({'width':'80%', 'margin-top':'-75px'});
                            $('#logo').show();
                        }
                    }
               }
               documentLoad();
               function documentLoad()
               {
                    text = $('.session').text();
                    if( text.length != 0)
                    {
                        $('.session').css({'padding':'15', 'background':'#56cfc9', 'marginTop':'5'});
                        console.log(text+'not null');
                    }
                    else {
                        console.log('null');
                    }
               }

        </script>
    </body>
</html>
