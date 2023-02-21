<?php
get_header();
?>
    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h1><?php the_title(); ?></h1>
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<ol class="breadcrumb"><li class="breadcrumb-item">', '</li></ol>');
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs Section -->

        <section class="inner-page">
            <div class="container">

                <div id="post-contain">
                    <?php the_content(); ?>
                </div>

                <div class="post-footer">
                    <?php
                    global $wp;
                    $current_url = home_url(add_query_arg(array(), $wp->request));
                    ?>
                    <div class="footer-links d-flex align-items-center">
                        <span>اشتراک گذاری: </span>
                        <ul class="share d-flex justify-content-start">
                            <li><a href="https://wa.me/?text=<?php echo wp_get_shortlink(); ?>"><i
                                            class="fab fa-whatsapp"></i></a></li>
                            <li>
                                <a href="https://twitter.com/intent/tweet?source=<?php echo wp_get_shortlink(); ?>&amp;text=<?php the_title(); ?>"><i
                                            class="fab fa-twitter"></i></a></li>
                            <li><a href="https://t.me/share/url?url=<?php echo wp_get_shortlink(); ?>"><i
                                            class="fab fa-telegram"></i></a></li>
                            <li>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $current_url; ?>"><i
                                            class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->
<?php
get_footer();
?>