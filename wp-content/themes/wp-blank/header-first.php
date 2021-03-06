<?php
  $GLOBALS['currentlang'] = get_bloginfo('language');
  $GLOBALS['base'] = home_url();
	$GLOBALS['langPrefix'] = '';
  $GLOBALS['missionPage'] = '';
  $GLOBALS['organizationPage'] = '';
  $GLOBALS['codesPage'] = '';
if ($GLOBALS['currentlang'] == "en-CA") {
		$GLOBALS['langPrefix'] = '/en';
		$GLOBALS['missionPage'] = '/mission-2';
		$GLOBALS['organizationPage'] = '/organization';
		$GLOBALS['codesPage'] = '/codes-2';
	} else {
		$GLOBALS['langPrefix'] = '';
		$GLOBALS['missionPage'] = '/mission';
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


		<!-- <nav class="nav" role="navigation">
			<?php //wpblank_nav(); ?>
		</nav> -->


		<!-- wrapper -->
		<div class="wrapper">

		    <!--language switcher modal-->
		    <div class="c-loader_contain row middle-xs">
		        <div class="c-loader col-xs-12 center-xs">
		            <div class="c-loader_text_contain">
		                <div class="c-loader_text row middle-xs center-xs">
		                    <div class="french col-xs-12 language-switcher"><span>
		                       <?php pll_the_languages(); ?>
		                    </span>
											</div>
		                </div>
		            </div>
		        </div>
		    </div>

		    <!-- loader -->
		    <div class="c-spinner">
		        <div id="progress" data-start="width:0%; background:hsl(230, 13%, 91%);" data-end="width:100%; background:hsl(55, 25%, 60%);"></div>
		    </div>

		    <!--header-->
		    <header class="c-header fixedHeader u-demi-text">
		        <div class="c-header_wrap o-container">
		            <div class="c-header_inner">
		                <!--mobile nav will go here-->
		                <div class="c-header_main_logo"><a class="c-header_main_logo_link ajaxlink" href="<?php echo home_url(); ?>"><span><img src="<?php echo get_template_directory_uri(); ?>/img/logo_text.png" alt=""></span></a> </div>
		                <button id="js-toggle_menu"><span></span></button>
		                <nav class="c-nav" id="js-nav">
		                    <div class="c-nav_wrap">
		                        <ul class="c-nav_main_list">
															<li class="c-nav_main_item -first"><a href="<?php echo $GLOBALS['langPrefix'] . $GLOBALS['missionPage']; ?>" class="ajaxlink c-nav_main_link"><span class="c-nav_main_text">Mission</span></a></li>
															<li class="c-nav_main_item -second"><a href="<?php echo $GLOBALS['langPrefix'] . $GLOBALS['organizationPage']; ?>" class="c-nav_main_link ajaxlink"><span class="c-nav_main_text">Organisation</span></a></li>
															<li class="c-nav_main_item -third"><a href="<?php echo $GLOBALS['langPrefix'] . $GLOBALS['codesPage']; ?>" class="c-nav_main_link ajaxlink"><span class="c-nav_main_text">Archives</span></a></li>
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
							<li><a href="https://www.facebook.com/amaimmo/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/ama_immo/" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://twitter.com/amaimmo" target="_blank"><i class="fa fa-twitter"></i></a></li>
		        </ul>
		    </nav>

		    <nav class="c-header_tertiary -desktop">
		        <p>1.514.296.3005</p>
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
		            <form action="" class="">
		                <div class="row">
		                    <div class="fieldgroup col-xs-12 col-sm-6 start-xs">
		                        <field>
		                            <label for=""><?php echo pll__('name'); ?></label>
		                            <input type="text"> </field>
		                    </div>
		                    <div class="fieldgroup col-xs-12 col-sm-6 start-xs">
		                        <field>
		                            <label for=""><?php echo pll__('email'); ?></label>
		                            <input type="text"> </field>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="fieldgroup col-xs-12 col-sm-4 start-xs">
		                        <field>
		                            <label for=""><?php echo pll__('subject'); ?></label>
		                            <input type="text"> </field>
		                    </div>
		                    <div class="fieldgroup col-xs-12 col-sm-4 start-xs">
		                        <field>
		                            <label for=""><?php echo pll__('building_address'); ?></label>
		                            <input type="text"> </field>
		                    </div>
		                    <div class="fieldgroup col-xs-12 col-sm-4 start-xs">
		                        <field>
		                            <label for=""><?php echo pll__('unit_number'); ?></label>
		                            <input type="text"> </field>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="fieldgroup col-xs-12 col-sm-12 start-xs">
		                        <field>
		                            <label for=""><?php echo pll__('message'); ?></label>
		                            <textarea></textarea>
		                        </field>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="fieldgroup col-xs-12 col-sm-12 end-xs">
		                        <button class="btn btn-submit"><?php echo pll__('submit'); ?></button>
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>
		    <!--Close contact form -->
