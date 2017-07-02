<!DOCTYPE html>
<html>

<head>
    <title>SNCP | AO Societatea Națională de Chirurgie Pediatrică din Republica Moldova</title>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="AO Societatea Națională de Chirurgie Pediatrică din Republica Moldova"/>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Custom Theme files -->

    <link href="{{asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('css/metro.css')}}" type="text/css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen"/>
    <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
    <!-- js -->

    <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.validate.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/metro.js')}}"></script>

    <!-- //js -->
    <!-- start-smooth-scrolling-->
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>


    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>


    <!--//end-smooth-scrolling-->
</head>

<body>
    <!--header-->
    <div class="header">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header navbar-left">
                    <h1><a href="{{url('index')}}"><img src="{{asset('images/logo2.png')}}" style="width: 105px; height: 100px;" alt="">SNCP</a></h1>
                </div>
                <!--navigation-->
                <div class="navbar">
                <h3 class="titleHeader"> AO Societatea Națională de <span>Chirurgie Pediatrică</span><br> din Republica Moldova

                </h3>
            </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="header-right">
                    <div class="top-nav-text">
                    </div>