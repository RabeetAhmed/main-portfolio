<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
        .bootom-bar ul {
            list-style: none;
            text-align: right;
            margin-bottom: 0px;
        }

        .bootom-bar ul li {
            display: inline-block;
            border-right: 1px solid #828282;
            padding: 0px 10px;
        }

        .bootom-bar ul li:last-child {
            border-right: none;
        }

        .bootom-bar ul li a:hover {
            color: #ee3364;
        }

        .portlp-inner img {
            /* width: 100%; */
        }

        .portfolio-slider .item img {
            height: 300px;
            object-fit: cover;
        }

        div#portfolio.animation-3d-portfolio .item img {
            height: auto;
        }

        .price-box3 ul.height-auto {
            max-height: 220px;
        }

        /* old  css end*/
        /* startegy css start */
        .startegy-sec {
            background: #f5f5fa;
            padding: 40px 0px;
            background-image: url(assets/images/sta-bg.webp);
            background-size: cover;
            margin-top: 50px;
            margin-bottom: 70px;
        }

        .price-body3>ul li::before {
            position: absolute !important;
            left: 0px;
        }

        .price-body3>ul li {
            position: relative;
            padding-left: 15px;
        }

        .start-head {
            display: flex;
            align-items: start;
            justify-content: space-between;
            gap: 15px;
        }

        .start-head h2 {
            font-size: 60px;
            color: #ffffff;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .start-head h2 span {
            color: #ed3363;
            display: block;
            font-size: 48px;
        }

        .para-head p {
            color: #ffffff;
            font-size: 16px;

            font-weight: 500;
            line-height: 35px;
        }

        .para-head {
            max-width: 45%;
        }

        .para-head p:nth-child(2) {
            padding-top: 30px;
        }

        .research-mn {
            display: flex;
            align-items: center;
            text-align: left;
            gap: 20px;
            padding-bottom: 10px;
            width: 100%;
            padding-top: 10px;
            background: hsl(0deg 0% 100% / 17%);
            border: 1px solid hsl(0deg 0% 100% / 36%);
            margin-bottom: 15px;
            border-radius: 50px;
            padding: 20px 30px;
        }

        .research-mn h4 {
            color: #ffffff;
            font-size: 22px;

            font-weight: 500;
            width: 100%;
            line-height: 35px;
        }

        .research-mn:hover img:nth-child(1) {
            display: none
        }

        .research-mn img {
            transition: 0.5s;
            max-width: 45px;
            filter: brightness(0) invert(1);
            transition: 0.5s;
            height: 40px;
            width: 35px;
            aspect-ratio: 70 / 80;
        }

        .research-mn img:nth-child(2) {
            display: none !important;
            transition: 0.5s;
            filter: none;
        }

        .research-mn:hover img:nth-child(2) {
            display: revert !important;
            transition: 0.5s;
        }

        .price-body3>ul li {
            display: flex;
            flex-wrap: wrap;
        }

        .blog-banner img {
            width: 100%;
        }

        .blog-banner {
            margin-bottom: 50px;
        }

        .blog-detail-wrapper {
            padding-bottom: 50px;
        }

        .blog-detail-wrapper .row {
            justify-content: center;
        }

        .blog-detail-wrapper p {
            font-size: 20px;
            color: black;
            line-height: 33px;
            margin-bottom: 30px;
        }

        .blog-detail-wrapper h2 {
            font-size: 30px;
            font-weight: 600;
        }

        .blog-detail-wrapper h3 {
            font-size: 25px;
            font-weight: 600;
        }

        .share-link {
            list-style: none;
            padding-left: 0px;
        }

        .share-link li {
            display: inline-block;
            margin: 4px;
        }

        .share-link li a {
            font-size: 24px;
            width: 40px;
            height: 40px;
            display: block;
            text-align: center;
            line-height: 40px;
            background: #27273d;
            color: white;
        }

        .share-link li a:hover {
            background: #fff100;
            color: #27273d;
        }

        .subscribe-now {
            padding: 15px 30px;
            display: inline-block;
            background: #27273d;
            color: white;
            width: 202px;
            text-align: center;
        }

        section.blog-list .blog-item .content {
            width: calc(100% - 200px);
        }


        @media only screen and (max-width: 1366px) {

            .start-head h2 {
                font-size: 80px;
            }

            .para-head p {
                font-size: 14px;
                line-height: 30px;
            }

            .para-head p:nth-child(2) {
                padding-top: 0px;
            }

            .research-mn h4 {
                font-size: 18px;
                line-height: 30px;
            }

            .research-mn h4 br {
                display: none;
            }

            .research-mn {
                padding-bottom: 30px;
                padding-top: 30px;
            }
        }

        @media (max-width: 1199.98px) {

            .start-head h2 {
                font-size: 65px;
            }

            .startegy-sec .row {
                justify-content: center;
            }
        }

        @media (max-width: 991.98px) {

            .start-head {
                flex-direction: column;
            }

            .para-head {
                max-width: 100%;
            }

            .start-head h2 {
                font-size: 55px;
                /* text-align: center; */
            }

            .research-mn {
                border: 1px solid #353a4d;
                border-radius: 10px;
                margin: 10px 0px;
                padding: 20px 15px;
                transition: 0.5s;
            }

            .research-mn:hover {
                border: 1px solid #ff0053;
                box-shadow: 1px 7px 15px #ff005345;
            }

            .start-head h2 span {
                font-size: 24px;
            }
        }

        @media (max-width: 767.98px) {

            .start-head h2 {
                font-size: 45px;
                /* text-align: center; */
            }

            .research-mn {
                min-height: auto;
            }

            .startegy-sec {
                padding: 50px 0px;
            }

            .start-head h2 {
                font-size: 40px;
            }
        }

        @media (max-width: 575.98px) {
            .start-head h2 {
                font-size: 30px;
            }

            .portfolio-slider .item img {
                height: 140px;
            }
        }

        /* strategy css end*/
        /* combo css start*/




        .combo_offer {
            background: url(assets/images/combo_bg.webp);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 70px 0px
        }

        .combo_offer {
            position: relative;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center
        }

        .combo_offer_row .section_title_seprator:after {
            background: #ffbb28
        }

        .combo_offer_row .section_title {
            font-size: 40px
        }

        .combo_offer_content small {
            display: block;
            color: #fff;
            font-size: 15px;
            color: #ff0053;
            text-transform: uppercase;
            margin-bottom: 10px;
            letter-spacing: .5px;
            font-weight: 700;
        }


        .combo_offer_content p {
            color: #fff;
            font-size: 16px
        }

        .combo_offer_content .links p:before {
            content: "\f00c";
            position: absolute;
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            top: 0;
            left: 0;
            color: #ffbb28
        }

        .combo_offer_content .links p {
            display: block;
            color: #fff;
            margin-bottom: 5px;
            position: relative;
            padding-left: 30px
        }

        .combo_offer_row .btn_link {
            color: #fff
        }

        .combo_offer_content .btn_green:focus,
        .combo_offer_content .btn_green:hover {
            background: #fff;
            color: #000
        }

        .combo_offer_row .btn_link:focus,
        .combo_offer_row .btn_link:hover {
            color: #ffbb28
        }

        .brd-rd3.white {
            color: white;
        }

        .brd-rd3.white:hover {
            background: white;
            color: black;
        }

        @media(max-width:1400px) {

            .combo_livect_btn,
            .combo_order_btn {
                font-size: 15px
            }

            .combo_offer_content .title {
                font-weight: 800;
                font-size: 40px
            }

            .combo_offer_content p {
                font-size: 16px
            }

            .combo_offer_content .links p {
                font-weight: 400;
                margin-bottom: 10px;
                font-size: 16px
            }
        }

        @media(max-width:1024px) {
            .combo_offer_content .title {
                font-size: 50px
            }
        }

        @media(max-width:991px) {
            .combo_offer_content {
                padding: 30px
            }
        }

        @media(max-width:767px) {
            .combo_image {
                position: relative;
                top: auto;
                right: auto;
                max-width: 100%;
                transform: none;
                display: none;
            }

            .combo_offer_row {
                padding-right: 0
            }

            .combo_offer_row .section_title {
                font-size: 22px
            }

            .combo_offer_content small {
                font-size: 13px
            }

            .combo_offer_content .title {
                font-size: 30px;
                font-weight: 700
            }

            .about_box .title,
            .contact_form .title {
                font-size: 25px;
                margin-bottom: 15px
            }

            .combo_offer_content p {
                font-size: 16px;
                margin-bottom: 15px;
                text-align: left
            }

            .combo_offer_content .links p {
                font-weight: 400;
                font-size: 15px;
                margin-bottom: 7px
            }

            .combo_offer_content {
                padding: 15px
            }
        }

        @media (max-width:575px) {
            .combo_offer_content .lbn-btns a {
                width: 100%;
            }
        }

        /* combo css end*/
        /* loader css start*/
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 999999;
            overflow: hidden;
            background: #fff;
        }

        #preloader:before {
            content: "";
            position: fixed;
            top: calc(50% - 30px);
            left: calc(50% - 30px);
            border: 6px solid #ff0053;
            border-top-color: #ecf8f9;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            -webkit-animation: animate-preloader 1s linear infinite;
            animation: animate-preloader 1s linear infinite;
        }

        @-webkit-keyframes animate-preloader {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes animate-preloader {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        .blog-banner {
            min-height: 500px;
            background: url('assets/images/blog-banner.jpg');
            padding-top: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-size: cover;
            background-position: center;
        }

        .blog-banner h1 {
            font-size: 4.375rem;
            color: white;
        }

        section.blog-list {
            padding: 70px 0px;
        }

        section.blog-list .blog-item a {
            display: block;
            width: 100%;
        }

        section.blog-list .blog-item fiqure {
            display: block;
            width: 100%;
        }

        section.blog-list .blog-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        section.blog-list .blog-item {
            margin-bottom: 20px;
            background: white;
            box-shadow: 0px 0px 31px 0px #00000012;
        }

        section.blog-list .blog-item .content {
            padding: 15px;
            border-bottom: 5px solid #e7e7e7;
        }

        section.blog-list .blog-item .content h3 {
            font-size: 25px;
            width: 100%;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        section.blog-list .blog-item .content p {
            font-size: 15px;
            font-weight: 600;
            color: #ee3364;
        }

        .blog-detail {
            padding: 70px 0px;
        }

        .blog-detail h2,
        .blog-detail p {
            margin-bottom: 20px;
        }

        .blog-detail h3 {
            margin-bottom: 20px;
        }

        .fade {
            transition: none !important;
        }

        .trusted-sec {
            padding-top: 0px;
        }

        .trust-slider .slick-list.draggable {
            padding-top: 2rem !important;
        }

        .footer-wrap ul.c-info {
            margin-top: 0px;
        }

        .footer-inner .logo {
            margin-bottom: 20px;
        }

        @media (max-width: 1500px) {

            .banner-heading.lp-head .lbn-btns a,
            .thm-btn.mini-btn {
                font-size: 13px;
                min-width: 175px;
            }
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Get high-quality banner ad designs that captivate your target audience and elevate your brand's image. YouTube Branding 360 delivers exceptional results.

" />
    <meta name="keywords" content="" />

    <title>Banner Ad Design - Logo Mentary</title>


    <!-- cart css start -->




    <!-- cart css end  -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="trustpilot-one-time-domain-verification-id" content="1f542398-4a34-4b15-a418-6cb07495df66" />
    <meta name="google-site-verification" content="-1Eh_btW19RvCAnqqUyT-1xPcWpDsHSqW5zsayLJqzk" />

    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
    <link rel="preload" href="assets/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/all.min.css">
    </noscript>

    <link rel="preload" href="assets/css/elegenticons.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/elegenticons.css">
    </noscript>

    <link rel="preload" href="assets/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </noscript>

    <link rel="preload" href="assets/css/owl.carousel.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    </noscript>

    <link rel="preload" href="assets/css/jquery.fancybox.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    </noscript>

    <link rel="preload" href="assets/css/slick.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/slick.css">
    </noscript>

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preload" href="assets/css/responsive.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <link rel="preload" href="assets/css/color.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/color.css">
    </noscript>
    <script defer src="assets/js/google-tag.js"></script>


</head>

<body>

    <style>
        header .dropdown .main_menus {
            display: block;
            position: absolute;
            left: 152%;
            top: calc(100% + 7px);
            margin: 0;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            background: #fff;
            box-shadow: 0 0 30px rgb(127 137 161 / 25%);
            transition: .3s;
            width: 1240px;
            transform: translateX(-50%);
            padding: 40px 30px;
        }

        header .dropdown ul li {
            min-width: 200px
        }

        header .dropdown ul a {
            padding: 14px 0px 0px !important;
            text-transform: none;
            text-align: left;
            font-weight: 500;
            display: block;
            text-transform: uppercase;
            line-height: 20px;
            margin-bottom: 10px;
            border-radius: 5px;
            font-size: 15px;
            color: #000;
        }

        header .dropdown ul a:hover,
        header .dropdown ul li:hover {
            color: #ff0053
        }

        header .dropdown ul a i {
            font-size: 12px
        }

        header .dropdown ul .active:hover,
        header .dropdown ul a:hover,
        header .dropdown ul li:hover>a {
            color: #ff0053 !important;
        }

        header .dropdown:hover>.main_menus {
            opacity: 1;
            top: 100%;
            visibility: visible
        }

        header .dropdown ul h6 {
            font-size: 18px;
            font-weight: 700;
            text-decoration: 2px underline;
            padding-top: 15px;
        }

        header .dropdown ul img {
            border-radius: 5px;
            transition: 0.5s;
        }

        .menu-wrap2>ul .main_menus {
            width: 1240px;
            display: block;
            position: absolute;
            left: 152%;
            top: calc(100% + 7px);
            margin: 0;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            background: #fff;
            box-shadow: 0 0 30px rgb(127 137 161 / 25%);
            transition: .3s;
            width: 1240px;
            transform: translateX(-50%);
            padding: 40px 30px !important;
            text-align: left;
        }

        .menu-wrap2>ul .main_menus a {
            text-align: left;
            padding: 14px 0px 0px !important;
        }

        .menu-wrap2>ul .main_menus {
            padding: 0px;
        }

        .menu-wrap2>ul .main_menus .row {
            justify-content: flex-start;
            align-items: flex-start;
        }

        .menu-wrap2>ul .main_menus h6 {
            font-size: 18px;
            font-weight: 700;
            text-decoration: 2px underline;
            padding-top: 15px;
        }

        /* width */

        .menu-wrap>ul>li.menu-item-has-children .mob-serve::-webkit-scrollbar {
            width: 5px;
        }


        /* Track */

        .menu-wrap>ul>li.menu-item-has-children .mob-serve::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */

        .menu-wrap>ul>li.menu-item-has-children .mob-serve::-webkit-scrollbar-thumb {
            background: #ee3364;
            border-radius: 10px;
        }

        .menu-wrap>ul>li.menu-item-has-children .mob-serve {
            height: 130px;
            overflow: scroll;
            overflow-x: hidden;
        }
    </style>


    <!-- <div id="preloader"></div> -->
    <div class="top-nav">
        <div class="container-fluid">
            <ul>
                <li><a href="tel:+18776022757"><i class="fa fa-phone"></i>+1 (877) 602-2757</a></li>
                <li><a><i class="fa fa-envelope"></i>EmailHere</a></li>
            </ul>
        </div>
    </div>
    <header class="stick style1 w-100 d-flex flex-wrap justify-content-between align-items-center">
        <div class="logo">

            <a href="index.html" title="Home"><img class="img-fluid" src="assets/images/logo.png" alt="Logo" srcset="assets/images/logo.png"><img class="img-fluid" src="assets/images/logo.png" alt="Logo"></a>

        </div>
        <!-- Logo -->
        <div class="menu-wrap">
            <span class="menu-cls-btn rounded-circle"><i class="icon_close"></i></span>
            <ul class="mb-0 list-unstyled w-100">
                <li><a href="index.html">Home</a></li>
                <li><a href="tel:+18776022757"><i class="fa fa-phone"></i>+1 (877) 602-2757</a></li>
                <li><a><i class="fa fa-envelope"></i>EmailHere</a></li>

            </ul>
        </div>
        <!-- Menu Wrap -->
        <div class="menu-wrap2 main-nav">
            <ul class="mb-0 d-flex flex-wrap list-unstyled w-100">
                <li><a href="index.html">Home</a></li>
                <li><a href="tel:+18776022757"><i class="fa fa-phone"></i>+1 (877) 602-2757</a></li>
                <li><a><i class="fa fa-envelope"></i>EmailHere</a></li>
            </ul>
        </div>
        <!-- Menu Wrap -->
        <div class="menu-btns d-inline-flex">
            <a class="menu-btn rounded-circle" href="javascript:void(0);"><i class="fas fa-align-justify"></i></a>
        </div>
        <!-- Menu Btns -->
    </header>
    <!-- Header -->

    <!-- Search Wrap -->
    <div class="sticky-header w-100 position-fixed">
        <div class="top-nav">
            <div class="container-fluid">
                <ul>
                    <li><a href="tel:+18776022757"><i class="fa fa-phone"></i>+1 (877) 602-2757</a></li>
                    <li><a href="cdn-cgi/l/email-protection.html#a3d0c2cfc6d0e3cfccc4cccec6cdd7c2d1da8dc0ccce"><i class="fa fa-envelope"></i><span class="__cf_email__" data-cfemail="daa9bbb6bfa99ab6b5bdb5b7bfb4aebba8a3f4b9b5b7">[email&#160;protected]</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="an-custom-container">
            <div class="row">
                <div class="logo">
                    <h1 class="mb-0">
                        <a href="index.html" title="Home"><img class="img-fluid" src="assets/images/logo.png" alt="Logo" srcset="assets/images/logo.png"></a>
                    </h1>
                </div>
                <nav class="menu-wrap2">
                    <ul class="mb-0 list-unstyled w-100">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="tel:+18776022757"><i class="fa fa-phone"></i>+1 (877) 602-2757</a></li>
                        <li><a><i class="fa fa-envelope"></i>EmailHere</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <style>
        .buissness-card-banner img {
            display: none !important;
            visibility: hidden;
            transition: 0.5s;
        }

        .buissness-card-banner img.active {
            animation: cards1 1s linear;
            animation-fill-mode: forwards;
            display: block !important;
            visibility: visible;
        }


        .bootom-bar ul {
            list-style: none;
            text-align: right;
            margin-bottom: 0px;
        }

        .bootom-bar ul li {
            display: inline-block;
            border-right: 1px solid #828282;
            padding: 0px 10px;
        }

        .review-mn {
            padding-bottom: 0px !important;
        }


        .bootom-bar ul li:last-child {
            border-right: none;
        }

        .bootom-bar ul li a:hover {
            color: #ee3364;
        }

        .trust-ban {
            display: flex;
            align-items: baseline;
            justify-content: center;
            text-align: center;
            gap: 50px;
            margin-bottom: 30px;
            z-index: 1;
            position: relative;
            margin-top: 70px;
        }

        .trust-ban p {
            color: white;
            font-size: 18px !important;
            font-weight: 500;
            margin-bottom: 0px;
        }

        .trust-ban ul {
            display: flex;
            align-items: center;
            gap: 25px;
            margin-bottom: 0px;
        }

        .ads-banner {
            background: url(assets/images/sm-ads/sm-bann.jpg) no-repeat !important;
            padding-top: 200px !important;
            background-size: cover !important;
        }

        .pack-headd h2,
        .pack-headd h1 {
            font-size: 60px;
            color: #fff;
        }

        .pack-headd .lbn-btns {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .pack-headd .lbn-btns a:nth-child(2) {
            color: white;
        }

        .pack-headd .lbn-btns a:nth-child(2):hover {
            background: black;
        }

        .packPort-inner {
            margin-bottom: 10px;
        }

        .customCard {
            padding-bottom: 100px;
        }

        .Customcard-inner h4 {
            font-size: 54px;
            line-height: 72px;
        }

        .Customcard-inner p {
            font-size: 18px;
            color: #000;
            font-family: 'Montserrat';
            font-weight: 400;
            line-height: 36px;
            padding-top: 15px;
        }

        .customCard .row {
            align-items: center;
        }

        .packadorp .main-head p {
            max-width: 70%;
            margin: auto;
        }

        .sm-cta {
            background: url(assets/images/sm-ads/sm-cta.jpg) no-repeat !important;
            background-size: cover !important;
        }

        .cta-pack .doorstep-mn h2 {
            color: black;
            line-height: 72px;
            color: white;
        }

        .cta-pack .doorstep-mn span {
            font-size: 48px;
            color: white;
            text-transform: uppercase;
            font-weight: 700;
            font-family: 'Montserrat';
        }

        .cta-pack .doorstep-mn .lbn-btns {
            padding-top: 30px;
        }

        .sm-cta .doorstep-mn .lbn-btns a:nth-child(2) {
            color: white;
            border: 1px solid white;
        }

        .afford-plans {
            padding: 100px 0px 0px;
        }

        .afford-plans .lbn-btns {
            justify-content: center;
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .sm-afford {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 35px 30px;
            border: 1px solid rgb(103, 53, 10);
            border-top: none;
            transition: 0.5s;
        }

        .sm-afford h4 {
            font-size: 30px;
            font-family: 'Montserrat';
            font-weight: 700;
        }

        .sm-afford span {
            font-size: 48px;
            color: #ed3363;
            font-family: 'Montserrat';
            font-weight: 800;
        }

        .affordInner {
            border: 1px solid transparent;
            margin-bottom: 40px;
            transition: 0.5s;
            border-top: none;
        }

        .affordInner:hover .sm-afford {
            background-color: rgb(255, 255, 255);
            box-shadow: 0px 50px 50px 0px rgba(79, 41, 102, 0.25);
            border: 1px solid rgb(79, 41, 102);
            border-top: none;
        }

        .firstAfford {
            border-color: #391b4d;
        }

        .SecondAfford {
            border-color: #fabd00;
        }

        .thirdAfford {
            border-color: rgb(4 142 5);
        }

        .fourthAfford {
            border-color: rgb(255 104 59);
        }

        .fiveAfford {
            border-color: rgb(15 56 99);
        }

        .sixAfford {
            border-color: rgb(242 55 107);
        }

        .sevenAfford {
            border-color: rgb(93 27 151);
        }

        .eightAfford {
            border-color: rgb(130 63 46);
        }

        .nineAfford {
            border-color: rgb(31 31 31);
        }

        .cta-pack .doorstep-mn h2 {
            font-size: 68px;
        }

        .first-handle:after {
            content: '';
            position: absolute;
            background: #b8b8bb;
            height: 250px;
            width: 1px;
            right: -15px;
            bottom: 0px;
        }

        .fourth-handle:after {
            content: '';
            position: absolute;
            background: #b8b8bb;
            height: 250px;
            width: 1px;
            left: -16px;
            top: -30px;
        }

        .third-handle:before {
            content: '';
            position: absolute;
            background: #b8b8bb;
            height: 1px;
            width: 250px;
            right: -15px;
            top: -15px;
        }

        .second-handle:before {
            content: '';
            position: absolute;
            background: #b8b8bb;
            height: 1px;
            width: 250px;
            left: -16px;
            bottom: -16px;
        }

        .handle-Mn span {
            color: #e9e9f3;
            font-size: 150px;
            font-family: 'Montserrat';
            font-weight: 800;
            position: absolute;
            top: -45px;
            left: 20px;
        }

        .handle-Mn h4 {
            color: #000000;
            font-size: 30px;
            position: relative;
        }

        .handle-Mn p {
            font-size: 18px;
            color: black;
            font-weight: 400;
            font-family: 'Montserrat';
        }

        .handle-Mn {
            position: relative;
            padding: 100px 30px 40px 60px;
            background: transparent;
            margin-bottom: 30px;
        }

        .handle-Mn:hover {
            background: #000000;
        }

        .handle-Mn:hover span {
            color: #ffffff57;
        }

        .handle-Mn:hover h4,
        .handle-Mn:hover p {
            color: #ffffff;
        }

        @media (max-width: 1600px) {
            .Customcard-inner h4 {
                font-size: 40px;
                line-height: 55px;
            }

            .cta-pack .doorstep-mn h2 {
                font-size: 3.5rem;
                color: #fff;
            }
        }

        @media (max-width: 1445px) {
            .Customcard-inner h4 {
                font-size: 30px;
                line-height: 40px;
            }

            .Customcard-inner p {
                font-size: 16px;
                line-height: 30px;
            }

            .cta-pack .doorstep-mn h2 {
                font-size: 3rem;
                color: #fff;
            }

            .sm-afford h4 {
                font-size: 20px;
            }

            .sm-afford span {
                font-size: 36px;
            }

            .sm-afford {
                padding: 10px 20px;
            }

            .cta-pack .doorstep-mn h2 br {
                display: none;
            }

            .handle-Mn p {
                font-size: 16px;
            }

            .pack-headd h2,
            .pack-headd h1 {
                font-size: 40px;
            }
        }

        @media (max-width: 1199.99px) {
            .cta-pack .doorstep-mn h2 {
                font-size: 2.5rem;
                color: #fff;
                line-height: initial;
            }

            .cta-pack .doorstep-mn h4 {
                font-size: 20px;
                color: #fff;
            }

            .cta-pack .doorstep-mn span {
                font-size: 36px;
            }

            .pack-headd .lbn-btns {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 991.98px) {
            .pack-headd .lbn-btns {
                display: unset;
            }

            .cta-pack .doorstep-mn h2 {
                line-height: initial;
            }

            .cta-pack .doorstep-mn span {
                font-size: 30px;
            }

            .packadorp .main-head p {
                max-width: 100%;
            }

            .cta-pack {
                background: #007cfa !important;
            }

            .afford-plans {
                padding: 50px 0px 0px;
            }

            .sm-afford span {
                font-size: 26px;
            }

            .trust-ban {
                flex-direction: column;
                justify-content: center;
                text-align: center;
                align-items: center;
                gap: 10px;
            }

            .trust-ban p {
                font-size: 14px !important;
            }

            .sm-cta {
                background: #cd2961 !important;
            }

            .first-handle:after,
            .second-handle:before,
            .third-handle:before,
            .fourth-handle:after {
                display: none;
            }

            .handle-Mn span {
                font-size: 120px;
                top: -30px;
            }

            .handle-Mn {
                padding: 100px 30px 40px 30px;
            }

            .pack-headd h2,
            .pack-headd h1 {
                font-size: 36px;
            }

            .buissness-card-banner img {
                margin: auto;
            }

            .ads-banner {
                background: orange !important;
            }
        }

        @media (max-width: 767px) {
            .cta-pack .doorstep-mn span {
                font-size: 20px;
            }

            .Customcard-inner h4 {
                font-size: 24px;
                line-height: 36px;
            }

            .Customcard-inner p {
                font-size: 14px;
                line-height: 24px;
            }

            .affordInner img {
                width: 100%;
                object-fit: cover;
            }

            .trust-ban {
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .customCard {
                padding-bottom: 30px;
            }
        }

        @media (max-width: 575.98px) {
            .Customcard-inner h4 {
                font-size: 18px;
                line-height: 30px;
            }

            .cta-pack .doorstep-mn h2 {
                font-size: 1.5rem;
            }

            .sm-afford h4 {
                font-size: 16px;
            }

            .sm-afford span {
                font-size: 20px;
            }

            .packPort-inner {
                text-align: center;
            }

            .pack-headd h2,
            .pack-headd h1 {
                font-size: 26px;
            }

            .Customcard-inner {
                text-align: center;
            }

        }


        /*àdd to cart*/

        .py_70 {
            padding-top: 70px;
            padding-bottom: 70px;
        }

        .bundle-heading h5 {
            font-size: 30px;
            font-family: 'Montserrat';
            font-weight: 700;
        }


        .addon-nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            align-items: center;
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1240px;
            }
        }

        .bottom-nav-ative .addon-nav {
            visibility: visible;
            opacity: 1;
        }

        .addon-nav {
            position: fixed;
            width: 100%;
            bottom: 0;
            background: #fff;
            z-index: 111;
            display: flex;
            padding: 10px;
            align-items: center;
            justify-content: space-between;
            visibility: hidden;
            transition: .5s;
            opacity: 0;
            box-shadow: 0 0 48px 0 #00000024;
        }

        .numberseleted {
            font-size: 20px;
            font-weight: 600;
            color: #000;
        }

        .addon-nav .container .addon-nav-btn {
            margin-bottom: 0;
        }

        .c_btn {
            text-align: center;
            font-weight: 600;
            text-transform: capitalize;
            border-radius: 8px;
            display: inline-block;
            padding: 12px 30px;
            letter-spacing: .5px;
            font-size: 17px;
        }

        .bundle-label {
            border: none;
            border-radius: 0;
            text-align: left;
            padding: 0;
            position: relative;
            display: block;
            width: 100%;
            height: 100%;
        }

        .bundle-input {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
            opacity: 0;
        }

        .bundle-inside-wrap {
            position: relative;
            z-index: 1;
            width: 100%;
            background-color: #fff;
            box-shadow: rgb(0 0 0 / 10%) 0 3px 9px 0;
            text-align: center;
            border: 5px solid transparent;
            height: 100%;
            padding-bottom: 20px;
        }

        .bundle-card {
            text-align: left;
            position: relative;
            z-index: 1;
        }

        .bundle-card-img {
            position: relative;
        }

        figure::before {
            content: "";
            position: absolute;
            width: auto;
            height: 100%;
            background: var(--primary-color);
            top: 0;
            left: 0;
            z-index: 1;
            transition: .5s;
        }

        .bundle-img {
            position: relative;
            display: block;
            object-fit: cover;
            width: 100%;
            height: auto;
            object-fit: cover;
        }


        .bundle-heading {
            padding-top: 15px;
            padding-left: 20px;
            padding-right: 20px;
            display: flex;
            justify-content: space-between;
            text-align: left;
        }

        .bundle-price {
            margin: 0;
            padding-bottom: 15px;
            padding-left: 0;
            padding-right: 0;
            text-align: right;
        }

        .bundle-price {
            min-width: 95px;
        }

        .bundle-inside-wrap .bundle-price p {
            text-align: right;
        }


        .bundle-price .price-para {
            font-size: 48px;
            color: #ed3363;
            font-family: 'Montserrat';
            font-weight: 800;
            position: relative;
            /*top: -20px;*/
        }

        .cart__set {
            max-width: 1500px !important;
        }

        .bundle-input:checked+.bundle-inside-wrap {
            border: 5px solid #ee3364 !important;
        }

        .bundle-input:checked+.bundle-inside-wrap::before {
            content: "\f058";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            z-index: 12;
            color: #ee3364 !important;
            font-size: 30px;
            right: 10px;
            top: 10px;
        }


        .price {
            font-size: 1.2rem;
            color: #ff0053;
            font-weight: 700;
        }

        .price::before {
            content: "\f058";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;

            z-index: 12;
            color: #2d8f16;
            font-size: 17px;
            top: 1px;
            padding-right: 0.2rem;
        }

        .bundle-heading h5 {
            font-size: 30px;
            font-family: 'Montserrat';
            font-weight: 700;
        }


        .bundle-box.row>div {
            margin-bottom: 30px;
        }

        .price-table h2 sup {
            text-decoration: line-through;
            font-size: 18px;
            position: relative;
            top: -22px;
            color: #ff0053;
        }

        .box-wrap a {
            position: relative;
            display: block;
        }

        .box-wrap a span {
            width: 50px;
            height: 50px;
            background: #ff0154;
            position: absolute;
            left: 10px;
            top: 10px;
            padding: 7px;
            transition: 0.5s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box-wrap a span i {
            color: white;
        }

        .box-wrap a img {
            width: 100%;
        }

        .sub_title_text {
            display: block;
            font-size: 20px;
            padding-top: 6px;
            font-weight: 500;
        }


        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-slide {
            display: block !important;
            float: left;
            height: 100%;
            min-height: 1px;
        }

        .section_title {
            position: relative;
            font-size: 48px;
            font-weight: 700;
        }


        /*àdd to cart end*/
    </style>
    <style>
        .update-combo-sec {
            background: url(assets/images/combo-package/update-ban.jpg) no-repeat;
            background-size: cover;
            /* min-height: 1080px; */
            padding: 90px 0px;
        }

        .inner-combb h5 {
            font-size: 24px;
            font-weight: 700;
            color: white;
            text-transform: uppercase;
        }

        .inner-combb img {
            margin-bottom: 20px;
        }

        .inner-combb p {
            font-size: 18px;
            font-weight: 500;
            color: white;
            padding-bottom: 40px;
        }

        .inner-combb ul h6 {
            color: white;
            font-size: 18px;
        }

        .inner-combb ul li {
            color: white;
            display: flex;
            align-items: baseline;
            margin-bottom: 5px;
            font-size: 16px;
            font-weight: 700;
        }

        .inner-combb ul li img {
            flex: 0 0 15px;
            margin-right: 10px;
        }

        .inner-combb .valueadded {
            padding-top: 40px;
        }

        .inner-combb .Websitess {
            padding-top: 10px;
        }

        .inner-chevr {
            border: 1px solid #ffd200;
            display: flex;
            align-items: center;
            padding: 30px 40px;
            margin-bottom: -12px;
        }

        .inner-chevr h3 {
            font-size: 40px;
            color: white;
            text-transform: uppercase;
            font-weight: 800;
        }

        .inner-chevr h3 span {
            font-size: 30px;
            color: #ffd200;
            font-weight: 700;
            display: block;
        }

        .pricee-cher strong {
            color: white;
            font-size: 48px;
            font-weight: 900;
            text-decoration: line-through;

        }

        .pricee-cher .cut-price {
            display: flex;
            align-items: baseline;
            text-align: end;
            justify-content: end;
            position: relative;
        }

        .pricee-cher .cut-price small {
            font-size: 24px;
            font-weight: 800;
            color: white;
        }

        .inner-combb .lbn-btns .open_package_model {
            background: #ffd200;
            color: black;
        }

        .inner-combb .lbn-btns a {
            width: 250px;
            min-height: 60px;
            background: #ffd200;
            color: black;
            font-size: 18px;
            font-weight: 700;
            font-style: italic;
            border-radius: 40px;
        }

        .inner-combb .lbn-btns .open_chat_btn {
            background: #ee3364;
            color: white;
            border-color: #ee3364;
        }

        .contct-inf {
            display: flex;
            align-items: center;
            gap: 20px;
            color: white;
            padding-top: 40px;
        }

        .contct-inf a {
            font-size: 30px;
            font-weight: 600;
            font-family: 'Montserrat';
        }

        .inner-combb .lbn-btns {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .contct-inf a:hover {
            color: #ee3364;
        }

        @media only screen and (max-width: 1750px) {

            .inner-chevr h3 span {
                font-size: 25px;
            }

            .inner-chevr h3 {
                font-size: 32px;

            }

            .pricee-cher img {
                max-width: 70%;
            }

            .contct-inf a {
                font-size: 26px;

            }

        }

        @media only screen and (max-width: 1600px) {

            .pricee-cher strong {
                font-size: 40px;

            }

            .inner-combb h5 {
                font-size: 20px;
            }

        }

        @media only screen and (max-width: 1445px) {

            .pricee-cher strong {
                font-size: 30px;
            }

            .inner-chevr {
                padding: 30px 20px;

            }

            .inner-chevr h3 {
                font-size: 28px;
            }

            .inner-chevr h3 span {
                font-size: 20px;
            }

            .pricee-cher img {
                max-width: 80%;
            }

            .inner-chevr h3 {
                font-size: 25px;
            }

            .contct-inf a {
                font-size: 20px;
            }
        }

        @media only screen and (max-width: 1366px) {
            .inner-combb h5 {
                font-size: 17px;
            }

            .inner-combb p {
                font-size: 16px;
                padding-bottom: 20px;
            }

            .inner-combb ul li {
                margin-bottom: 5px;
                font-size: 14px;
                line-height: inherit;
            }

        }

        @media only screen and (max-width: 1199px) {}

        @media only screen and (max-width: 991px) {
            .price-sd {
                display: none;
            }

            .inner-chevr {

                justify-content: space-between;
            }

            .contct-inf {

                padding-top: 20px;
                padding-bottom: 20px;
                justify-content: center;
            }

            .inner-combb .lbn-btns {

                justify-content: center;
            }

            .update-combo-sec {

                padding: 60px 0px;
            }

            .inner-combb ul h6 {
                font-size: 16px;
                text-align: initial;
            }

            .inner-combb {
                text-align: center;
            }

            .pricee-cher .cut-price small {
                font-size: 18px;

            }

            .pricee-cher strong {
                font-size: 20px;
            }

            .pricee-cher {
                text-align: end;
            }

            .inner-chevr {
                padding: 20px 20px;
            }

            .inner-combb .valueadded {
                padding-top: 0px;
            }

            .inner-combb .Websitess {
                padding-top: 0px;
            }


        }

        @media only screen and (max-width: 767px) {
            .inner-chevr h3 span {
                font-size: 18px;
            }

            .inner-chevr h3 {
                font-size: 20px;
            }

            .inner-combb p {
                font-size: 14px;

            }

            .inner-combb h5 {
                font-size: 14px;
            }

            .contct-inf {

                gap: 10px;

            }

            .inner-combb .lbn-btns {

                gap: 10px;
            }

            .update-combo-sec {
                padding: 40px 0px;
            }
        }

        @media only screen and (max-width: 575px) {

            .inner-combb .lbn-btns,
            .contct-inf {

                flex-direction: column;
            }

            .inner-combb .lbn-btns a {
                width: 100%;
            }

            .inner-chevr h3 span {
                font-size: 14px;
            }

            .inner-chevr h3 {
                font-size: 16px;
            }

            .pricee-cher strong {
                font-size: 16px;
            }

            .pricee-cher .cut-price small {
                font-size: 12px;
            }




        }
    </style>


    <section class="mainbanner-sec lpbann-four pack-banner ">
        <div class="an-custom-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-heading pack-headd">
                        <h1>Get Your Custom <span style="color: #ee3364"> Youtube Banner </span>made By Designers</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia quod culpa incidunt iste atque facere, assumenda modi reiciendis consequuntur sunt animi quas sint delectus molestias velit earum laboriosam! Soluta, quibusdam?</p>
                        <ul>
                            <li class="text-white"><b> All Banners are made by Expert Designers within 24 Hours</b></li>
                            <li class="text-white"><b> We are always online Via Live chat 24/7</b></li>
                            <li class="text-white"><b> Satisfaction Gaurranteed</b></li>
                            <li class="text-white"><b> Unlimited Revisions</b></li>
                            <li class="text-white"><b> 100% Money Back Guarantee</b></li>
                        </ul>

                        <div class="lbn-btns">
                            <a href="javascript:;" class="thm-btn mini-btn brd-rd3 open_chat_btn">Talk To Our
                                Expert</a>
                            <a href="#pricing" class="thm-btn mini-btn brd-rd3">Check Out Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="buissness-card-banner">
                        <img src="assets/images/my-images/1.webp?v=1" style="border-radius: 15px;" class="img-fluid active" alt="">
                        <img src="assets/images/my-images/2.webp?v=1" style="border-radius: 15px;" class="img-fluid" alt="">
                        <img src="assets/images/my-images/3.webp?v=1" style="border-radius: 15px;" class="img-fluid" alt="">
                        <img src="assets/images/my-images/4.webp?v=1" style="border-radius: 15px;" class="img-fluid" alt="">
                        <img src="assets/images/my-images/5.webp?v=1" style="border-radius: 15px;" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="trust-ban">
                        <p>
                            We are rated 4.6 <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span> among 2,659 satisfied customers


                        </p>
                        <ul class="list-unstyled">
                            <li>
                                <img src="assets/images/new-banners/trust1.png" alt="">
                            </li>
                            <li>
                                <img src="assets/images/new-banners/trust2.png" alt="">
                            </li>
                            <li>
                                <img src="assets/images/new-banners/trust3.png" alt="">
                            </li>
                            <li>
                                <img src="assets/images/new-banners/trust4.png" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>