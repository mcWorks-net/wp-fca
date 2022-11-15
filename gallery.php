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
          


          <?php echo do_shortcode('[ajax_load_more post_type="page"]'); ?>
        

          
          
          <!-- <a href="" class="gallery btn bg--light">Load More</a> -->


          <div class="gallery__vids">

            <div class="gallery__vids__title">
              <h2>Videos & Events</h2>
            </div>


            
            <div class="gallery__vids__collection">

            
              <div class="gallery__vids__collection__item">
                <img src="./img/11111.png" alt="" />
                <h3>Event Video</h3>
                <p>Lorem ipsum dolor sit amet.</p>
              </div>

              
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