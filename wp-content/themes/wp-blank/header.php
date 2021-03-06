<?php
  $GLOBALS['currentlang'] = get_bloginfo('language');
  $GLOBALS['base'] = home_url();
	$GLOBALS['langPrefix'] = '';
  $GLOBALS['missionPage'] = '';
  $GLOBALS['engagementsPage'] = '';
  $GLOBALS['organizationPage'] = '';
  $GLOBALS['codesPage'] = '';
if ($GLOBALS['currentlang'] == "en-CA") {
		$GLOBALS['langPrefix'] = '/en';
		$GLOBALS['missionPage'] = '/mission-2';
    $GLOBALS['engagementsPage'] = '/engagements-2';
		$GLOBALS['organizationPage'] = '/organization';
		$GLOBALS['codesPage'] = '/codes-2';
	} else {
		$GLOBALS['langPrefix'] = '';
		$GLOBALS['missionPage'] = '/mission';
    $GLOBALS['engagementsPage'] = '/engagements';
		$GLOBALS['organizationPage'] = '/organisation';
		$GLOBALS['codesPage'] = '/codes';
	}
?>

<!doctype html>
<html <?php language_attributes(); ?>class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?><?php bloginfo('name'); ?></title>

<!--		<link href="//www.google-analytics.com" rel="dns-prefetch">-->
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="twitter:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?><?php bloginfo('name'); ?>">
        <meta name="og:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?><?php bloginfo('name'); ?>">
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
	<body>


		<!-- wrapper -->
		<div class="wrapper">

		    <!-- loader -->
		    <div class="c-spinner">
		        <div id="progress" data-start="width:0%; background:hsl(230, 13%, 91%);" data-end="width:100%; background:hsl(55, 25%, 60%);"></div>
		    </div>

		    <!--header-->
		    <header class="c-header fixedHeader u-demi-text">
		        <div class="c-header_wrap o-container">
		            <div class="c-header_inner">
		                <!--mobile nav will go here-->
		                <div class="c-header_main_logo"><a class="c-header_main_logo_link ajaxlink" href="<?php echo home_url(); ?>"><span><img class="black-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo_text.png" alt=""></span></a>
		                </div>
		                <button id="js-toggle_menu"><span></span></button>
		                <nav class="c-nav" id="js-nav">
		                    <div class="c-nav_wrap row middle-xs center-xs">
		                        <ul class="c-nav_main_list">
                               <li class="c-nav_main_item"><a href="<?php echo $GLOBALS['base'] . $GLOBALS['langPrefix'] ?>" class="ajaxlink c-nav_main_link desktop-up"><span class="c-nav_main_text">Home</span></a></li>
		                            <li class="c-nav_main_item -first"><a href="<?php echo $GLOBALS['base'] . $GLOBALS['langPrefix'] . $GLOBALS['missionPage']; ?>" class="ajaxlink c-nav_main_link"><span class="c-nav_main_text">Mission</span></a></li>
                                <li class="c-nav_main_item -second"><a href="<?php echo $GLOBALS['base'] . $GLOBALS['langPrefix'] . $GLOBALS['engagementsPage']; ?>" class="ajaxlink c-nav_main_link"><span class="c-nav_main_text">Engagements</span></a></li>
		                            <li class="c-nav_main_item -third"><a href="<?php echo $GLOBALS['base'] . $GLOBALS['langPrefix'] . $GLOBALS['organizationPage']; ?>" class="c-nav_main_link ajaxlink"><span class="c-nav_main_text"><?php echo $GLOBALS['currentlang'] !== "en-CA" ? 'Organisation' :  'Organization' ?></span></a></li>
		                            <li class="c-nav_main_item -fourth"><a href="<?php echo $GLOBALS['base'] . $GLOBALS['langPrefix'] . $GLOBALS['codesPage']; ?>" class="c-nav_main_link ajaxlink"><span class="c-nav_main_text">Archives</span></a></li>
                                <li class="c-nav_main_item mobile-links"><a href="javascript:void(0)" class="c-nav_main_link ajaxlink contact"><span class="c-nav_main_text">Contact</span></a></li>
                              	<span class="language-wrap"><?php
          													$args = array('hide_current' => true,
          													'display_names_as' => 'slug'
          													);
          													if (function_exists('pll_the_languages')) {
          														pll_the_languages($args);
          													}
          										?></span>
		                        </ul>
		                        <div class="c-main_right row middle-xs"> <a href="" class="c-main_right_laguage c-nav_main_link -small "><span class="c-main_right_language_text">

													<?php
													$args = array('hide_current' => true,
													'display_names_as' => 'slug'
													);
													if (function_exists('pll_the_languages')) {
														pll_the_languages($args);
													}
													?>

													</span></a>
		                            <div class="c-main_right_contact"><a href="javascript:void(0)" class="c-main_contact_button o-button fill" id=" contact-us">Contact<span class="button_line"></span><span class="button_line"></span></a></div>
		                        </div>
		                    </div>
		                </nav>
		            </div>
		        </div>
		    </header>
		    <!--close header-->

		    <nav class="c-header_scrolltop -desktop">
		        <a href="javascript:void(0)" class="more"></a>
		        <p>top</p>
		    </nav>

		    <nav class="c-header_secondary -desktop">
		        <ul>
		            <li><a href="https://www.facebook.com/amaimmo/" target="_blank"><i class="fa fa-15x fa-facebook" aria-hidden="true"></i></a></li>
		            <li><a href="https://www.instagram.com/ama_immo/" target="_blank"><i class="fa fa-15x fa-instagram"></i></a></li>
		            <li><a href="https://twitter.com/amaimmo" target="_blank"><i class="fa fa-15x fa-twitter"></i></a></li>
		        </ul>
		    </nav>

		    <nav class="c-header_tertiary -desktop">
		        <p>514-937-9555</p>
		    </nav>

		    <!--Contact form -->
		    <div class="form-contain_wrap modal-wrap contact-us hidden"></div>
		    <div class="form-contain mb-contain row middle-xs hidden">
		        <div class="col-xs-12">
		            <div class="row">
		                <div class="fieldgroup col-xs-12 start-xs">
		                    <h1><?php echo pll__('how_to_help'); ?></h1> </div>
		            </div>
		            <a href="#" class="close-button -right"></a>

                <?php
                $currentLang = pll_current_language();
                if($currentLang == 'en') {
                //actually written 'contact' in CMS
                  $tag = 'contact-en';
                } else {
                  $tag = 'contact-fr';
                }

                $cat_query = null;

                $args = array (
                    'tag' => $tag
                    );

                $cat_query = new WP_Query( $args );

                if ( $cat_query->have_posts() ) { ?>
                    <div>
                    <?php $cat_query->the_post();
                    echo the_content(); ?>
                  </div>
                <?php  } ?>

		        </div>
		    </div>
		    <!--Close contact form -->
