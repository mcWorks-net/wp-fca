<?php

/**
 * Template Name: Contact
 */

?>


<?php get_header(); ?>

<section class="contact">
      <div class="container">
        <div class="contact__wrapper">
          <div class="contact__content">
          <div class="contact__form">
            <div class="contact__form__box">
              <input id="name" name="name" type="text" required/>
              <label for="name">Your Name</label>
            </div>
            <div class="contact__form__box">
              <input id="phone" name="phone" type="tel" required/>
              <label for="phone">Your Email</label>
            </div>
            <div class="contact__form__box">
              <input id="subject" name="subject" required></input>
              <label for="subject">Subject</label>
            </div>
            <div class="contact__form__box">
              <textarea id="message" name="message" required></textarea>
              <label for="message">Message</label>
            </div>
            <a href="" class="btn bg--green">Send Message</a>
          </div>
          <ul class="contact__info__max">
            <li><i class="fa-solid fa-envelope"></i> <span>info@fca.edu.ph</span> </li>
            <li>
              <i class="fa-brands fa-facebook"></i
              ><span>facebook.com/frontlinechristianacademy
              </li></span>
            <li>
              <i class="fa-solid fa-phone"></i><span>(049) 521-0732 | (+63)
                908-202-0749 | (+63) 926-363-9722</span>
            </li>
            <li>
              <i class="fa-solid fa-location-dot"></i><span>Baloc Rd, Brgy, San
                Pablo City, 4000 Laguna</span>
            </li>
          </ul>
          <div class="contact__text">
            <h1>Contact Us.</h1>
            <ul>

            
            <?php
                $homepage_id = get_option('page_on_front');
              ?>

              <?php
                if(have_rows('contact_details',$homepage_id)): 
              ?>

              <?php 
              
              while(have_rows('contact_details',$homepage_id)) : the_row(); 
              ?>

              <li><i class="<?php the_sub_field('icon'); ?>"></i><?php the_sub_field('text'); ?></li>

                    <?php endwhile; ?>          
                <?php endif; ?>
            </ul>
          </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>