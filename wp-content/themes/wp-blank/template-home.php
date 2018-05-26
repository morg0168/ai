<?php /* Template Name: Home */ //get_header(); ?>
<?php
  if(!isset($_COOKIE['first'])) {
    setcookie('first', 'yes', time() + 3600);
    get_header('first');
  } else {
    get_header();
  }
?>

    </div>
    <main id="barba-wrapper">
        <div class="barba-container">
            <div class="bc-inner home">
                <!-- section 1 -->
                <section class="section-001 hero o-container" id="section-001">
                    <div class="c-main_wrap row middle-xs center-xs">
                        <div id="letter-parallax"></div>
                        <div class="c-main_inner_home">
                            <header class="c-home_header" data-center="@myAttr:-in-view">
                                <div class="text-slide_contain -first" data-bo="@class:text-slide_contain -first in-view_inner">
                                    <h1 class="c-home_header_title">
                                    <div class="js-parallax">
                                        <div class="-overflow-hidden">
                                            <span style="transition-delay: 0.2s;">A</span>
                                            <span style="transition-delay: 0.4s;">M</span>
                                            <span style="transition-delay: 0.4s;">A</span>
                                            <span style="transition-delay: 0.6s;">I</span>
                                            <span style="transition-delay:  0.8s;">M</span>
                                            <span style="transition-delay:  0.8s;">M</span>
                                            <span style="transition-delay: 0.6s;">O</span>
                                        </div>
                                    </div>
                                </h1> </div>
                                <p class="c-home_header_subtitle "><?php echo pll__('subtitle'); ?></p>
                            </header>
                            <div class="c-header_img_contain">
                                <div class="c-header_img_bg"> </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- section 2 -->
                <section class="section-002 mission" id="section-002">
                    <div class="c-content_wrap o-container -small ">
                        <div class="c-home_blocks_wrap o-grid row">
                            <!--BLOCK 1-->
                            <div class="c-home_block c-half_block -left col-xs-6">
                                <div class="c-block_image box">
                                    <div class="c-home_img_wrap "> <img src="<?php echo get_template_directory_uri(); ?>/img/test.jpg " alt=" " data-bottom="@myAttr: -in-view;"> </div>
                                    <a href=" " class="c-block_link "></a>
                                </div>
                            </div>
                            <div class="c-home_block c-half_block -right -first col-xs-6">
                                <div class="c-block_text_wrap box">
                                    <div class="c-block_text_content -align-center">
                                        <p class="c-block_text_title_pre"><?php echo pll__('notre'); ?></p>
                                        <h1 class="c-block_text_title" id="c-block_text_title" data-start="transform: translate(0px, 0px) rotate(0deg)" data-center="transform: translate(-100px, 0px) rotate(0deg)"> Mission </h1>
                                        <ul class="-text-left u-normal-text u-normal-size">
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Service a la clientèle</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Gestionnaire d’immeubles</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Technicien en bâtiment</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Comptable</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Aide-comptable</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size"> Secrétaire de gestion </li>
                                        </ul> <a href="<?php echo $GLOBALS['langPrefix'] . $GLOBALS['missionPage']; ?>" class="o-button c-block_read_more c-main_contact_button fill" data-start="@class: c-block_read_more c-main_contact_button o-button; transform: translate(-150px, -50px) rotate(0deg)" data-100-start="@class:c-block_read_more c-main_contact_button -loaded o-button fill;" data-100-center="transform: translate(0px, 0px) rotate(0deg)"><?php echo pll__('read_more'); ?><span class="button_line"></span><span class="button_line"></span></a> </div>
                                    <a href=" " class="c-block_link "></a>
                                </div>
                            </div>
                        </div>
                        <div class="o-limbo clearfix">
                            <p class="c-next-section js-parallax" data-200-center="@class:c-next-section js-parallax -in-view" data-start="@class:c-next-section js-parallax"> <span class="c-mask">+</span> </p>
                        </div>
                    </div>
                </section>
                <!-- section 3 -->
                <section class="section-003 organization" id="section-003">
                    <div class="c-content_wrap o-container -small ">
                        <div class="c-home_blocks_wrap o-grid row middle-xs">
                            <!--BLOCK 1-->
                            <div class="c-home_block c-half_block -left col-xs-6">
                                <div class="c-block_image box">
                                    <div class="c-home_img_wrap "> <img src="<?php echo get_template_directory_uri(); ?>/img/white.jpg " alt=" " data-bottom="@myAttr: -in-view;"> </div>
                                    <a href=" " class="c-block_link "></a>
                                </div>
                            </div>
                            <div class="c-home_block c-half_block -right -first col-xs-6">
                                <div class="c-block_text_wrap box">
                                    <div class="c-block_text_content -align-center">
                                        <p class="c-block_text_title_pre"><?php echo pll__('notre'); ?></p>
                                        <h1 class="c-block_text_title" id="c-block_text_title" data-start="transform: translate(0px, 0px) rotate(0deg)" data-center="transform: translate(-100px, 0px) rotate(0deg)"> Organization </h1>
                                        <ul class="-text-left u-normal-text u-normal-size">
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Service a la clientèle</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Gestionnaire d’immeubles</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Technicien en bâtiment</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Comptable</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Aide-comptable</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size"> Secrétaire de gestion </li>
                                        </ul> <a href="<?php echo $GLOBALS['langPrefix'] . $GLOBALS['organizationPage']; ?>" class="o-button c-block_read_more c-main_contact_button fill" data-start="@class: c-block_read_more c-main_contact_button o-button; transform: translate(-150px, -50px) rotate(0deg)" data-100-start="@class:c-block_read_more c-main_contact_button -loaded o-button fill;" data-100-center="transform: translate(0px, 0px) rotate(0deg)"><?php echo pll__('read_more'); ?><span class="button_line"></span><span class="button_line"></span></a> </div>
                                    <a href=" " class="c-block_link "></a>
                                </div>
                            </div>
                        </div>
                        <div class="o-limbo clearfix">
                            <p class="c-next-section js-parallax" data-200-center="@class:c-next-section js-parallax -in-view" data-start="@class:c-next-section js-parallax"> <span class="c-mask">+</span> </p>
                        </div>
                    </div>
                </section>
                <!-- section 4 -->
                <section class="section-004 organization" id="section-003">
                    <div class="c-content_wrap o-container -small ">
                        <div class="c-home_blocks_wrap o-grid row middle-xs">
                            <!--BLOCK 1-->
                            <div class="c-home_block c-half_block -left col-xs-6">
                                <div class="c-block_image box">
                                    <div class="c-home_img_wrap "> <img src="<?php echo get_template_directory_uri(); ?>/img/grey.jpg " alt=" " data-bottom="@myAttr: -in-view;"> </div>
                                    <a href=" " class="c-block_link "></a>
                                </div>
                            </div>
                            <div class="c-home_block c-half_block -right -first col-xs-6">
                                <div class="c-block_text_wrap box">
                                    <div class="c-block_text_content -align-center">
                                        <p class="c-block_text_title_pre"><?php echo pll__('notre'); ?></p>
                                        <h1 class="c-block_text_title" id="c-block_text_title" data-start="transform: translate(0px, 0px) rotate(0deg)" data-center="transform: translate(-100px, 0px) rotate(0deg)"> Codes </h1>
                                        <ul class="-text-left u-normal-text u-normal-size">
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Service a la clientèle</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Gestionnaire d’immeubles</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Technicien en bâtiment</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Comptable</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size">Aide-comptable</li>
                                            <li data-start="@class: -text-left u-normal-text -fadein-text_before u-normal-size" data-bottom="@class: -text-left u-normal-text -fadein-text_after u-normal-size"> Secrétaire de gestion </li>
                                        </ul> <a href="<?php echo $GLOBALS['langPrefix'] . $GLOBALS['codesPage'] ?>" class="o-button c-block_read_more c-main_contact_button fill" data-start="@class: c-block_read_more c-main_contact_button o-button; transform: translate(-150px, -50px) rotate(0deg)" data-100-start="@class:c-block_read_more c-main_contact_button -loaded o-button fill;" data-100-center="transform: translate(0px, 0px) rotate(0deg)"><?php echo pll__('read_more'); ?><span class="button_line"></span><span class="button_line"></span></a> </div>
                                    <a href=" " class="c-block_link "></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
