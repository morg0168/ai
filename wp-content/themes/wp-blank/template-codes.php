<?php /* Template Name: Codes */ get_header(); ?>

<main id="barba-wrapper">
    <div class="barba-container" data-next="index.html">
        <div class="bc-inner codes">

          <?php the_content() ?>

          <?php
          //password protect everything else inside
          if ( !post_password_required() ) { ?>

            <!-- section 1 -->
            <section class="section-001 hero o-container" id="section-001">
                <div class="c-main_wrap diff row middle-xs center-xs">
                    <div class="c-main_inner_home col-xs-12 col-sm-6">
                        <header class="c-home_header" data-center="@myAttr:-in-view box">
                            <div class="js-parallax">
                                <div class="-overflow-hidden">
                                    <h1><a href="<?php echo home_url(); ?>/code1/">Saint Viateur Est</a></h1>
                                    <h1><a href="<?php echo home_url(); ?>/code2/">343 Ridgewood</a></h1>
                                    <h1><a href="<?php echo home_url(); ?>/code3/">50 Laurier Est</a></h1>
                                    <h1><a href="<?php echo home_url(); ?>/code4/">100 Sherbrooke Ouest</a></h1>
                                    <h1><a href="<?php echo home_url(); ?>/code5/">20 Parc Ave</a></h1>
                                </div>
                            </div>
                        </header>
                    </div>
                    <div class="c-main_inner_home col-xs-12 col-sm-6 pdf-wrap">
                        <div class="img-contain middle-xs center-xs row"> </div>
                    </div>
                </div>
            </section>
        <?php  } ?>
        </div>
</main>

<?php get_footer(); ?>
