<?php

/**
 * Template Name: About
 */

?>

<?php get_header(); ?>



<section class="abt-banner">
      <h1>About Us</h1>
    </section>


    <section class="abt-tab">
      <div class="container">
        <div class="abt-tab__wrapper">

          <div class="abt-tab__nav">
            <ul>

            <?php if( get_field('the_content') ): ?>
                <?php while( the_repeater_field('the_content') ): ?>

                    <li id="abt-<?php the_sub_field('the_id'); ?>" class="abt__nav__link"><?php the_sub_field('title'); ?></li>

                  
                  <?php endwhile; ?>
                  <?php endif; ?>

            </ul>
          </div>

          <div class="abt-tab__content">


            <?php if( get_field('the_content') ): ?>
              <?php while( the_repeater_field('the_content')): ?>

                   
              <div id="abt-<?php the_sub_field('the_id'); ?>-content" class="abt-tab__item">
                <div class="abt-tab__item__img active">
                  <img src="./img/founders.png" alt="" />
                </div>
              
                <?php the_sub_field('content'); ?>

                <div class="abt-tab__item__img">

                <?php 
                   
                    $images = get_sub_field('gallery_about');

                    if($images):
                     
                    ?>

                    <?php foreach($images as $image):?>
                      <a data-lightbox="<?php echo the_sub_field('title') ?>" href="<?php echo esc_url($image['sizes']['large']); ?>">
                      <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                                alt ="<?php echo $image['alt'] ?>"
                                height="<?php echo substr(esc_url($image['height']),7);?>px"
                                width="<?php echo substr(esc_url($image['width']),7); ?>px"
                            >
                      </a>
                    <?php endforeach; ?>          
                  <?php endif; ?>

                </div>
              </div>


             <?php endwhile; ?>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </section>

    <!-- <section class="news">
      <div class="container">
        <div class="news__wrapper">
          <div class="news__text">
            <h3>Latest News and Current Events</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque
              ullam asperiores, rem itaque voluptatibus quod nemo totam labore
              sunt? Molestiae vel quos odio quae iste voluptate tempora
              repudiandae officiis! Officiis.
            </p>
            <a href="" class="btn bg--transparent">View All</a>
          </div>
          <div class="news__content">
            <div id="news-1-content" class="news__content__batch active">
              <div class="news__item">
                <img src="./img/events1.jpg" alt="" />
                <h4>PLAYSCHOOL – PLAY AND LEARN WITH US!</h4>
                <p>
                  Students learn communication skills, personal responsibility,
                  real-life skills, creativity, music, and have nature
                  experiences as the explore plants and trees… and even do some
                  planting themselves!
                </p>
                <a href="">
                  <span>Read </span>
                  <span>more</span>
                  <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
              <div class="news__item">
                <img src="./img/events2.jpg" alt="" />
                <h4>A Not-So Silent Night That Rocked The City!</h4>
                <p>
                  A fundraising concert featuring a well-known local band, and
                  guest performers from FCA and local churches. With a couple
                  thousand in attendance, it was an enjoyable night for all.
                </p>
                <a href="">
                  <span>Read </span>
                  <span>more</span>
                  <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
            </div>
            <div id="news-2-content" class="news__content__batch">
              <div class="news__item">
                <img src="./img/events3.jpg" alt="" />
                <h4>Creative Young Minds Think Business!</h4>
                <p>
                  Frontline Christian Academy’s Business Week, held September
                  2019, showcased much creativity, fun, and entrepreneurship.
                  FCA encourages students to have an entrepreneurial mindset.
                </p>
                <a href="">
                  <span>Read </span>
                  <span>more</span>
                  <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
              <div class="news__item">
                <img src="./img/events4.jpg" alt="" />
                <h4>Liiterario2019</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste
                  rem, minima suscipit molestias eveniet officia aspernatur
                  facilis similique! Consequatur quia ipsa voluptatem, quaerat
                  beatae magni?
                </p>
                <a href="">
                  <span>Read </span>
                  <span>more</span>
                  <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
            </div>
            <div id="news-3-content" class="news__content__batch">
              <div class="news__item">
                <img src="./img/events5.jpg" alt="" />
                <h4>Lorem, ipsum dolor.</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste
                  rem, minima suscipit molestias eveniet officia aspernatur
                  facilis similique! Consequatur quia ipsa voluptatem, quaerat
                  beatae magni?
                </p>
                <a href="">
                  <span>Read </span>
                  <span>more</span>
                  <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
              <div class="news__item">
                <img src="./img/events6.jpg" alt="" />
                <h4>Lorem, ipsum dolor.</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste
                  rem, minima suscipit molestias eveniet officia aspernatur
                  facilis similique! Consequatur quia ipsa voluptatem, quaerat
                  beatae magni?
                </p>
                <a href="">
                  <span>Read </span>
                  <span>more</span>
                  <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
            </div>
            <div class="news__btn">
              <i id="news-1" class="news__circle fa-solid fa-circle active"></i>
              <i id="news-2" class="news__circle fa-solid fa-circle"></i>
              <i id="news-3" class="news__circle fa-solid fa-circle"></i>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
    <script>
      
      const firstActiveContent = document.getElementById("abt-1-content");
      const firstActiveNav = document.getElementById("abt-1");
      firstActiveContent.classList.add('active');
      firstActiveNav.classList.add('active');

    </script>


<?php get_footer(); ?>