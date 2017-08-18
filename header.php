<!doctype html>
<!--[if lt IE 7]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7">
   <![endif]-->
   <!--[if (IE 7)&!(IEMobile)]>
   <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8">
      <![endif]-->
      <!--[if (IE 8)&!(IEMobile)]>
      <html <?php language_attributes(); ?> class="no-js lt-ie9">
         <![endif]-->
         <!--[if gt IE 8]><!--> 
         <html <?php language_attributes(); ?> class="no-js">
            <!--<![endif]-->
            <head>
               <meta charset="utf-8">
               <?php // Google Chrome Frame for IE ?>
               <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
               <title><?php echo get_the_title(); echo ' | '; echo get_bloginfo(); ?></title>
               <?php // mobile meta (hooray!) ?>
               <meta name="HandheldFriendly" content="True">
               <meta name="MobileOptimized" content="320">
               <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport' />
               <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
               <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
               <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
               <!--[if IE]>
               <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
               <![endif]-->
               <?php // or, set /favicon.ico for IE10 win ?>
               <meta name="msapplication-TileColor" content="#f01d4f">
               <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
               <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
               <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
               <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
               <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
               <?php // wordpress head functions ?>
               <?php wp_head(); ?>
               <?php // end of wordpress head ?>
               <?php // drop Google Analytics Here ?>
               <?php // end analytics ?>
            </head>
            <body <?php body_class(); ?>>
               <div id="container">
               <header class="header" role="banner">
                  <div id="inner-header" class="wrap clearfix">
                     <div class="top-nav">
                        <div class="row">
                           <div class="col-md-2"></div>
                           <div class="col-md-2 hd-logo animated bounceInLeft"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/library/images/drife-logo.png"></a></div>
                           <div class="col-md-2"></div>
                           <div id="test" class="col-md-6 d-navtop">
                              <?php wp_nav_menu(array('menu'=>'Top Menu', 'menu_class' => 'nav nav-tabs nav-drife-top'));?>
                           </div>
                           <div class="logo-m-menu m-dis m-arrow">
                              <span class="glyphicon glyphicon-menu-hamburger lo-menu" title="Open Menu"></span>
                           </div>
                           <div id="m-test" class="col-md-12 m-navtop pd-0 op-0 animated">
                              <?php wp_nav_menu(array('menu'=>'Top Menu'));?>
                              <div class="c-black"><span class="glyphicon glyphicon-menu-up cb-up" title="Close Menu"></span></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </header>