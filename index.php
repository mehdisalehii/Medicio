<?php
/**
 * Template Name: index Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header()
?>
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                     style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide-4.jpg)">
                    <div class="container">
                        <h2>خرید مواد آزمایشگاهی</h2>
                        <p>انواع مواد مصرفی آزمایشگاهی اعم از کیت های استخراج، الایزا، تویوب، ویول، ظروف و وسایل کشت
                            سلولی و
                            تمامی ظروف و مواد آزمایشگاهی </p>
                        <a href="#about" class="btn-get-started scrollto">مشاهده فروشگاه</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item"
                     style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide-5.jpg)">
                    <div class="container">
                        <h2>مشاوره تجهیزات آزمایشگاهی</h2>
                        <p>مشاوره در راستای راه اندازی و مارکتینگ آزمایشگاه ها به صورت صفر تا صد از راه اندازی تا شروع
                            به
                            کار آزمایشگاه ها</p>
                        <a href="#about" class="btn-get-started scrollto">بیشتر بدانید</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item"
                     style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide-6.jpg)">
                    <div class="container">
                        <h2>فروش تجهیزات آزمایشگاهی</h2>
                        <p>تجهیز آزمایشگاه ها از صفر تا صد اعم از دستگاه های نو و کارکرده</p>
                        <a href="#about" class="btn-get-started scrollto">بیشتر بدانید</a>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="fas fa-thermometer"></i></div>
                        <h4 class="title"><a href="">کینت های استخراج RNA</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="fas fa-dna"></i></div>
                        <h4 class="title"><a href="">کیت های استخراج DNA</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                        <h4 class="title"><a href="">کینت های بیوشیمی</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="fas fa-pills"></i></div>
                        <h4 class="title"><a href="">محیط های کشت سلولی</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore</p>
                    </div>
                </div>


            </div>

        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>سوال دارید؟</h3>
                <p>آیا در رابطه با محصولات ما سوالی برایتان پیش آمده و نیاز به مشاوره دارید؟!! کافی است با کارشناسان ما
                    در ارتباط باشید.</p>
                <a class="cta-btn scrollto" href="#appointment">باما تماس بگیرید</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h1>آسان آزما</h1>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg" class="img-fluid"
                         alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3 class="mb-3">تولید کننده انواع کیت آزمایشگاهی و کلیه محیط ها و مواد مصرفی آزمایشگاه ها</h3>
                    <p class="mb-2">
                        فروشگاه اینترنتی محصولات مواد مصرفی آزمایشگاه ها آسان آز (asanaz) متعلق به شرکت آریاژن سبحان
                        آزما می باشد، این شرکت قعالیت خود از سال 1396 در زمینه مواد مصرفی و کیت های آزمایشگاه شروع کرده
                        است و از تولید کنندگان مواد مصرفی و کیت های آزمایشگاهی می باشد
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i>
                            تولید کیت های آزمایشگاهی
                        </li>
                        <li><i class="bi bi-check-circle"></i>
                            تولید محیط های کشت و بیوشیمی
                        </li>
                        <li><i class="bi bi-check-circle"></i>
                            تولید کلیه محصولات ضدعفونی کننده دست و سطوح و سبزیجات و ميوه جات
                        </li>
                        <li><i class="bi bi-check-circle"></i>
                            ارسال محصولات به سراسر کشور
                        </li>
                    </ul>
                    <p>

                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="far fa-hospital"></i>
                        <span data-purecounter-start="0" data-purecounter-end="326" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>
                            <strong>مشتریان ما</strong>
                        </p>
                        <p>
                            مراکز استفاده کننده از محصولات ما
                        </p>
                        <a href="#">شما هم بپیوندید &raquo;</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="fas fa-flask"></i>
                        <span data-purecounter-start="0" data-purecounter-end="682" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p><strong>محصولات ما</strong>
                        </p>
                        <p>
                            تعداد محصولات ما جهت ارائه به متقاضیان
                        </p>
                        <a href="#">مشاهده محصولات &raquo;</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="fas fa-user-md"></i>
                        <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                              class="purecounter"></span>

                        <p><strong>متخصصان ما</strong></p>
                        <p>
                            تعداد متخصصان و دکتران مجموعه
                        </p>
                        <a href="#doctors">مشاهده تیم ما &raquo;</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="fas fa-award"></i>
                        <span data-purecounter-start="0" data-purecounter-end="80" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p><strong>نمایشگاه ها</strong>
                        </p>
                        <p>
                            نمایشگاه ها و افتخاراتی که ما در آنها شرکت داشته ایم
                        </p>
                        <!--                        <a href="#">Find out more &raquo;</a>-->
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                    <h3 class="mb-5 text-center">چرا آسان آزما؟</h3>
                    <div class="icon-box mt-5 mt-lg-0">
                        <i class="fa-duotone fa-headset"></i>
                        <div class="text">
                            <h4>سفارش گیری و مشاوره آنلاین</h4>
                            <p>شما میتوان به راحتی اقدام به سفارش اقلام مورد نیاز خود را برای کارشناسان ما ارسال نمایید
                                و از
                                مشاوره رایگان ما بهره مند شوید</p>
                        </div>
                    </div>
                    <div class="icon-box mt-5">
                        <i class="fa-duotone fa-truck-fast"></i>
                        <div class="text">
                            <h4>ارسال فوری سفارش</h4>
                            <p>ارسال اکسپرس فوری سفارش شما به محل مورد نظرتان</p>
                        </div>
                    </div>
                    <div class="icon-box mt-5">
                        <i class="fa-duotone fa-ballot-check"></i>
                        <div class="text">
                            <h4>کنترل کیفی دقیق</h4>
                            <p>
                                کنترل کیفی دقیق کلیه مواد تولیدی و وارداتی و تضمین اصالت کالاها
                            </p>
                        </div>
                    </div>
                    <div class="icon-box mt-5">
                        <i class="fa-duotone fa-hand-holding-dollar"></i>
                        <div class="text">
                            <h4>ضمانت عودت وجه</h4>
                            <p>عودت وجه کامل پرداختی مرکز در صورت نا رضایتی کارشناس</p>
                        </div>
                    </div>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"
                     style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/features.jpg);"
                     data-aos="zoom-in"></div>
            </div>

        </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>محصولات و خدمات بیو تکنولوژیِ</h2>

                <div class="d-flex justify-content-center flex-wrap">
                    <p class="mt-2">
                        در این بخش خدمات و محصولات ما دسته بندی شده اند که با کلیک روی آنها می توانید جزئیات بیشتری را
                        مشاهده نمایید.
                    </p>
                    <a href="<?php bloginfo('home'); ?>/blog/" class="btn mx-3 see-more mt-2" data-aos="fade-up">مشاهده
                        همه</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-heartbeat"></i></div>
                    <h4 class="title"><a href="">کیت های بیولوژیک</a></h4>
                    <p class="description">
                        فروش کیت های بیولوژیکی که قسمت بزرگی از آزمایشگاه های بالینی را به خود اختصاص می دهند
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-notes-medical"></i></div>
                    <h4 class="title"><a href="">کیت های بیوشیمی</a></h4>
                    <p class="description">
                        فروش کیت های بیوشیمی که بخش بیوشیمی قسمت بزرگی از آزمایشگاه های بالینی را به خود اختصاص می دهند
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-pills"></i></div>
                    <h4 class="title"><a href="">محصولات بیوشیمی</a></h4>
                    <p class="description">فروش ویژه محصولات بیوشیمی آزمایشگاه ها</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="fas fa-hospital-user"></i></div>
                    <h4 class="title"><a href="">کیت استخراج dna و rna</a></h4>
                    <p class="description">
                        انواع کیت های استخراج RNA و DNA با بهترین کیفیت و قیمت
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-dna"></i></div>
                    <h4 class="title"><a href="">محصولات کشت سلولی</a></h4>
                    <p class="description">فروش ویژه تمام محصولات کشت سلولی مورد نیاز مراکز و آزمایشکاه ها</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-wheelchair"></i></div>
                    <h4 class="title"><a href="">کیت الایزا</a></h4>
                    <p class="description">فروش ویژه کیت های الایزا برای مراکز و آزمایشگاه ها</p>
                </div>
            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>توضیح مختصر محصولات</h2>
                <p>در این قسمت توضیح کوتاهی در رابطه با محصولات و خدمات ما به تفکیک کاربری و نوع آنها آمده است</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                <h4>کیت های استخراج</h4>
                                <p>نوضیح کوتاه در رابطه با کیت های استخراج</p>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                <h4>کیت های الایزا</h4>
                                <p>توضیح کوتاه در رابطه با کیت های الایزا</p>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                <h4>کیت های بیوشیمی</h4>
                                <p>توضیح کوتاه در رابطه با کیت های بیوشیمی</p>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                                <h4>محیط های کشت</h4>
                                <p>توضیح کوتاه در رابطه با محیط های کشت</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <h3>کیت های استخراج</h3>
                            <p class="fst-italic">نوضیح کامل در رابطه با کیت های استخراج</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/departments-1.jpg" alt=""
                                 class="img-fluid">
                            <p>
                                نوضیح کامل در رابطه با کیت های استخراج
                            </p>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <h3>کیت های الایزا</h3>
                            <p class="fst-italic">توضیح کوتاه در رابطه با کیت های الایزا</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/departments-2.jpg" alt=""
                                 class="img-fluid">
                            <p>
                                توضیح کامل در رابطه با کیت های الایزا
                            </p>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <h3>کیت های بیوشیمی</h3>
                            <p class="fst-italic">توضیح کوتاه در رابطه با کیت های بیوشیمی</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/departments-3.jpg" alt=""
                                 class="img-fluid">
                            <p>توضیح کامل در رابطه با کیت های بیوشیمی</p>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <h3>محیط های کشت</h3>
                            <p class="fst-italic">توضیح کوتاه در رابطه با محیط های کشت</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/departments-4.jpg" alt=""
                                 class="img-fluid">
                            <p>توضیح کامل در رابطه با محیط های کشت</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>متخصصان تیم ما</h2>
                <p>
                    شرکت آریا ژن سبحان آزما با گرد آوری متخصصان و نیرو های با تجربه توانسته است جهت تولید و تامین
                    تجهیزات و مواد مصرفی آزمایشگاهی با کیفیت و قیمت مناسب قدم بردارد
                </p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctors/doctors-1.jpg"
                                 class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Medical Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctors/doctors-2.jpg"
                                 class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Anesthesiologist</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctors/doctors-3.jpg"
                                 class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>Cardiology</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctors/doctors-4.jpg"
                                 class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Neurosurgeon</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->

    <!--    <section id="gallery" class="gallery">-->
    <!--        <div class="container" data-aos="fade-up">-->
    <!---->
    <!--            <div class="section-title">-->
    <!--                <h2>تصاویر ما</h2>-->
    <!--            </div>-->
    <!---->
    <!--            <div class="gallery-slider swiper">-->
    <!--                <div class="swiper-wrapper align-items-center">-->
    <!--                    <div class="swiper-slide"><a class="gallery-lightbox"-->
    <!--                                                 href="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-1.jpg"><img-->
    <!--                                    src="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-1.jpg"-->
    <!--                                    class="img-fluid" alt=""></a></div>-->
    <!--                    <div class="swiper-slide"><a class="gallery-lightbox"-->
    <!--                                                 href="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-2.jpg"><img-->
    <!--                                    src="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-2.jpg"-->
    <!--                                    class="img-fluid" alt=""></a></div>-->
    <!--                    <div class="swiper-slide"><a class="gallery-lightbox"-->
    <!--                                                 href="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-3.jpg"><img-->
    <!--                                    src="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-3.jpg"-->
    <!--                                    class="img-fluid" alt=""></a></div>-->
    <!--                    <div class="swiper-slide"><a class="gallery-lightbox"-->
    <!--                                                 href="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-4.jpg"><img-->
    <!--                                    src="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-4.jpg"-->
    <!--                                    class="img-fluid" alt=""></a></div>-->
    <!--                    <div class="swiper-slide"><a class="gallery-lightbox"-->
    <!--                                                 href="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-5.jpg"><img-->
    <!--                                    src="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-5.jpg"-->
    <!--                                    class="img-fluid" alt=""></a></div>-->
    <!--                    <div class="swiper-slide"><a class="gallery-lightbox"-->
    <!--                                                 href="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-6.jpg"><img-->
    <!--                                    src="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-6.jpg"-->
    <!--                                    class="img-fluid" alt=""></a></div>-->
    <!--                    <div class="swiper-slide"><a class="gallery-lightbox"-->
    <!--                                                 href="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-7.jpg"><img-->
    <!--                                    src="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-7.jpg"-->
    <!--                                    class="img-fluid" alt=""></a></div>-->
    <!--                    <div class="swiper-slide"><a class="gallery-lightbox"-->
    <!--                                                 href="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-8.jpg"><img-->
    <!--                                    src="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/gallery-8.jpg"-->
    <!--                                    class="img-fluid" alt=""></a></div>-->
    <!--                </div>-->
    <!--                <div class="swiper-pagination"></div>-->
    <!--            </div>-->
    <!---->
    <!--        </div>-->
    <!--    </section>-->

    <!-- End Gallery Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="blogs" class="blogs">
        <div class="container" data-aos="fade-up">

            <div class="section-title">

                <h2>آخرین مقالات</h2>

                <div class="d-flex justify-content-center flex-wrap">
                    <p class="mt-2">
                        در این بخش آخرین مقالات علمی و اموزشی آسان آزما قرار گرفته است
                    </p>
                    <a href="<?php bloginfo('home'); ?>/blog/" class="btn mx-3 see-more mt-2" data-aos="fade-up">مشاهده
                        همه</a>
                </div>
            </div>

            <div class="row">
                <?php
                $show_posts = 4;
                $latest_news = 4;
                query_posts('&showposts=' . $show_posts);
                while (have_posts()) : the_post();
                    ?>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up">
                        <a href="<?php the_permalink(); ?>" class="blogitem">
                            <div class="blog-img">
                                <?php if (!has_post_thumbnail()) {
                                    ?>
                                    <span class="no-photo">
                               <i class="far fa-image"></i>
                                        <!--                                بدون تصویر-->
                            </span>
                                    <?php
                                } else {
                                    the_post_thumbnail('large', ['class' => 'img-fluid']);
                                }
                                ?>
                                <div class="click">
                                    کلیک کنید
                                </div>
                            </div>
                            <div class="blog-info">
                                <h5><?php the_title(); ?></h5>
                            </div>
                        </a>
                    </div>
                <?php
                endwhile;
                wp_reset_query();
                ?>

            </div>

        </div>
    </section>
    <!-- End Doctors Section -->


    <!-- ======= Frequently Asked Questioins Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>سوالات متداول</h2>
                <p>
                    در این بخش به سوالات متداولی که در ذهن اکثر متقاضیان می باشد پاسخ داده شده است
                </p>
            </div>

            <ul class="faq-list">

                <li>
                    <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at
                        lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                            curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius
                        morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                            laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
                            Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa
                            tincidunt dui.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur
                        adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                            elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                            pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at
                            elementum eu facilisis sed odio morbi quis
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus.
                        Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                            laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
                            Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa
                            tincidunt dui.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec
                        nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                            ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing
                            bibendum est. Purus gravida quis blandit turpis cursus in
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus
                        ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                    </div>
                    <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer
                            malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem
                            dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat
                            commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non
                            blandit massa enim nec.
                        </p>
                    </div>
                </li>

            </ul>

        </div>
    </section>
    <!-- End Frequently Asked Questioins Section -->


    <!-- ======= Footer ======= -->
<?php
get_footer();