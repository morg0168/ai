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


                                  <?php
                                    $product_page_args = array(
                                    'post_type' => 'page',
                                    'cat' => 'code',
                                    'taxonomy' => 'category',
                                            'term' => 'code'
                                    );
                                    $site_url = home_url() . '/';
                                    query_posts($product_page_args);
                                      if (have_posts()):
                                      while ( have_posts() ) : the_post();
                                      $raw_title = get_the_title();
                                      $title = str_replace(' ', '-', $raw_title);
                                    ?>
                                      <h1><a href="<?php echo $site_url . $title; ?>"><?php the_title(); ?></a></h1>
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
        </div>
</main>

<?php get_footer(); ?>
