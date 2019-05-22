<?php get_header() ?>

<main class="page-wrap">


    <section class="about" id="about">
        <div id="particles-js-about1"></div>
        <div id="particles-js-about2"></div>
        <div id="particles-js-about3"></div>
        <div class="container about__container">
            <div class="col-xs-12 col-sm-6 about__row" data-aos="fade-up" data-aos-offset="200" data-aos-duration="750"><h2 class="about__title section-title">About project</h2>
                <article class="about__etalonium"><img class="about__big-letter" src="<?= get_template_directory_uri() ?>/img/e@1X.png" srcset="<?= get_template_directory_uri() ?>/img/e@2X.png 2x, <?= get_template_directory_uri() ?>/img/e@3X.png 3x">
                    <p class="about__paragraph"><span class="about__paragraph_first-letter">&rsquo;talonium</span>- a unique stock of model business traffic and a decentralized online platform in the world of fashion.<br>A revolutionary social lift with an integrated platform for selling services - model&rsquo;s contracts, designers, agents and other talents in the fashion industry.</p>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6 about__row" data-aos="fade-up" data-aos-offset="500" data-aos-duration="750">
                <article class="about__mission">
                    <div class="about__mission_text"><img class="about__big-letter" src="<?= get_template_directory_uri() ?>/img/M@1X.png" srcset="<?= get_template_directory_uri() ?>/img/M@2X.png 2x, <?= get_template_directory_uri() ?>/img/M@3X.png 3x">
                        <p class="about__paragraph-mission"><span class="about__paragraph_first-letter">ission:</span>To build a new, protected fashion industry and create a non-corrupt way to develop one&ldquo;s dream of success and fame.</p>
                    </div>
                </article>
                <article class="about__etalonium-coin"><img class="about__big-letter" src="<?= get_template_directory_uri() ?>/img/e@1X.png" srcset="<?= get_template_directory_uri() ?>/img/e@2X.png 2x, <?= get_template_directory_uri() ?>/img/e@3X.png 3x">
                    <p class="about__paragraph about__paragraph-coin"><span class="about__paragraph_first-letter">talonium Coin</span>- allows you to tokenize your progress and form an objective value, earning a place in the world ranking.</p>
                </article><!-- <a class="about__btn_red btn_red" href="/">About product</a> -->
            </div><img class="about__bottom-img" src="<?= get_template_directory_uri() ?>/img/about-photo.jpg"></div>
    </section>


    <section id="market-analys" class="market-analys">

        <div class="container models__container">
            <div class="models__title-wr">
                <div class="models__big-title">M</div>
                <h2 class="about__title section-title">Our models</h2>
            </div>

            <div class="models__gallery">

                <div class="models__gallery_col">

                    <?php
                        $i = 0;
                        $n = 1;
                        $args = array(
                            'post_type' => 'header-contacts',
                            'order' => 'DESC',
                            'posts_per_page' => 700
                        );
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            $i++;
                            if ($i == $n) :
                                $n += 3;
                    ?>

                        <article class="models__gallery_item" data-id="<?= $n-3 ?>">
                            <div class="model__gallery_item-bg_wr">
                                <div class="models__gallery_item-bg" style="background-image: url('<?= get_the_post_thumbnail_url() ?>');"></div>
                            </div>
                            <div class="models__gallery_item_title">
                                <h4><?php the_title() ?></h4>
                            </div>
                        </article>
                        <!-- /.models__gallery_item model-item -->

                    <?php
                        endif;
                        endwhile;
                        wp_reset_query();
                    ?>
                    
                </div>
                <!-- /.models__gallery_col -->

                <div class="models__gallery_col">

                    <?php
                        $i = 0;
                        $n = 1;
                        $args = array(
                            'post_type' => 'header-contacts',
                            'order' => 'DESC',
                            'posts_per_page' => 700,
                            'offset' => 1
                        );
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            $i++;
                            if ($i == $n) :
                                $n += 3;
                    ?>

                        <article class="models__gallery_item" data-id="<?= $n-2 ?>">
                            <div class="model__gallery_item-bg_wr">
                                <div class="models__gallery_item-bg" style="background-image: url('<?= get_the_post_thumbnail_url() ?>');"></div>
                            </div>
                            <div class="models__gallery_item_title">
                                <h4><?php the_title() ?></h4>
                            </div>
                        </article>
                        <!-- /.models__gallery_item model-item -->

                    <?php
                        endif;
                        endwhile;
                        wp_reset_query();
                    ?>

                </div>
                <!-- /.models__gallery_col -->
                
                <div class="models__gallery_col">

                    <?php
                        $i = 0;
                        $n = 1;
                        $args = array(
                            'post_type' => 'header-contacts',
                            'order' => 'DESC',
                            'posts_per_page' => 700,
                            'offset' => 2
                        );
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            $i++;
                            if ($i == $n) :
                                $n += 3;
                    ?>

                        <article class="models__gallery_item" data-id="<?= $n-1 ?>">
                            <div class="model__gallery_item-bg_wr">
                                <div class="models__gallery_item-bg" style="background-image: url('<?= get_the_post_thumbnail_url() ?>');"></div>
                            </div>
                            <div class="models__gallery_item_title">
                                <h4><?php the_title() ?></h4>
                            </div>
                        </article>
                        <!-- /.models__gallery_item model-item -->

                    <?php
                        endif;
                        endwhile;
                        wp_reset_query();
                    ?>

                </div>
                <!-- /.models__gallery_col -->

            </div>
            <!-- /.models__gallery-wr -->


            <div class="models__gallery_tablet">

                <div class="models__gallery_col">

                    <?php
                    $i = 0;
                    $n = 1;
                    $args = array(
                        'post_type' => 'header-contacts',
                        'order' => 'DESC',
                        'posts_per_page' => 700
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        $i++;
                        if ($i == $n) :
                            $n += 2;
                            ?>

                            <article class="models__gallery_item" data-id="<?= $n-2 ?>">
                                <div class="model__gallery_item-bg_wr">
                                    <div class="models__gallery_item-bg" style="background-image: url('<?= get_the_post_thumbnail_url() ?>');"></div>
                                </div>
                                <div class="models__gallery_item_title">
                                    <h4><?php the_title() ?></h4>
                                </div>
                            </article>
                            <!-- /.models__gallery_item model-item -->

                        <?php
                        endif;
                    endwhile;
                    wp_reset_query();
                    ?>

                </div>
                <!-- /.models__gallery_col -->

                <div class="models__gallery_col">

                    <?php
                    $i = 0;
                    $n = 1;
                    $args = array(
                        'post_type' => 'header-contacts',
                        'order' => 'DESC',
                        'posts_per_page' => 700,
                        'offset' => 1
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        $i++;
                        if ($i == $n) :
                            $n += 2;
                            ?>

                            <article class="models__gallery_item" data-id="<?= $n-1 ?>">
                                <div class="model__gallery_item-bg_wr">
                                    <div class="models__gallery_item-bg" style="background-image: url('<?= get_the_post_thumbnail_url() ?>');"></div>
                                </div>
                                <div class="models__gallery_item_title">
                                    <h4><?php the_title() ?></h4>
                                </div>
                            </article>
                            <!-- /.models__gallery_item model-item -->

                        <?php
                        endif;
                    endwhile;
                    wp_reset_query();
                    ?>

                </div>
                <!-- /.models__gallery_col -->

            </div>
            <!-- /.models__gallery-wr -->
        </div>

    </section>


    <section id="events" class="news">
        <div class="container news__container"><h2 class="section-title news__section-title">News /<span> Events</span></h2>
            <div class="news__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="news__swiper-slide">
                            <div class="news__slider_img_wr">
                                <img class="news__slider_img" src="<?= get_template_directory_uri() ?>/img/events/odessa/odessa-img.jpg">
                            </div>
                            <span class="news__slider_title">Event in Odessa</span>
                            <div class="news__slider_desc">In sunny Ukrainian city &ndash; Odessa was held a unique event from Italian company &ndash; Etalonium Fashion Group.</div>
                            <a target="_blank" href="event-odessa.html" class="news__btn_red btn_red">More</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="news__swiper-slide">
                            <div class="news__slider_img_wr">
                                <img class="news__slider_img" src="<?= get_template_directory_uri() ?>/img/events/premier/premier-img.jpg">
                            </div>
                            <span class="news__slider_title">Event in Premier Palace</span>
                            <div class="news__slider_desc">Etalonium group organized 08.10 in Kiev, Ukraine, a press conference dedicated to the Italian IT platform.</div>
                            <a target="_blank" href="event-premier.html" class="news__btn_red btn_red">More</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="news__swiper-slide">
                            <div class="news__slider_img_wr"><img class="news__slider_img" src="<?= get_template_directory_uri() ?>/img/events/olerom/olerom-img.jpg"></div><span class="news__slider_title">Olerom Forum One</span>
                            <div class="news__slider_desc">Strategy of Etalonium is the natural growth of users. We hold events around the world, join the coll... </div><a target="_blank" href="event-olerom.html" class="news__btn_red btn_red" >More</a></div>
                    </div>


                    <div class="swiper-slide">
                        <div class="news__swiper-slide">
                            <div class="news__slider_img_wr"><img class="news__slider_img" src="<?= get_template_directory_uri() ?>/img/events/paris/paris-img.jpg"></div><span class="news__slider_title">Event in Paris</span>
                            <div class="news__slider_desc">30.11 A long-awaited presentation of the Etalonium IT-platform pre-alpha version took place at the Four Se... </div><a target="_blank" href="event-paris.html" class="news__btn_red btn_red" >More</a></div>
                    </div>




                </div>
            </div><!-- Navigation Btns-->
            <div class="swiper-button-prevs news__swiper-btns_nav news__swiper-btn_prev">
                <div class="swiper-btn-icon"><img class="swiper-icon" src="<?= get_template_directory_uri() ?>/img/icon-arrow.svg"></div>
                <div class="swiper-btn-text">Prev</div>
            </div>
            <div class="swiper-button-nexts news__swiper-btns_nav news__swiper-btn_next">
                <div class="swiper-btn-text">Next</div>
                <div class="swiper-btn-icon"><img class="swiper-icon" src="<?= get_template_directory_uri() ?>/img/icon-arrow.svg"></div>
            </div>
        </div>
    </section>

</main>

<!-- Model Gallery Modal -->
<div class="model-modal" id="modal-model">
    <div class="container model-modal__container">

        <div class="model-modal__arrow-left_wr" id="model-modal-prev">
            <div class="model-modal__arrow-left">
                <div class="swiper-btn-icon"><img class="swiper-icon" src="<?= get_template_directory_uri() ?>/img/icon-arrow.svg"></div>
                <div class="swiper-btn-text">Prev</div>
            </div>
        </div>
        <!-- end arrow left -->

        <div class="model-modal__content">

            <div class="problems__swiper-slide_modal_close" id="modal-model-close"></div>

            <div class="model-modal__img" id="model-modal-image"></div>

            <div class="model-modal__info">
                <h4 class="model-modal__title" id="model-modal-title"></h4>

                <div class="model-modal__params">
                    <div class="model-modal__age">
                        <div class="model-modal__age_icon">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="-49 141 512 431.7" style="enable-background:new -49 141 512 431.7;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#FF0000;}
</style>
                                <g>
                                    <path class="st0" d="M135.7,309.7c-16.9,0-30.6,13.7-30.6,30.6s13.7,30.6,30.6,30.6c16.9,0,30.6-13.7,30.6-30.6
		S152.6,309.7,135.7,309.7z M135.7,355.9c-8.6,0-15.6-7-15.6-15.6c0-8.6,7-15.6,15.6-15.6c8.6,0,15.6,7,15.6,15.6
		C151.3,348.9,144.3,355.9,135.7,355.9z"/>
                                    <path class="st0" d="M215.5,370.9c16.9,0,30.6-13.7,30.6-30.6s-13.7-30.6-30.6-30.6s-30.6,13.7-30.6,30.6S198.6,370.9,215.5,370.9z
		 M215.5,324.7c8.6,0,15.6,7,15.6,15.6s-7,15.6-15.6,15.6c-8.6,0-15.6-7-15.6-15.6S206.9,324.7,215.5,324.7z"/>
                                    <path class="st0" d="M295.2,370.9c16.9,0,30.6-13.7,30.6-30.6s-13.7-30.6-30.6-30.6s-30.6,13.7-30.6,30.6S278.3,370.9,295.2,370.9z
		 M295.2,324.7c8.6,0,15.6,7,15.6,15.6s-7,15.6-15.6,15.6c-8.6,0-15.6-7-15.6-15.6S286.6,324.7,295.2,324.7z"/>
                                    <path class="st0" d="M135.7,384.4c-16.9,0-30.6,13.7-30.6,30.6c0,16.9,13.7,30.6,30.6,30.6c16.9,0,30.6-13.7,30.6-30.6
		C166.3,398.1,152.6,384.4,135.7,384.4z M135.7,430.6c-8.6,0-15.6-7-15.6-15.6c0-8.6,7-15.6,15.6-15.6c8.6,0,15.6,7,15.6,15.6
		C151.3,423.6,144.3,430.6,135.7,430.6z"/>
                                    <path class="st0" d="M295.2,445.6c16.9,0,30.6-13.7,30.6-30.6c0-16.9-13.7-30.6-30.6-30.6s-30.6,13.7-30.6,30.6
		C264.6,431.8,278.3,445.6,295.2,445.6z M295.2,399.4c8.6,0,15.6,7,15.6,15.6c0,8.6-7,15.6-15.6,15.6c-8.6,0-15.6-7-15.6-15.6
		C279.6,406.4,286.6,399.4,295.2,399.4z"/>
                                    <path class="st0" d="M215.5,445.6c16.9,0,30.6-13.7,30.6-30.6c0-16.9-13.7-30.6-30.6-30.6s-30.6,13.7-30.6,30.6
		C184.9,431.8,198.6,445.6,215.5,445.6z M215.5,399.4c8.6,0,15.6,7,15.6,15.6c0,8.6-7,15.6-15.6,15.6c-8.6,0-15.6-7-15.6-15.6
		C199.9,406.4,206.9,399.4,215.5,399.4z"/>
                                    <path class="st0" d="M215.5,520.2c16.9,0,30.6-13.7,30.6-30.6S232.3,459,215.5,459s-30.6,13.7-30.6,30.6S198.6,520.2,215.5,520.2z
		 M215.5,474c8.6,0,15.6,7,15.6,15.6c0,8.6-7,15.6-15.6,15.6c-8.6,0-15.6-7-15.6-15.6C199.9,481,206.9,474,215.5,474z"/>
                                    <path class="st0" d="M135.7,459c-16.9,0-30.6,13.7-30.6,30.6s13.7,30.6,30.6,30.6c16.9,0,30.6-13.7,30.6-30.6S152.6,459,135.7,459z
		 M135.7,505.2c-8.6,0-15.6-7-15.6-15.6c0-8.6,7-15.6,15.6-15.6c8.6,0,15.6,7,15.6,15.6C151.3,498.2,144.3,505.2,135.7,505.2z"/>
                                    <path class="st0" d="M54.7,309.7c-16.9,0-30.6,13.7-30.6,30.6s13.7,30.6,30.6,30.6c16.9,0,30.6-13.7,30.6-30.6
		S71.6,309.7,54.7,309.7z M54.7,355.9c-8.6,0-15.6-7-15.6-15.6c0-8.6,7-15.6,15.6-15.6c8.6,0,15.6,7,15.6,15.6
		C70.3,348.9,63.3,355.9,54.7,355.9z"/>
                                    <path class="st0" d="M54.7,384.4c-16.9,0-30.6,13.7-30.6,30.6c0,16.9,13.7,30.6,30.6,30.6c16.9,0,30.6-13.7,30.6-30.6
		C85.3,398.1,71.6,384.4,54.7,384.4z M54.7,430.6c-8.6,0-15.6-7-15.6-15.6c0-8.6,7-15.6,15.6-15.6c8.6,0,15.6,7,15.6,15.6
		C70.3,423.6,63.3,430.6,54.7,430.6z"/>
                                    <path class="st0" d="M54.7,459c-16.9,0-30.6,13.7-30.6,30.6s13.7,30.6,30.6,30.6c16.9,0,30.6-13.7,30.6-30.6S71.6,459,54.7,459z
		 M54.7,505.2c-8.6,0-15.6-7-15.6-15.6c0-8.6,7-15.6,15.6-15.6c8.6,0,15.6,7,15.6,15.6C70.3,498.2,63.3,505.2,54.7,505.2z"/>
                                    <path class="st0" d="M462.6,522.9l-20.5-107.6c-0.8-4.1-4.7-6.7-8.8-6c-4.1,0.8-6.7,4.7-6,8.8l20.5,107.6c1.1,6-3.9,11.7-10.9,11.7
		H326l72-72c1.3-1.3,2.2-3.2,2.2-5.3V274.8l20.6,108.2c0.8,4.1,4.7,6.7,8.8,6c4.1-0.8,6.7-4.7,6-8.8l-35.4-186.1
		c-0.5-11.1-9.6-19.9-20.8-19.9h-65.7v-24.1c0-4.1-3.4-7.5-7.5-7.5c-4.1,0-7.5,3.4-7.5,7.5v24.1h-50.2v-24.1c0-4.1-3.4-7.5-7.5-7.5
		s-7.5,3.4-7.5,7.5v24.1h-50.2v-24.1c0-4.1-3.4-7.5-7.5-7.5s-7.5,3.4-7.5,7.5v24.1h-50.2v-24.1c0-4.1-3.4-7.5-7.5-7.5
		s-7.5,3.4-7.5,7.5v24.1H52.6v-24.1c0-4.1-3.4-7.5-7.5-7.5c-4.1,0-7.5,3.4-7.5,7.5v24.1h-65.7c-11.5,0-20.9,9.4-20.9,20.9v356.6
		c0,11.5,9.4,20.9,20.9,20.9h186.2c4.1,0,7.5-3.4,7.5-7.5s-3.4-7.5-7.5-7.5H-28.1c-3.2,0-5.9-2.6-5.9-5.9V271.7h419.2v181H301
		c-11.5,0-20.9,9.4-20.9,20.9v84.2h-87c-4.1,0-7.5,3.4-7.5,7.5c0,4.1,3.4,7.5,7.5,7.5h94.5c1.9,0,3.9-0.8,5.3-2.2l18.1-18.1h126
		C453.3,552.4,465.5,538.3,462.6,522.9z M-34,256.7v-61.5c0-3.2,2.6-5.9,5.9-5.9h65.7V223c0,4.1,3.4,7.5,7.5,7.5
		c4.1,0,7.5-3.4,7.5-7.5v-33.7h50.2V223c0,4.1,3.4,7.5,7.5,7.5s7.5-3.4,7.5-7.5v-33.7h50.2V223c0,4.1,3.4,7.5,7.5,7.5
		s7.5-3.4,7.5-7.5v-33.7h50.2V223c0,4.1,3.4,7.5,7.5,7.5s7.5-3.4,7.5-7.5v-33.7h50.2V223c0,4.1,3.4,7.5,7.5,7.5
		c4.1,0,7.5-3.4,7.5-7.5v-33.7h65.7c3.2,0,5.9,2.6,5.9,5.9v61.5H-34z M295.1,547.1v-73.6c0-3.2,2.6-5.9,5.9-5.9h73.6
		C367,475.1,302.6,539.6,295.1,547.1z"/>
                                </g>
</svg>
                        </div>
                        <span class="model-modal__age_text">Age: <span id="model-modal-age"></span></span>
                    </div>

                    <div class="model-modal__age">
                        <div class="model-modal__age_icon">
                            <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 28 103.8" style="enable-background:new 0 0 28 103.8;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#FF0000;}
</style>
                                <g>
                                    <path class="st0" d="M1.1,18.9C1.3,19,1.5,19,1.7,19c0.5,0,0.9-0.2,1.2-0.5c0.3-0.3,0.5-0.8,0.5-1.2c0-0.5-0.2-0.9-0.5-1.2
		l-0.3-0.2c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0c-0.5,0-0.9,0.2-1.2,0.5c-0.4,0.4-0.6,1-0.5,1.6
		C0.1,18.2,0.5,18.7,1.1,18.9z"/>
                                    <path class="st0" d="M24.5,0H3.5C1.5,0,0,1.6,0,3.5v6.9c0,1,0.8,1.7,1.7,1.7c1,0,1.7-0.8,1.7-1.7V3.5h21.1v5.2h-8
		c-1,0-1.7,0.8-1.7,1.7c0,1,0.8,1.7,1.7,1.7h8v3.5h-4c-1,0-1.7,0.8-1.7,1.7c0,1,0.8,1.7,1.7,1.7h4v3.5h-8c-1,0-1.7,0.8-1.7,1.7
		c0,1,0.8,1.7,1.7,1.7h8v3.5h-4c-1,0-1.7,0.8-1.7,1.7c0,1,0.8,1.7,1.7,1.7h4v3.5h-8c-1,0-1.7,0.8-1.7,1.7c0,1,0.8,1.7,1.7,1.7h8v3.5
		h-4c-1,0-1.7,0.8-1.7,1.7c0,1,0.8,1.7,1.7,1.7h4v3.5h-8c-1,0-1.7,0.8-1.7,1.7s0.8,1.7,1.7,1.7h8v3.5h-4c-1,0-1.7,0.8-1.7,1.7
		c0,1,0.8,1.7,1.7,1.7h4V64h-8c-1,0-1.7,0.8-1.7,1.7c0,1,0.8,1.7,1.7,1.7h8v3.5h-4c-1,0-1.7,0.8-1.7,1.7c0,1,0.8,1.7,1.7,1.7h4v3.5
		h-8c-1,0-1.7,0.8-1.7,1.7c0,1,0.8,1.7,1.7,1.7h8v3.5h-4c-1,0-1.7,0.8-1.7,1.7c0,1,0.8,1.7,1.7,1.7h4v3.5h-8c-1,0-1.7,0.8-1.7,1.7
		c0,1,0.8,1.7,1.7,1.7h8v5.2H3.5V24.2c0-1-0.8-1.7-1.7-1.7c-1,0-1.7,0.8-1.7,1.7v76.1c0,1.9,1.5,3.5,3.5,3.5h21.1
		c1.9,0,3.5-1.6,3.5-3.5V3.5C28,1.6,26.4,0,24.5,0z"/>
                                </g>
</svg>
                        </div>
                        <span class="model-modal__height_text">Height: <span id="model-modal-height"></span></span>
                    </div>

                    <div class="model-modal__age">
                        <div class="model-modal__age_icon">
                            <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 95 103.8" style="enable-background:new 0 0 95 103.8;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#FF0000;}
</style>
                                <g>
                                    <path class="st0" d="M85,80.7c-4.9-1.8-11.4-3.2-18.9-4c0.7-0.7,1.4-1.5,2.1-2.2c6.7-7.2,11.2-14.2,13.6-21.5
		c5.3-15.6,0.1-35-12.2-45C63.5,2.8,55.6,0,47.4,0c0,0,0,0,0,0c-8.2,0-16.1,2.8-22.3,7.9c-5.8,4.8-10.3,11.7-12.6,19.7
		c-2.3,7.8-2.3,16.1-0.1,23.3c2.9,9.6,9.2,18.1,16.6,25.7c-7.5,0.9-13.9,2.2-18.8,4C3.4,83.1,0,86.2,0,89.7c0,4.4,5,7.9,14.8,10.5
		c8.8,2.3,20.4,3.6,32.7,3.6s23.9-1.3,32.7-3.6c9.9-2.6,14.8-6.1,14.8-10.5C95.1,86.2,91.7,83.1,85,80.7L85,80.7z M16.4,28.7
		c2.1-7.2,6.1-13.4,11.2-17.7c5.5-4.5,12.5-7,19.7-7c7.2,0,14.2,2.5,19.7,7c5.3,4.4,9.4,11,11.4,18.6c2,7.5,1.8,15.3-0.5,22
		c-5.1,15.1-18.6,26.3-30.6,36.2C34.7,77.3,20.8,64.9,16.3,49.8C14.3,43.3,14.4,35.8,16.4,28.7L16.4,28.7z M79.2,96.3
		c-8.4,2.2-19.7,3.5-31.7,3.5c-12,0-23.2-1.2-31.7-3.5C6.6,93.8,4.1,91,4.1,89.7c0-2.7,9.1-7.5,28.6-9.3c4.1,3.9,8.3,7.5,12.5,10.9
		c1.7,1.4,2.7,1.4,4.4,0c4-3.3,8.4-7,12.7-10.9C81.9,82.2,91,87,91,89.7C91,91,88.5,93.8,79.2,96.3L79.2,96.3z M79.2,96.3"/>
                                    <path class="st0" d="M58.5,58.9c2.4-1.1,0.6-4.8-1.7-3.7c-2.9,1.4-6.2,2.1-9.2,2.1c-11.6,0-21-9.4-21-21c0-11.6,9.4-21,21-21
		s21,9.4,21,21c0,2.9-0.6,5.6-1.7,8.2c-1,2.4,2.7,4,3.8,1.6c1.3-3.1,2-6.4,2-9.8c0-13.8-11.2-25.1-25.1-25.1
		c-13.8,0-25.1,11.2-25.1,25.1c0,13.8,11.2,25.1,25.1,25.1C51.2,61.4,55,60.5,58.5,58.9L58.5,58.9z M58.5,58.9"/>
                                    <path class="st0" d="M64.3,50c-1.1,0-2,0.9-2,2c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2C66.4,51,65.5,50,64.3,50L64.3,50z M64.3,50"/>
                                </g>
</svg>
                        </div>
                        <span class="model-modal__location_text">Location: <span id="model-modal-location"></span></span>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.model-modal__content -->


        <div class="model-modal__arrow-right_wr" id="model-modal-next">
            <div class="model-modal__arrow-right">
                <div class="swiper-btn-text">Next</div>
                <div class="swiper-btn-icon"><img class="swiper-icon" src="<?= get_template_directory_uri() ?>/img/icon-arrow.svg"></div>
            </div>
        </div>
        <!-- end arrow right -->

    </div>
</div>
<!-- /.model-modal -->

<!-- Model Modal Preloader -->
<div class="model-modal__preloader" id="model-modal-preloader">
    <img src="<?= get_template_directory_uri() ?>/img/loader.svg">
</div>

<?php get_footer() ?>