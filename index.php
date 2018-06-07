<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="8rv2s52_FNBCAaTp1mNfyHoUl2y_vcEWYyQcBKVCq18"/>
    <title>Sunsetcoders | Web Design Mildura, Web Development Specialists.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Let us shape your online presence without the jargon! We specialize in web development. We help promote your business with secure, user friendly and responsive website."/>
    <meta name="keywords" content="online, web development, customized logos, user friendly, responsive website."/>
    <meta name="author" content="Sunsetcoders Development Team"/>

    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>
    <link rel="canonical" href="http://www.workboot.ml"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,800" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon.png"/>
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-XXXX-Y', 'auto');
        ga('send', 'pageview');

    </script>
    <!-- End Google Analytics -->
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

foreach (glob("Modules/*.php") as $filename) {

    require_once $filename;
}

include('./header.php');

$getPage = filter_input(INPUT_SERVER, 'QUERY_STRING');
$getModuleID = filter_input(INPUT_GET, 'moduleID');

$setClass = (strlen($getPage) >= 1) ? $getPage : 'Home';

switch (strtoupper($setClass)) {

    case "LOGIN":
        authenticate::login();
        break;
    case "PROCESSLOGIN":
        authenticate::processLogin();
        break;
    case "REGISTER":
        authenticate::Register();
        break;
    default:
        $setClass::callToPage();
        break;
}

include('footer.php');
    