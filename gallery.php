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
          <div class="gallery__pics">


        


          <?php if( get_field('gallery_photo_album') ): ?>
                  <?php while( the_repeater_field('gallery_photo_album') ): ?>

                <div class="gallery__pics__item">
                    <div class="imageContainer">

                    <?php 

                        $images = get_sub_field('photos');

                        if($images):
                        ?>


                    <?php foreach($images as $image):?>
                    <a data-lightbox="<?php echo get_the_title() ?>" href="<?php echo esc_url($image['sizes']['large']); ?>">
                        <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                                alt="<?php echo the_sub_field('photo_album_name'); ?>-<?php echo $image['name'] ?>" 
                                
                            >
                    </a>
                    <?php endforeach; ?>          
                    <?php endif; ?>  
                    </div>

                    <h3><?php echo the_sub_field('photo_album_name'); ?></h3>
                    <p><?php echo the_sub_field('album_desc')  ?></p>
                </div>

                      
           <?php endwhile; ?>
        <?php endif; ?>

          
          </div>
          <a href="" class="gallery btn bg--light">Load More</a>


          <div class="gallery__vids">

            <div class="gallery__vids__title">
              <h2>Videos & Events</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                facere, accusamus vitae quo itaque repellat quas a perferendis
                cumque enim sapiente, voluptate ducimus provident fuga!
              </p>
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