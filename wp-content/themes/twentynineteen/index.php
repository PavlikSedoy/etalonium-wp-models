<?php get_header() ?>

<main class="page-wrap">


    <section class="about" id="about">
        <div id="particles-js-about1"></div>
        <div id="particles-js-about2"></div>
        <div id="particles-js-about3"></div>
        <div class="container about__container">
            <div class="col-xs-12 col-sm-6 about__row" data-aos="fade-up" data-aos-offset="200" data-aos-duration="750"><h2 class="about__title section-title">About project</h2>
                <article class="about__etalonium"><img class="about__big-letter" src="<?= get_template_directory_uri() ?>/img/e@1X.png" srcset="img/e@2X.png 2x, img/e@3X.png 3x">
                    <p class="about__paragraph"><span class="about__paragraph_first-letter">&rsquo;talonium</span>- a unique stock of model business traffic and a decentralized online platform in the world of fashion.<br>A revolutionary social lift with an integrated platform for selling services - model&rsquo;s contracts, designers, agents and other talents in the fashion industry.</p>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6 about__row" data-aos="fade-up" data-aos-offset="500" data-aos-duration="750">
                <article class="about__mission">
                    <div class="about__mission_text"><img class="about__big-letter" src="<?= get_template_directory_uri() ?>/img/M@1X.png" srcset="img/M@2X.png 2x, img/M@3X.png 3x">
                        <p class="about__paragraph-mission"><span class="about__paragraph_first-letter">ission:</span>To build a new, protected fashion industry and create a non-corrupt way to develop one&ldquo;s dream of success and fame.</p>
                    </div>
                </article>
                <article class="about__etalonium-coin"><img class="about__big-letter" src="<?= get_template_directory_uri() ?>/img/e@1X.png" srcset="img/e@2X.png 2x, img/e@3X.png 3x">
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

<?php get_footer() ?>