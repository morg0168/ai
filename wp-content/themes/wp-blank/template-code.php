<?php /* Template Name: Code */ get_header(); ?>

<main id="barba-wrapper">
    <div class="barba-container" data-next="index.html">
        <div class="bc-inner codes">

          <?php the_content() ?>

          <?php
          //password protect everything else inside
          if ( !post_password_required() ) { ?>

            <!-- section 1 -->
            <section class="section-001 hero o-container" id="section-001">
                <div class="c-main_wrap diff row">
                    <div class="c-main_inner_home col-xs-12 col-sm-6">
                        <header class="c-home_header" data-center="@myAttr:-in-view box">
                            <div class="js-parallax">
                                <div class="-overflow-hidden">
                                  <!--start Loop -->
                                  <?php if (have_posts()): while (have_posts()): the_post();?>
                                      <?php get_template_part('loop-code'); ?>
                                  <?php endwhile; endif; ?>
                                  <!--End Loop -->
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
