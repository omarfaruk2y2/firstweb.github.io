<?php
/*
Template Name: Home

*/
?>
<?php get_header(); ?>
<?php $hero = get_field('hero'); ?>
        <div class="main-page-content">
            <div id="home">
                <canvas id="canvas"></canvas>
                <div id="home-back">
                    <div class="home-content-main">
                        <div class="table-cell">
                            <div class="container">
                                <div class="row home-row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="home-text wow fadeInDown text-center">
                                            <h2><?php echo $hero['smail'];?></h2>
                                            <h3><?php echo $hero['text1'] ?></h3>
                                            <div class="about-social-icon text-center">
                                                <ul class="about-social"> 
                                                    <li class="wow fadeIn" data-wow-delay=".2s"><a href="www.facebook.html" target="newtab"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li class="wow fadeIn" data-wow-delay=".4s"><a href="www.twitter.html" target="newtab"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li class="wow fadeIn" data-wow-delay=".6s"><a href="www.pinterest.html" target="newtab"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                                    <li class="wow fadeIn" data-wow-delay=".8s"><a href="www.linkedin.html" target="newtab"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li class="wow fadeIn" data-wow-delay="1s"><a href="www.behance.html" target="newtab"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                                    <li class="wow fadeIn" data-wow-delay="1.2s"><a href="www.instagram.html" target="newtab"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div><!-- end about-social-icon -->
                                        </div><!-- end home-text  -->
                                    </div><!-- end col-md-8 -->
                                </div><!-- end row  -->
                            </div><!-- end container -->
                        </div><!-- end table-cell -->
                    </div><!-- end home-content-main  -->
                </div>
            </div><!-- end home  -->

            <!-- ================================ ABOUT =============================== -->

<?php get_footer(); ?>