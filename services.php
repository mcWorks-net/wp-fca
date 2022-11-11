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
                  <a href="" id="btnInquire" class="btn bg--green btnInquire" data-inquire="<?php echo the_title(); ?>">Inquire</a>
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

    <?php

      include('contribute.php')
    
    ?>

    <div class="modalInquire">
          <div class="modalInquire__modal">
             <div class="modalCloseBtn" id="modalCLose">
              <a href="#"><b>X</b></a>
             </div>
             <div class="modalInqure_form">
                <div class="InqureTitle">
                  <h3 id="inqureTitle" class="mb--4">This is the subject title</h3>
                </div>
                <form action="">

                  <?php echo do_shortcode('[contact-form-7 id="237" title="Inquiry"]') ?>

                </form>
            </div>
      </div>
    </div>


    <script>
      const btnInquire = document.querySelectorAll(".btnInquire");
      const displayModal = document.querySelector(".modalInquire");
      const modalCLose = document.querySelector("#modalCLose");
      const hiddenInput = document.getElementById("hiddenInput");

      const inquireTitle = document.getElementById('inqureTitle');

      btnInquire.forEach((btn)=> {
        btn.addEventListener('click', (e)=> {
          e.preventDefault();
          displayModal.classList.add('active');

          inquireTitle.innerText = "Inquire for " + btn.getAttribute('data-inquire');
          hiddenInput.value = btn.getAttribute('data-inquire');

        })
      })

      modalCLose.addEventListener('click', (e) => {
        e.preventDefault();
        displayModal.classList.remove('active');
      })

      window.addEventListener('click', (e)=> {
        console.log(e.target)
        if(e.target.classList.contains('modalInquire')) {
          displayModal.classList.remove('active');
        }
      })


      
    </script>

<?php get_footer(); ?>