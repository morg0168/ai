<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<!--		<link href="//www.google-analytics.com" rel="dns-prefetch">-->
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="twitter:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>">
        <meta name="og:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>">
        <?php 
        $metadesc = get_post_meta( get_the_ID(), 'seo_desc', true );
        if (! empty(  $metadesc  )){?>
		<meta name="description" content="<?php     echo $metadesc['text'];    ?>">
        <meta name="twitter:description" content="<?php echo $metadesc['text'];  ?>">
        <meta name="og:description" content="<?php echo $metadesc['text'];  ?>">
        <?php  } else{?>
		
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
        <meta name="og:description" content="<?php bloginfo('description'); ?>">
        <?php  } ?>
        <?php  if ( has_post_thumbnail() ) { ?>
          <meta name="twitter:image" content="<?php the_post_thumbnail_url(); ?>">
          <meta name="og:image" content="<?php the_post_thumbnail_url(); ?>">
         <?php } else{ ?>
          <meta name="twitter:image" content="<?php echo get_template_directory_uri();?>/screenshot.png">
          <meta name="og:image" content="<?php echo get_template_directory_uri();?>/screenshot.png">
         <?php } ?>
     
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php wpblank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
