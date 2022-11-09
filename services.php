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
          <div class="services__regular">
        
            <div class="services__regular__text">
              <h3>Regular Instructional Services:</h3>
              <p>
                FCA offers instructional and educational services throughout the
                school year, which is currently from August to June. The
                curriculum followed is the K-12 Basic Education Curriculum,
                utilizing textbooks from the USA, as well as those from local
                Philippine publishers. FCA focuses on building academic
                excellence and character, believing that the kind of people our
                children become is more important than how academically smart
                they are.
              </p>
              <p>
                One of our key focus areas is Social Emotional Learning (in
                partnership with a US Youth Leadership organization: “Growing
                Leaders”), mentoring, and leadership development. We believe
                this is something that our young people need, especially in such
                challenging and unprecedented global times. We prioritize the
                holistic development and wellbeing of our students, their
                families, and our staff and faculty, providing periodic group
                counseling sessions for parents and students with a
                PRC-registered Guidance Counselor.
              </p>
              <p>
                We provide parent support through our regular Parenting Peer
                Groups, which are bi-monthly gatherings (online/virtual if
                in-person is not possible) of small groups of parents to provide
                moral and academic support to one another. FCA accepts students
                from diverse backgrounds, religions, and walks of life. Our
                primary language used for teaching and communication is the
                English language, except for the subjects of Filipino, Araling
                Panlipunan, and certain topics under Home Economics and
                Livelihood Education/Technology and Livelihood Education.
              </p>
            </div>
            <img src="./img/Rectangle 53.png" alt="" />
          </div>

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

<?php get_footer(); ?>