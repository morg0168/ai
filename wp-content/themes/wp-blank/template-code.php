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
                                    <h1 class="-text-left"><?php the_content(); ?></h1>
                                    <ul class="codes-list -nested level1">
                                      <?php
                                        $portal_block = get_post_meta( get_the_ID(), 'portal_block', true );
                                          if (! empty(  $portal_block  )){
                                        ?>
                                        <!--
                                        * Level1a - SECTION
                                        * Level2a - YEAR
                                        * Level3a - NAME
                                        * Level4a - LINK
                                         -->
                                        <li class="codes-list-item documents-legaux level1"> <?php if ($portal_block['level1a']) { echo $portal_block['level1a']; } ?>
                                            <ul class="codes-list -nested level2">
                                                <?php
                                                  $max_posts = 9;
                                                  for ($i = 1; $i <= $max_posts; $i++) {
                                                    $portalValue = $portal_block['l1name' . $i];
                                                    $portalValueLength = strlen(trim($portalValue));
                                                  if ($portalValueLength > 0) {
                                                  ?>
                                              <li class="codes-list-item"><a href="javascript:void(0)"
                                                data-download="<?php if ($portal_block['l1link' . $i]) { echo $portal_block['l1link' . $i]; } ?>"
                                                data-target="<?php if ($portal_block['l1link' . $i]) { echo $portal_block['l1link' . $i]; } ?>">
                                                <?php if ($portal_block['l1name' . $i]) { echo $portal_block['l1name' . $i]; } ?></a>
                                              </li>
                                                <?php }
                                              } ?>
                                            </ul>
                                        </li>
                                        <li class="codes-list-item finances level1"> <?php if ($portal_block['level2a']) { echo $portal_block['level2a']; } ?>
                                            <ul class="codes-list -nested level2">

                                              <li class="codes-list-item"><?php if ($portal_block['l2date1']) { echo $portal_block['l2date1']; }?></li>
                                                <ul class="codes-list -nested level3">
                                                  <?php
                                                    $max_posts = 3;
                                                    $dateSet = strlen(trim($portal_block['l2date1']));
                                                    for ($i = 1; $i <= $max_posts; $i++) {
                                                      $portalName = strlen(trim($portal_block['l2name' . $i]));
                                                      if ($dateSet > 0 && $portalName > 0) {
                                                    ?>
                                                    <li class="codes-list-item end">
                                                    <a href="javascript:void(0)"
                                                      data-download="<?php if ($portal_block['l2link' . $i]) { echo $portal_block['l2link' . $i]; } ?>"
                                                      data-target="<?php if ($portal_block['l2link' . $i]) { echo $portal_block['l2link' . $i]; } ?>">
                                                      <?php if ($portal_block['l2name' . $i]) { echo $portal_block['l2name' . $i]; } ?></a>
                                                    </li>
                                                    <?php }
                                                  } ?>
                                                </ul>

                                            <li class="codes-list-item"><?php if ($portal_block['l2date2']) { echo $portal_block['l2date2']; }?></li>
                                                <ul class="codes-list -nested level3">
                                                  <?php
                                                    $max_posts = 6;
                                                    $dateSet = strlen(trim($portal_block['l2date2']));
                                                    for ($i = 4; $i <= $max_posts; $i++) {
                                                      $portalName = strlen(trim($portal_block['l2name' . $i]));
                                                      if ($dateSet > 0 && $portalName > 0) {
                                                    ?>
                                                    <li class="codes-list-item end">
                                                    <a href="javascript:void(0)"
                                                      data-download="<?php if ($portal_block['l2link' . $i]) { echo $portal_block['l2link' . $i]; } ?>"
                                                      data-target="<?php if ($portal_block['l2link' . $i]) { echo $portal_block['l2link' . $i]; } ?>">
                                                      <?php if ($portal_block['l2name' . $i]) { echo $portal_block['l2name' . $i]; } ?></a>
                                                    </li>
                                                    <?php }
                                                  } ?>
                                                </ul>
                                                  <li class="codes-list-item"><?php if ($portal_block['l2date3']) { echo $portal_block['l2date3']; }?></li>
                                                <ul class="codes-list -nested level3">
                                                  <?php
                                                    $max_posts = 9;
                                                    $dateSet = strlen(trim($portal_block['l2date3']));
                                                    for ($i = 7; $i <= $max_posts; $i++) {
                                                        $portalName = strlen(trim($portal_block['l2name' . $i]));
                                                        if ($dateSet > 0 && $portalName > 0) {
                                                    ?>
                                                    <li class="codes-list-item end">
                                                    <a href="javascript:void(0)"
                                                      data-download="<?php if ($portal_block['l2link' . $i]) { echo $portal_block['l2link' . $i]; } ?>"
                                                      data-target="<?php if ($portal_block['l2link' . $i]) { echo $portal_block['l2link' . $i]; } ?>">
                                                      <?php if ($portal_block['l2name' . $i]) { echo $portal_block['l2name' . $i]; } ?></a>
                                                    </li>
                                                    <?php }
                                                }?>
                                                </ul>
                                            </ul>
                                        </li>


                                        <li class="codes-list-item assembles  level1"><?php if ($portal_block['level3a']) { echo $portal_block['level3a']; } ?>
                                            <ul class="codes-list -nested level2">
                                              <li class="codes-list-item"><?php if ($portal_block['l3date1']) { echo $portal_block['l3date1']; }?></li>
                                                <ul class="codes-list -nested level3">
                                                  <?php
                                                    $max_posts = 2;
                                                    $dateSet = strlen(trim($portal_block['l3date1']));
                                                    for ($i = 1; $i <= $max_posts; $i++) {
                                                      $portalName = strlen(trim($portal_block['l3name' . $i]));
                                                      if ($dateSet > 0 && $portalName > 0) {
                                                    ?>
                                                    <li class="codes-list-item end">
                                                    <a href="javascript:void(0)"
                                                      data-download="<?php if ($portal_block['l3link' . $i]) { echo $portal_block['l3link' . $i]; } ?>"
                                                      data-target="<?php if ($portal_block['l3link' . $i]) { echo $portal_block['l3link' . $i]; } ?>">
                                                      <?php if ($portal_block['l3name' . $i]) { echo $portal_block['l3name' . $i]; } ?></a>
                                                    </li>
                                                    <?php }
                                                  } ?>
                                                </ul>

                                            <li class="codes-list-item"><?php if ($portal_block['l3date2']) { echo $portal_block['l3date2']; }?></li>
                                                <ul class="codes-list -nested level3">
                                                  <?php
                                                    $max_posts = 4;
                                                    $dateSet = strlen(trim($portal_block['l3date2']));
                                                    for ($i = 3; $i <= $max_posts; $i++) {
                                                      $portalName = strlen(trim($portal_block['l3name' . $i]));
                                                      if ($dateSet > 0 && $portalName > 0) {
                                                    ?>
                                                    <li class="codes-list-item end">
                                                    <a href="javascript:void(0)"
                                                      data-download="<?php if ($portal_block['l3link' . $i]) { echo $portal_block['l3link' . $i]; } ?>"
                                                      data-target="<?php if ($portal_block['l3link' . $i]) { echo $portal_block['l3link' . $i]; } ?>">
                                                      <?php if ($portal_block['l3name' . $i]) { echo $portal_block['l3name' . $i]; } ?></a>
                                                    </li>
                                                    <?php }
                                                  } ?>
                                                </ul>
                                                  <li class="codes-list-item"><?php if ($portal_block['l3date3']) { echo $portal_block['l3date3']; }?></li>
                                                <ul class="codes-list -nested level3">
                                                  <?php
                                                    $max_posts = 6;
                                                    $dateSet = strlen(trim($portal_block['l3date3']));
                                                    for ($i = 5; $i <= $max_posts; $i++) {
                                                        $portalName = strlen(trim($portal_block['l3name' . $i]));
                                                        if ($dateSet > 0 && $portalName > 0) {
                                                    ?>
                                                    <li class="codes-list-item end">
                                                    <a href="javascript:void(0)"
                                                      data-download="<?php if ($portal_block['l3link' . $i]) { echo $portal_block['l3link' . $i]; } ?>"
                                                      data-target="<?php if ($portal_block['l3link' . $i]) { echo $portal_block['l3link' . $i]; } ?>">
                                                      <?php if ($portal_block['l3name' . $i]) { echo $portal_block['l3name' . $i]; } ?></a>
                                                    </li>
                                                    <?php }
                                                }?>

                                                <!-- <li class="codes-list-item">2018
                                                    <ul class="codes-list -nested level3">
                                                        <li class="codes-list-item end">
                                                            <a href=""> Ordre du jour</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="codes-list-item">2017
                                                    <ul class="codes-list -nested level3">
                                                        <li class="codes-list-item end">
                                                            <a href="">Ordre du jour</a>
                                                        </li>
                                                        <li class="codes-list-item end">
                                                            <a href="">Procès-verbal</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="codes-list-item">2016
                                                    <ul class="codes-list -nested level3">
                                                        <li class="codes-list-item end">
                                                            <a href="">Ordre du jour</a>
                                                        </li>
                                                        <li class="codes-list-item end">
                                                            <a href=""> Procès-verbal</a>
                                                        </li>
                                                    </ul>
                                                </li> -->
                                            </ul>
                                        </li>
                                    </ul>


                                  <?php } endwhile; endif; ?>
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
