<?php

/**
 * Template Name: Gallery
 */

?>

<?php get_header(); ?>

<section class="gallery__title">
      <h1>Gallery</h1>
    </section>

    <section class="gallery">
      <div class="container">
        <div class="gallery__wrapper">
          


          <?php echo do_shortcode('[ajax_load_more post_type="page" offset="6"]'); ?>
        


          <!-- <a href="" class="gallery btn bg--light">Load More</a> -->


          <div class="gallery__vids">

            <div class="gallery__vids__title">
              <h2>Videos & Events</h2>
            </div>


            
            <div class="gallery__vids__collection">

              <?php if( get_field('video_gallery') ): ?>
                    <?php while( the_repeater_field('video_gallery') ): ?>
              
                <div class="gallery__vids__collection__item">
                <iframe width="417" height="362" src="<?php the_sub_field('video_link') ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <h3><?php echo the_sub_field('video_title'); ?></h3>
                  <p><?php echo the_sub_field('video_description'); ?></p>
                </div>

                <?php endwhile; ?>
              <?php endif; ?>
              
             
            </div>

          </div>
          <a href="" class="gallery btn bg--light">Load More</a>
        </div>
      </div>
    </section>

    <?php

    include('contribute.php')

    ?>


<?php get_footer(); ?>