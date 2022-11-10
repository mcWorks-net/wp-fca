<?php

/**
 * Template Name: Services
 */

?>

<?php get_header(); ?>


<section class="services__title">
      <h1>Other Services</h1>
</section>

    <section class="services">
      <div class="container">
        <div class="services__wrapper">


          <?php the_content(); ?>

          <div class="services__kinds">


          <?php 
                $args = array(
                'post_type' => 'services',
                'posts_per_page' => -1,
                );
                $newQuery = new WP_Query($args)
            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

            <div class="services__item">
              <div class="services__item__content">
                <?php echo get_the_post_thumbnail()?>
                <div class="services__item__content__text">
                  <h3><i class="<?php echo get_field('icon'); ?>"></i><?php echo the_title(); ?></h3>
                  <p>
                    <?php echo get_field('description'); ?>
                  </p>
                  <a href="" class="btn bg--green">Inquire</a>
                </div>
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
      </div>
    </section>

    <section class="contribute">
      <div class="container">
        <div class="contribute__wrapper">
          <h3>Contribute to our Programs & Projects</h3>
          <p>
            Your giving allows us to continue to actively partner with needs of
            people in the communities we serve.
          </p>
          <a href="" class="btn bg--primary">Give</a>
        </div>
      </div>
    </section>

    <div class="modalInquire">
      <div class="container">
          <div class="modalInquire__modal">
             <div class="modalCloseBtn">
              <a href=""><b>X</b></a>
             </div>
             <div class="modalInqure_form">
                <div class="InqureTitle">
                  <h3>This is the subject title</h3>
                </div>
                <form action="">

                  <div class="inputGroup">
                    <input type="text" required> 
                    <label for="">Grade Level</label> 
                  </div>
                 
                  <div class="inputGroup">
                    <input type="text" required>
                    <label for="">Full Name</label> 
                  </div>

                  <div class="inputGroup">
                    <input type="text" required>
                    <label for="">Email</label> 
                  </div>

                  <div class="inputGroup">
                    <input type="text" required> 
                    <label for="">Mobile Number</label>
                  </div>

                  <div class="inputGroup">
                    <textarea required></textarea> 
                    <label for="">Message</label> 
                  </div>



                 <a href="" class="btn bg--green">Send Inquery</a>
                </form>
            </div>
          </div>
      </div>
    </div>

<?php get_footer(); ?>