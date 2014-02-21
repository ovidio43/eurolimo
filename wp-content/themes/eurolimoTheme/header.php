<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/bxslider/jquery.bxslider.css">
        
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css?version=<?php echo date('ymdhis'); ?>">
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>> 
      <header id="header">
        <div class="wrapper">
            <span class="top-info" style="top:0;right:0;position:absolute;">info@eurolimodc.com  +1 703-664-0410</span>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo" alt="Euro Limo DC"> <img src="<?php echo get_template_directory_uri(); ?>/img/logo_euro.png"></a>
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => '', 'container' => 'div','items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>','container_class' => 'primary-navigation',)); ?>
        </div>
      </header>
