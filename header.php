<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!-- Favicon-icon -->
    <link rel="icon" type="image/icon" href="<?php echo esc_url(get_theme_mod('favi_icon')); ?>">
    <!-- style css -->
    <link href="<?php esc_url(bloginfo('stylesheet_url')); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- main wraper -->
    <div class="bduds-wraper">
        <!-- header area start -->
        <header id="header" class="header dbuds">

        </header>
        <!-- header area end -->