<?php /* Template Name: Codes */ get_header(); ?>

<main id="barba-wrapper">
    <div class="barba-container" data-next="index.html" id="skrollr-body">
        <div class="bc-inner codes">

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
                                  <?php
                                  $currentLang = pll_current_language();
                                  if($currentLang == 'en') {
                                    $tag = 'code-en';
                                    $suffix = '-en';
                                  } else {
                                    //Actually written 'code' in CMS tag section
                                    $tag = 'code-fr';
                                    $suffix = '-fr';
                                  }
                                    $product_page_args = array(
                                    'post_type' => 'page',
                                    'tag' => $tag
                                    );
                                    $site_url = home_url() . '/';
                                    query_posts($product_page_args);
                                      if (have_posts()):
                                      while ( have_posts() ) : the_post();
                                      $raw_title = get_the_title();
                                      $title = str_replace(' ', '-', $raw_title);
                                    ?>
                                      <h1 class="codes-building_name"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
                                  <?php endwhile; endif;
                                  wp_reset_query();?>


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
        <?php get_footer(); ?>
        </div>
</main>
