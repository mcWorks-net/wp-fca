<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Frontline Christian Academy - Home</title>
    <!-- <link rel="stylesheet" href="./dist/css/main.min.css" /> -->
    <link rel="stylesheet" href="css/animate.css" />
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script
      src="https://kit.fontawesome.com/a6726e13c6.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <?php wp_head() ?>
  </head>
  <body>
  <header class="header2 bg--light">
      <div class="container">
        <div class="header2__wrapper">
          <div class="branding">
            <a href="<?php echo home_url() ?>">
                <img src="<?php echo get_template_directory_uri() ?>./img/fca-logo.png" alt="" />
            </a>
          </div>
          <div class="header2__contacts">
            <ul>
              <li><i class="fa-solid fa-phone"></i>049 521 0732</li>
              <li>
                <i class="fa-solid fa-mobile-retro"></i>0908 202 0749 | 0926 363
                9722
              </li>
              <li>
                <a
                  href="https://www.facebook.com/frontlinechristianacademy"
                  target="_blank"
                  class="btn bg--dblue"
                  >Facebook</a
                >
              </li>
              <li><a href="faq.html" class="btn bg--transparent">FAQ</a></li>
            </ul>
          </div>
          <div class="toggle__menu2">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="header2__nav">
          <ul class="header2__nav__link">
           <?php wp_menu_li(); ?>
          </ul>
          <div class="header2__contacts">
            <ul>
              <li><i class="fa-solid fa-phone"></i>049 521 0732</li>
              <li>
                <i class="fa-solid fa-mobile-retro"></i>0908 202 0749 | 0926 363
                9722
              </li>
            </ul>
            <div class="header2__contacts__btn">
              <ul>
                <li>
                  <a
                    href="https://www.facebook.com/frontlinechristianacademy"
                    target="_blank"
                    class="btn bg--dblue"
                    >Facebook</a
                  >
                </li>
                <li><a href="faq.html" class="btn bg--transparent">FAQ</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>