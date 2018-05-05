<?php /* Template Name: Code2 */ get_header(); ?>

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
                                    <h1 class="-text-left">Documents for Building 2</h1>
                                    <ul class="codes-list -nested level1">
                                        <li class="codes-list-item documents-legaux level1">Legaux
                                            <ul class="codes-list -nested level2">
                                                <li class="codes-list-item"><a href="javascript:void(0)" data-target="<?php echo get_template_directory_uri(); ?>/img/pdfs/pdf-test.jpg" data-file="<?php echo get_template_directory_uri(); ?>/img/pdfs/pdf-test.pdf">Declaration de coprporiete</a></li>
                                                <li class="codes-list-item"><a href="javascript:void(0)" data-target="<?php echo get_template_directory_uri(); ?>/img/pdfs/pdf-test2.jpg" data-file="<?php echo get_template_directory_uri(); ?>/img/pdfs/pdf-test.pdf">Reglement</a></li>
                                                <li class="codes-list-item"><a href="javascript:void(0)" data-target="<?php echo get_template_directory_uri(); ?>/img/pdfs/pdf-test.jpg" data-file="<?php echo get_template_directory_uri(); ?>/img/pdfs/pdf-test.pdf">Plans</a></li>
                                                <li class="codes-list-item"><a href="javascript:void(0)" data-target="<?php echo get_template_directory_uri(); ?>/img/pdfs/pdf-test2.jpg" data-file="<?php echo get_template_directory_uri(); ?>/img/pdfs/pdf-test.pdf">Assurance</a></li>
                                            </ul>
                                        </li>
                                        <li class="codes-list-item finances level1">Finances
                                            <ul class="codes-list -nested level2">
                                                <li class="codes-list-item">2018</li>
                                                <ul class="codes-list -nested level3">
                                                    <li class="codes-list-item end"> <a href="">Budget</a> </li>
                                                    <li class="codes-list-item end"> <a href="">Etats-Financiers</a> </li>
                                                    <li class="codes-list-item end"> <a href="">Frais de condo</a> </li>
                                                </ul>
                                                <li class="codes-list-item">2017</li>
                                                <ul class="codes-list -nested level3">
                                                    <li class="codes-list-item end"> <a href="">Budget</a> </li>
                                                    <li class="codes-list-item end"> <a href="">Etats-Financiers</a> </li>
                                                    <li class="codes-list-item "> <a href="">Frais de condo</a> </li>
                                                </ul>
                                                <li class="codes-list-item">2016</li>
                                                <ul class="codes-list -nested level3">
                                                    <li class="codes-list-item end"> <a href="">Budget</a> </li>
                                                    <li class="codes-list-item end"> <a href=""> Etats-Financiers</a> </li>
                                                    <li class="codes-list-item end"> <a href="">Frais de condo</a> </li>
                                                </ul>
                                            </ul>
                                        </li>
                                        <li class="codes-list-item assembles  level1">Assemblees generales
                                            <ul class="codes-list -nested level2">
                                                <li class="codes-list-item">2018
                                                    <ul class="codes-list -nested level3">
                                                        <li class="codes-list-item end"> <a href=""> Ordre du jour</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="codes-list-item">2017
                                                    <ul class="codes-list -nested level3">
                                                        <li class="codes-list-item end"> <a href="">Ordre du jour</a> </li>
                                                        <li class="codes-list-item end"> <a href="">Procès-verbal</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="codes-list-item">2016
                                                    <ul class="codes-list -nested level3">
                                                        <li class="codes-list-item end"> <a href="">Ordre du jour</a> </li>
                                                        <li class="codes-list-item end"> <a href=""> Procès-verbal</a> </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
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
