<?php

/**
 * Template Name: Admission
 */

?>


<?php get_header(); ?>

<?php 
      
    $siteUrl = parse_url(add_query_arg());
    $admissionID = $siteUrl['query'];

    if ($admissionID==null){
        $admissionID = 0;
    } else {
        $admissionID = $siteUrl['query'];
    }

?>

<section class="general-banner">
      <h1>Admission</h1>
</section>

<section class="general-tab">
    <div class="container">
        <div class="general-tab__wrapper">

            <div class="general-tab__nav">
                <ul>

                <?php 
                    $args = array(
                    'post_type' => 'admission',
                    'posts_per_page' => -1,
                    );
                    $newQuery = new WP_Query($args)
                ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>                    

                    <li id="general-<?php echo get_field('id')?>" class="general__nav__link">
                        <?php the_title(); ?>
                    </li>

                <?php
                    endwhile;
                    else :
                        echo "no available content yet";
                    endif;
                    wp_reset_postdata();
                ?>
                </ul>
            </div>

            <div class="general-tab__content">

                <?php 
                    $args = array(
                    'post_type' => 'admission',
                    'posts_per_page' => -1,
                    );
                    $newQuery = new WP_Query($args)
                ?>
                
                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

                <div id="general-<?php echo get_field('id'); ?>-content" class="general-tab__item">
                    <?php the_content(); ?>
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

<section class="reginfo">
<div class="container">
    <div class="reginfo__wrapper">
    <div class="reginfo__left">
    <div class="reginfo__title">
        <h2>Enrollment Requirements for:</h2>
    </div>
        <div class="reginfo__req">
        <h3>New Students</h3>
        <ul>
            <li><i class="fa-solid fa-diamond"></i>Original or Certified True Copy of Birth Certificate 
            (Must be PSA if Philippine-born)
            </li>
            <li><i class="fa-solid fa-diamond"></i>Form 138 (Report Card)</li>
            <li><i class="fa-solid fa-diamond"></i>Form 137*</li>
            <li><i class="fa-solid fa-diamond"></i>Good Moral Certificate*</li>
            <li><i class="fa-solid fa-diamond"></i>Certificate of No Financial Responsibility/ Certificate of Clearance</li>
            <li><i class="fa-solid fa-diamond"></i>Special Medical Certificates, if any
            (Allergies, special condition)
            </li>
            <li><i class="fa-solid fa-diamond"></i>Properly filled up FCA Forms
            (May be filled-out online)
            </li>
        </ul>
        </div>
        <div class="reginfo__req mt--5">
        <h3>Re-Enrolling Students</h3>
        <ul>
            <li><i class="fa-solid fa-diamond"></i>Form 138 (Report Card) </li>
            <li><i class="fa-solid fa-diamond"></i>Properly Filled up FCA Student Registration Update Form</li>
            <li><i class="fa-solid fa-diamond"></i>Properly Filled up General Waiver Form</li>
        </ul>
        </div>
    </div>
    <div class="reginfo__enroll">
        <h2>Registration / Enrollment</h2>
        <p>Enrollment Procedures are as follows:</p>
        <ul>
        <li><i class="fa-solid fa-diamond"></i>Take the assessment exam.</li>
        <li><i class="fa-solid fa-diamond"></i>Review results with the registrar. If passed, proceed.</li>
        <li><i class="fa-solid fa-diamond"></i>Create parent account in FCA SMIS</li>
        <li><i class="fa-solid fa-diamond"></i>Enroll each child under the parent account in FCA SMIS. Follow the steps for the following departments:</li>
        </ul>
        <ul class="ml--3">
        <li> <img src="./img/diamond.png" class="mr--2" alt=""> Registrar – Submit all pertinent documentation and fill out all required forms.</li>
        <li> <img src="./img/diamond.png" class="mr--2" alt=""> Finance – Pay required fees and upload proof of payment. If paid in cash at the FCA office, FCA staff may upload proof of payment.</li>
        </ul>
        <ul>
        <li><i class="fa-solid fa-diamond"></i>Claim books at library upon presentation of receipt.
        </li>
        <li><i class="fa-solid fa-diamond"></i>Attend scheduled general orientation.</li>
        </ul>
    </div>
    
    </div>
</div>
</section>

<script>
    //-----------------------------Added on Wordpres Admission

    let admissionID = <?php echo $admissionID ?>


    if(admissionID!==0){

            
        const tabActive = document.getElementById("general-<?php echo $admissionID ?>");
        const tabContentActive = document.getElementById("general-<?php echo $admissionID ?>-content");
        tabActive.classList.add('active');
        tabContentActive.classList.add('active');
      
        
    } else {

        const tabActive = document.getElementById("general-1");
        const tabContentActive = document.getElementById("general-1-content");
        tabActive.classList.add('active');
        tabContentActive.classList.add('active');


    }

  

</script>

<?php get_footer(); ?>