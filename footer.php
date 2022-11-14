<?php wp_footer() ?>


<footer class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__nav">
            <div class="footer__branding">
                <a href="<?php echo home_url() ?>">
                <img src="<?php echo get_template_directory_uri() ?>./img/fca-logo.png" alt="" />
                </a>
            </div>
            <nav class="links">
              <div class="links__item">
                <h4>
                  <span>Admission</span>
                  <i class="fa-solid fa-circle-chevron-down"></i>
                </h4>
                <ul>

                  <?php 
                  $args = array(
                  'post_type' => 'admission',
                  'posts_per_page' => -1,
                  );
                  $newQuery = new WP_Query($args)
                  ?>

                  <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                  
                  <?php
                  
                  
                  $id = get_field('id');

                  // $site_Url = add_query_arg($theTitle,' ','admission');

                  
                  ?>

                    <li><a href="<?php echo 'http://localhost/wp-fca/admission/?'.$id.'=' ?>"><?php the_title(); ?></a></li>
                    
                  <?php
                      endwhile;
                      else :
                          echo "no available content yet";
                      endif;
                      wp_reset_postdata();
                  ?>

                </ul>
              </div>
              <div class="links__item">
                <h4>
                  <span>Other Offers</span>
                  <i class="fa-solid fa-circle-chevron-down"></i>
                </h4>

                <ul>
                  
                <?php 
                  $args = array(
                  'post_type' => 'services',
                  'posts_per_page' => -1,
                  );
                  $newQuery = new WP_Query($args)
                  ?>

                  <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
             
                    <?php  
                    
                  $thePost = get_post();
                  $sectionHook = "#" . $thePost->post_name;
                    
                    
          
                    
                    ?>
             
                  <li><a href="<?php echo 'http://localhost/wp-fca/services/?'. $sectionHook ?>"><?php the_title(); ?></a></li>
                
                      <?php
                      endwhile;
                      else :
                          echo "no available content yet";
                      endif;
                      wp_reset_postdata();

                  ?>

                </ul>
              </div>
              <div class="links__item">
                <h4>
                  <span>Quicklinks</span>
                  <i class="fa-solid fa-circle-chevron-down"></i>
                </h4>
                <ul>
                  <?php wp_menu_li(); ?>
                </ul>
              </div>
            </nav>
            <div class="footer__btn">
              <a href="" class="btn bg--green">Give</a>
              <a href="faq.html" class="btn bg--l-light">FAQ</a>
            </div>
          </div>
          <div class="footer__social">
            <p>© FrontlineChristianAcademy 2022</p>
            <div class="footer__social__icons">
              <ul>
                <li>Follow us:</li>
                <li>
                  <a
                    href="https://www.facebook.com/frontlinechristianacademy"
                    target="_blank"
                    ><i id="facebook" class="fa-brands fa-facebook"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="https://www.instagram.com/frontlinechristianacademy/"
                    target="_blank"
                    ><i id="instagram" class="fa-brands fa-instagram"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="./js/bbscript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
    <script>
      var slider = tns({
        container: ".my-slider",
        items: 1,
        slideBy: "page",
        autoplay: false,
        controls: true,
        nav: true,
        navPosition: 'bottom',
        controlsText: ['',''],
      });
    </script>
    <script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'disableScrolling': true,
      'fitImagesInViewport': true,
      'positionFromTop': 100,
    })
    </script>
  </body>
</html>
