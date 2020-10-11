<!doctype html>
<html lang="en">
    
<!-- Mirrored from tamzidhossain.info/html/Baristra-online/particle2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 10:51:34 GMT -->
<head>
        <!-- ========== PAGE TITLE ========== -->
        <title>Baristra-Multipurpose Html5 Template</title>
        <!-- ========== META TAGS ========== -->
        <meta name="description" content="coming soon template based on HTML5">
        <meta name="keywords" content="coming soon, under construction, countdown">
        <meta charset="utf-8">
        <meta name="author" content="XXXXX">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ========== CSS ========== -->
         <link href="<?php echo get_template_directory_uri(); ?>/https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
        <link href="<?php echo get_template_directory_uri(); ?>/https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
       
     
        <script src="../../../u
        se.fontawesome.com/1b98f46f85.js"></script>
      
        <!-- ========== JQUERY PLUGIN ========== -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jQuery-latest.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ajax-jquery.min.js"></script>
<?php wp_head(); ?>

    </head><!-- end head -->
    <body>
        <div class="se-pre-con"></div><!-- ========== PRELOADER ========== -->
        <!-- ========== MENUBAR ========== -->
        <div class="menubar">
            <div class="menubar-content">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="site-title">
                                    <h3 class="logo">FARUK</h3>
                                </div><!-- end site-title -->
                            </div><!-- end col-md-4 -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button><!-- end button -->
                            </div><!-- end navbar-header -->
                            <div class="col-md-10 col-sm-10 navbar-style">

                                 <?php wp_nav_menu(array(

                                'theme_location' =>'header_menu',
                                'container' =>'div',
                                'container_class' =>'collapse navbar-collapse',
                                'container_id' =>'bs-example-navbar-collapse-1',
                                'menu_class' => 'nav navbar-nav',
                                'depth' => '3',
                                'fallback_cb' =>'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker()


                    ));

                    ?>

                            
                            </div><!-- end col-md-8 -->
                        </div><!-- end row -->
                    </div><!-- end container-fluid -->
                </nav><!-- navbar -->
            </div><!-- end menubar-content -->
        </div><!-- end menubar -->