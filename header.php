<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php wp_title(); ?></title>
    <meta name="author" content="mehdi salehi - 09386366843"/>

    <!-- Favicons -->
    <!--
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
-->
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 -->
    <!-- Vendor CSS Files -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/fontawesome-pro/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!--
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <?php wp_head(); ?>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">




</head>

<body <?php body_class(); ?>>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        <div class="align-items-center d-none d-md-flex">
            <i class="bi bi-clock"></i>
            <div class="mx-2">
                <?php echo parsidate('l, j F , Y'); ?>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <i class="bi bi-phone"></i>
            09386366843
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="<?php bloginfo('home'); ?>/" class="logo me-auto"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto " href="#hero">خانه</a></li>
                <li><a class="nav-link scrollto" href="#about">درباره ما</a></li>
                <li><a class="nav-link scrollto" href="#services">خدمات و محصولات</a></li>
                <li><a class="nav-link scrollto" href="#departments">درباره محصولات</a></li>
                <li><a class="nav-link scrollto" href="#doctors">تیم ما</a></li>
                <li><a class="nav-link scrollto" href="#blogs">مقالات</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">تماس باما</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="#contact" class="appointment-btn scrollto"><span class="d-none d-md-inline"> </span>سفارش سریع</a>

    </div>
</header>
<!-- End Header -->
