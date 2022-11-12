<?php
get_header('main');
?>
  <main class="page-main">
  <section class="hero">
  <video src="/files/video.mp4" playsinline mooted autoplay loop></video>
  <div class="container">
    <h1 class="hero__title">
      New QAMARI <br>
      Collection
    </h1>
    <div class="hero__links container">
      <a href="#">
        enter the autumn shop
        <svg width="240" height="16" viewBox="0 0 240 16" fill="none">
          <path d="M0.292877 8.70713C-0.097641 8.3166 -0.097641 7.68344 0.292877 7.29291L6.65684 0.928953C7.04736 0.538428 7.68053 0.538428 8.07106 0.928952C8.46158 1.31948 8.46158 1.95264 8.07106 2.34317L2.4142 8.00002L8.07106 13.6569C8.46158 14.0474 8.46158 14.6806 8.07106 15.0711C7.68053 15.4616 7.04736 15.4616 6.65685 15.0711L0.292877 8.70713ZM240 9L0.999985 9.00002L0.999985 7.00002L240 7L240 9Z" fill="white"/>
        </svg>
      </a>
      <a href="#">
        enter the autumn shop
        <svg width="240" height="16" viewBox="0 0 240 16" fill="none">
          <path d="M239.707 8.70713C240.098 8.3166 240.098 7.68344 239.707 7.29291L233.343 0.928953C232.953 0.538428 232.319 0.538428 231.929 0.928952C231.538 1.31948 231.538 1.95264 231.929 2.34317L237.586 8.00002L231.929 13.6569C231.538 14.0474 231.538 14.6806 231.929 15.0711C232.319 15.4616 232.953 15.4616 233.343 15.0711L239.707 8.70713ZM-8.74228e-08 9L239 9.00002L239 7.00002L8.74228e-08 7L-8.74228e-08 9Z" fill="white"/>
        </svg>
      </a>
    </div>
  </div>
</section>

  <section class="products">
  <div class="container">
    <strong class="subtitle tac">
      in for the season
    </strong>
    <h2 class="mb48 mt8 tac">
      get fall ready
    </h2>
    <div class="products__grid">

    <?php
        // параметры по умолчанию
            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category'    => 0,
                'orderby'     => 'date',
                'order'       => 'ASC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'products',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            global $post;

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                    ?>
                    <article class="product">
                      <a href="#" class="product__link"></a>
                      <div class="product__image product__image--440">
                        <img class="product__image-default" src="<?php echo get_the_post_thumbnail_url( ); ?>" alt="product">

                        <button class="product__btn btn-reset">
                          Quick view
                        </button>
                      </div>
                      <h3>
                        <?php the_title(); ?>
                      </h3>
                      <p>
                        <?php the_content(); ?>
                      </p>
                    </article>
                    <?php
                // формат вывода the_title() ...
            }

            wp_reset_postdata(); // сброс 
        ?>
      
      
    </div>
    <a href="#" class="btn products__all">
      SHOP ALL PRODUCTS
    </a>
  </div>
</section>

  <section class="get">
  <div class="container">
    <div class="top">
      <div class="top__text">
        <h2>get fall ready</h2>
        <strong class="subtitle">your one-stop destination for all of your modest fashion needs</strong>
      </div>
      <div class="top__arrows">
        <div class="swiper-button-prev">
          <svg width="53" height="22" viewBox="0 0 53 22" fill="none">
            <path d="M53 11L3 11" stroke="black" stroke-width="2"/>
            <path d="M11 1L2 11L11 21" stroke="black" stroke-width="2"/>
          </svg>
        </div>
        <div class="swiper-button-next">
          <svg width="53" height="22" viewBox="0 0 53 22" fill="none">
            <path d="M0 11L50 11" stroke="black" stroke-width="2"/>
            <path d="M42 1L51 11L42 21" stroke="black" stroke-width="2"/>
          </svg>
        </div>
      </div>
    </div>
    <div class="edgeSlider edge-slider swiper">
      <div class="swiper-wrapper">
        <?php
        // параметры по умолчанию
            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category'    => 0,
                'orderby'     => 'date',
                'order'       => 'ASC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'carousel',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            global $post;

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                    ?>
                        <div class="swiper-slide get__slide">
                        <a href="#" class="get-item link-reset">
                            <h2>
                            <?php the_title(); ?>
                            </h2>
                            <img src="<?php echo get_the_post_thumbnail_url( ); ?>" alt="models">
                        </a>
                        </div>
                    <?php
                // формат вывода the_title() ...
            }

            wp_reset_postdata(); // сброс 
        ?>
      </div>
    </div>
  </div>
</section>

  <section class="modest">
  <div class="container">
    <strong class="subtitle tac">
      Modest wear made for every woman.
    </strong>
    <h2 class="mb48 mt8 tac">
      Modesty designed for every woman, everywhere.
    </h2>

  </div>
  <div class="modest__grid">
    <a href="#" class="modest-item link-reset">
      <img src="<? bloginfo('template_url') ?>/assets/img/m1.jpg" alt="in love with lounge">
      <h2>
        in love with lounge
      </h2>
    </a>
    <a href="#" class="modest-item link-reset">
      <img src="<? bloginfo('template_url') ?>/assets/img/m2.jpg" alt="fall dress guide">
      <h2>
        fall dress guide
      </h2>
    </a>
  </div>
</section>

  <section class="clothing">
  <div class="container">
    <div class="clothing-content">
      <div class="clothing__about">
        <h2 class="clothing__about-title">We like our clothing & hijabs made
          beautifully - just like you.</h2>
        <p class="clothing__about-text">This is fashion done slow - the way it should be. From design to manufacturing our top priority is quality and conscious production.</p>
        <button type="button" class="btn">Learn more</button>
      </div>
      <div class="clothing__image">
        <img src="<? bloginfo('template_url') ?>/assets/img/clothing-img.jpg" alt="models">
      </div>
    </div>
  </div>
</section>
  <section class="arrival">
  <div class="container">
    <strong class="subtitle tac">
      NEW ARRIVALS
    </strong>
    <h2 class="mb48 mt8 tac">
      Latest & Greatest
    </h2>
    <div class="arrival__grid">
      
        <article class="product">
          <a href="#" class="product__link"></a>
          <div class="product__status">
            NEW COLLECTION
          </div>
          <div class="product__image product__image--440">
            <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
            <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
            <button class="product__btn btn-reset">
              Quick view
            </button>
          </div>
          <h3>
            Oameal Knite Ribbred top
          </h3>
          <p>
            991 000 UZS
          </p>
        </article>
      
        <article class="product">
          <a href="#" class="product__link"></a>
          <div class="product__status">
            NEW COLLECTION
          </div>
          <div class="product__image product__image--440">
            <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
            <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
            <button class="product__btn btn-reset">
              Quick view
            </button>
          </div>
          <h3>
            Oameal Knite Ribbred top
          </h3>
          <p>
            991 000 UZS
          </p>
        </article>
      
        <article class="product">
          <a href="#" class="product__link"></a>
          <div class="product__status">
            NEW COLLECTION
          </div>
          <div class="product__image product__image--440">
            <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
            <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
            <button class="product__btn btn-reset">
              Quick view
            </button>
          </div>
          <h3>
            Oameal Knite Ribbred top
          </h3>
          <p>
            991 000 UZS
          </p>
        </article>
      
    </div>
  </div>
</section>

  <section class="explore dataFilterWrap">
  <div class="container">
    <div class="explore__wrap">
      <div class="explore__top top">
        <div class="top__btns">
          <button class="btn-reset active" type="button" data-filter="essential">
            essential
          </button>
          <button class="btn-reset" type="button" data-filter="lite">
            lite
          </button>
          <button class="btn-reset" type="button" data-filter="premium">
            premium
          </button>
          <div class="top__bar"></div>
        </div>
        <div class="top__arrows">
          <div class="swiper-button-prev">
            <svg width="53" height="22" viewBox="0 0 53 22" fill="none">
              <path d="M53 11L3 11" stroke="black" stroke-width="2"/>
              <path d="M11 1L2 11L11 21" stroke="black" stroke-width="2"/>
            </svg>
          </div>
          <div class="swiper-button-next">
            <svg width="53" height="22" viewBox="0 0 53 22" fill="none">
              <path d="M0 11L50 11" stroke="black" stroke-width="2"/>
              <path d="M42 1L51 11L42 21" stroke="black" stroke-width="2"/>
            </svg>
          </div>
        </div>
      </div>
    </div>

    <div class="explore__content">
      <div class="explore__item active" data-filter-item="essential">
        <strong class="subtitle tac">
          EXPLORE OUR BEST SELLING
        </strong>
        <h2 class="mb48 mt8 tac">
          Chiffon Hijabs
        </h2>
        <div class="explore__slider exploreSlider swiper">
          <div class="swiper-wrapper">
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
            </div>
        </div>
      </div>
      <div class="explore__item" data-filter-item="lite">
        <strong class="subtitle tac">
          EXPLORE OUR BEST SELLING
        </strong>
        <h2 class="mb48 mt8 tac">
          Chiffon Hijabs
        </h2>
        <div class="explore__slider exploreSlider swiper">
          <div class="swiper-wrapper">
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
            </div>
        </div>
      </div>
      <div class="explore__item" data-filter-item="premium">
        <strong class="subtitle tac">
          EXPLORE OUR BEST SELLING
        </strong>
        <h2 class="mb48 mt8 tac">
          Chiffon Hijabs
        </h2>
        <div class="explore__slider exploreSlider swiper">
          <div class="swiper-wrapper">
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
              <div class="swiper-slide">
                <article class="product">
                  <a href="#" class="product__link"></a>
                  <div class="product__image product__image--440">
                    <img class="product__image-default" src="<? bloginfo('template_url') ?>/assets/img/product.jpg" alt="product">
                    <img class="product__image-zoom" src="<? bloginfo('template_url') ?>/assets/img/product-zoom.jpg" alt="product">
                    <button class="product__btn btn-reset">
                      Quick view
                    </button>
                  </div>
                  <h3>
                    Oameal Knite Ribbred top
                  </h3>
                  <p>
                    991 000 UZS
                  </p>
                </article>
              </div>
            
            </div>
        </div>
      </div>
    </div>

  </div>
</section>

  <section class="commentaries">
  <div class="container">
    <div class="top">
      <div class="commentaries-title">
        <p>JOIN THE VEILED COMMUNITY</p>
        <h2>What our customers are saying</h2>
      </div>

      <div class="top__arrows">
        <div class="swiper-button-prev">
          <svg width="53" height="22" viewBox="0 0 53 22" fill="none">
            <path d="M53 11L3 11" stroke="black" stroke-width="2"/>
            <path d="M11 1L2 11L11 21" stroke="black" stroke-width="2"/>
          </svg>
        </div>
        <div class="swiper-button-next">
          <svg width="53" height="22" viewBox="0 0 53 22" fill="none">
            <path d="M0 11L50 11" stroke="black" stroke-width="2"/>
            <path d="M42 1L51 11L42 21" stroke="black" stroke-width="2"/>
          </svg>
        </div>
      </div>
    </div>
    <div class="swiper comentSlider">
      <div class="swiper-wrapper">
        <div class="commentaries-content swiper-slide">
          <div class="commentaries-message">
            <svg width="145" height="114" viewBox="0 0 145 114" fill="none" data-swiper-parallax-x="-100">
              <g opacity="0.1" clip-path="url(#clip0_302_7399)">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0 59.5222V0H59.7285V59.5222L28.7502 114H1.41698L31.1822 59.5222H0ZM85.2715 59.5222V0H145V59.5222L114.022 114H86.6885L116.452 59.5222H85.2715Z" fill="black"/>
              </g>
              <defs>
              <clipPath id="clip0_302_7399">
              <rect width="145" height="114" fill="white"/>
              </clipPath>
              </defs>
              </svg>
            
            <div class="commentaries-pl">
              <p data-swiper-parallax-x="-150">Fast shipping, and the product order waf beyond my expectations! You have a repeat customer here. Thank you for great quality with exceptional pricing.</p>
              <span class="message-sender" data-swiper-parallax-x="-200">Sebrina W.</span>
            </div>
    
          </div>
          <div class="commentaries-image" data-swiper-parallax-x="-250">
            <img src="<? bloginfo('template_url') ?>/assets/img/commentaries-img.jpg" alt="commentaries image">
          </div>
        </div>
        <div class="commentaries-content swiper-slide">
          <div class="commentaries-message">
            <svg width="145" height="114" viewBox="0 0 145 114" fill="none" data-swiper-parallax-x="-100">
              <g opacity="0.1" clip-path="url(#clip0_302_7399)">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0 59.5222V0H59.7285V59.5222L28.7502 114H1.41698L31.1822 59.5222H0ZM85.2715 59.5222V0H145V59.5222L114.022 114H86.6885L116.452 59.5222H85.2715Z" fill="black"/>
              </g>
              <defs>
              <clipPath id="clip0_302_7399">
              <rect width="145" height="114" fill="white"/>
              </clipPath>
              </defs>
              </svg>
            
            <div class="commentaries-pl">
              <p data-swiper-parallax-x="-150">Fast shipping, and the product order waf beyond my expectations! You have a repeat customer here. Thank you for great quality with exceptional pricing.</p>
              <span class="message-sender" data-swiper-parallax-x="-200">Sebrina W.</span>
            </div>
    
          </div>
          <div class="commentaries-image" data-swiper-parallax-x="-250">
            <img src="<? bloginfo('template_url') ?>/assets/img/commentaries-img.jpg" alt="commentaries image">
          </div>
        </div>
      </div>
    </div>

  </div>


</section>

<div class="white">
  
</div>
</main>

<?php
get_footer();
?>