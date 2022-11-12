<?php get_header() ?>

<?php 
/* Template Name: about */
?>

<style type="text/css">
  </style>
<main class="page-main">
  <section class="about">
    <div class="container">
      <h2 class="tac">
        <?php the_title(); ?>
      </h2>
      <strong class="subtitle mt8 tac">
        <?php echo get_post_meta(get_the_id(), 'descr', true); ?>
      </strong>


    </div>
  </section>
  <section class="clothing">
    <div class="container">
      <div class="clothing-content">
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
                'post_type'   => 'about',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            global $post;

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                    ?>
                    <div class="clothing__about">
                    <h2 class="clothing__about-title">
                        <?php the_title(); ?>
                    </h2>
                    <div class="clothing__about-group">
                        <p class="clothing__about-text">
                            <?php the_content(); ?>
                        </p>
                    </div>
                    <button type="button" class="btn">Learn more</button>
                    </div>
                    <div class="clothing__image">
                    <img src="<?php echo get_the_post_thumbnail_url( ); ?>" alt="models">
                    </div>
                    </div>
                    <?php
                // формат вывода the_title() ...
            }

            wp_reset_postdata(); // сброс 
        ?>
        </div>
    </div>
  </section>
  <section class="clothing clothing--2">
    <div class="container">
      <div class="clothing-content">
        <div class="clothing__image clothing__image--2">
          <img src="<? bloginfo('template_url') ?>/assets/img/about2.jpg" alt="models">
        </div>
        <div class="clothing__about">
          <h2 class="clothing__about-title">
            Designed in New York.
          </h2>
          <p class="clothing__about-text">
            Everything starts in our design studio in the <br>
            fashion capital of the world - New York. From <br>
            research & design to garment fittings, our <br>
            team spends months designing and perfecting <br>
            our products until they finally land on our <br>
            site, and at your door.
          </p>

          <button type="button" class="btn">Learn more</button>
        </div>
      </div>
    </div>
  </section>
  <div class="design">
    <div class="container">
      <img src="<? bloginfo('template_url') ?>/assets/img/design.jpg" alt="desing" class="design__img">
      <div class="design__box">
        <h2>
          Designed in New York.
        </h2>
        <p>
          Everything starts in our design studio in the fashion capital of the world - New York. From research & design to garment fittings, our team spends months designing and perfecting our products until they finally land on our site, and at your door.
        </p>
      </div>
    </div>
  </div>
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

</main>

<?php get_footer() ?>