<?php

/**
 * Template Name: Home Page
 */

?>

<?php get_header()?>

    <section class="banner">
      <div class="dimVideo">
         <video muted loop autoplay>
        <source src="<?php echo get_template_directory_uri() ?>./img/fca-banner-video.mp4" />
      </video>
      </div>
      <div class="container">
        <div class="banner__wrapper">
          <div class="banner__text">
            <h1><?php echo get_field('banner_title'); ?></h1>
            <p>
            <?php echo get_field('banner_intro'); ?>
            </p>
            <a href="<?php echo site_url('contact') ?>" class="btn bg--green">Inquire now!</a>
            <a href="<?php echo site_url('contact') ?>" class="btn bg--transparent">Schedule a Visit</a>
          </div>
        </div>
      </div>
    </section>

    <section class="glevel">
      <div class="container">
        <div class="glevel__wrapper">

            <?php 
                $args = array(
                'post_type' => 'admission',
                'posts_per_page' => -1,
                );
                $newQuery = new WP_Query($args)
            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
 
          
              <div id="general-1" class="glevel__item">
                <div class="glevel__item__content active">
                  <?php

                  $theTitle = get_field('id');

                  $site_Url = add_query_arg($theTitle,' ','admission');
                  
                  ?>
                  <a href="<?php 
                  
                  

                 echo $site_Url
                  
                  ?>">
                    <i class="<?php echo get_field('icon_class') ?>"></i>
                    <h3><?php the_title() ?></h3>
                    <p><?php echo get_field('subtitle_description') ?></p>
                  </a>
                </div>
              </div>
        

          <?php
                endwhile;
                else :
                    echo "no available content yet";
                endif;
                wp_reset_postdata();
          ?>


        </div>
      </div>
    </section>

    <section class="why">
      <div class="container">
        <div class="why__container">
          <div class="why__title">
            <h3>Why Choose Us?</h3>
            <div class="why__text">


                <ul>

                <?php if( get_field('why_choose_us') ): ?>
                  <?php while( the_repeater_field('why_choose_us') ): ?>

          
                  <li id="rdbtn-<?php the_sub_field('id');  ?>" class="rdbtn__text">
                    <h2><?php the_sub_field('title');  ?></h2>
                    <p><?php the_sub_field('subtitle');  ?></p>
                    <span id="rdbtn-<?php the_sub_field('id'); ?>-btn" class="rdbtn__btn"></span>
                  </li>

                    <?php endwhile; ?>
                  <?php endif; ?>
                </ul>


            </div>


            <?php if( get_field('why_choose_us') ): ?>
                  <?php while( the_repeater_field('why_choose_us') ): ?>

            <div
              id="rdbtn-<?php the_sub_field('id') ?>-content"
              class="why__text__content  noborder"
            >
              <video
                class="why__fca"
                src="<?php the_sub_field('video') ?>"
                autoplay
                muted
                loop
                controls
              ></video>
              <?php the_sub_field('text_content') ?>
            </div>
            

            <?php endwhile; ?>
          <?php endif; ?>
          
          </div>
        </div>
      </div>
    </section>

  

    <section class="testimony">
      <div class="container">
      
          
          <div class="my-slider">

            <?php 
                $args = array(
                'post_type' => 'testimonial',
                'posts_per_page' => 3,
                );
                $newQuery = new WP_Query($args)
            ?>


            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

            <div id="testbtn-1-content" class="testimony__item">
              <div class="testimony__text">
                <p class="wQoute">
                  <?php the_content();?>
                </p>
                <div class="testimony__text__author">
                  <?php echo get_the_post_thumbnail()?>
                  <div class="testimony__text__author__desc">
                    <h4><?php the_title(); ?></h4>
                    <?php echo get_field('occupation'); ?>
                  </div>
                </div>
              </div>
              <div class="testimony__img">
                <?php 

                  $images = get_field('gallery');
                
                  if($images):
                ?>

                <figure>
                  <?php foreach($images as $image):?>
                    <a data-lightbox="<?php echo get_the_title() ?>" href="<?php echo esc_url($image['sizes']['large']); ?>">
                        <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                              alt="Testimony-<?php echo $activities_index ?>" 
                              height="<?php echo substr(esc_url($image['height']),7);?>px"
                              width="<?php echo substr(esc_url($image['width']),7); ?>px"
                          >
                    </a>
                    <?php endforeach; ?>          
                  <?php endif; ?>
                </figure>
                
              </div>
            </div>
  
            
            <?php
                endwhile;
                else :
                    echo "no available content yet";
                endif;
                wp_reset_postdata();
            ?>

          </div>
      </div>
    </section>

    <?php the_content(); ?>


    <section class="location">
      <div class="location__wrapper">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe
              id="gmap_canvas"
              src="https://maps.google.com/maps?q=frontline%20christian%20academy&t=&z=13&ie=UTF8&iwloc=&output=embed"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
            ></iframe
            ><a href="https://www.whatismyip-address.com/divi-discount/"
              >divi discount</a
            ><br /><style>
              .mapouter {
                position: relative;
                text-align: right;
              }</style
            ><a href="https://www.embedgooglemap.net">google map in website</a
            ><style>
              /* .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 500px;
                width: 2000px;
              } */
            </style>
          </div>
        </div>
      </div>
    </section>

<?php get_footer()?>