<?php

function fca_custom_post() {


    $admission_label  = array (
        'name'          => __('Admission', 'textdomain'),
        'singular_name' => __('Admission', 'textdomain'),
        'add_new'       => __('Add Admission', 'textdomain'),
        'add_new_item'  => __('Add New Admission', 'textdomain'),
        'edit_item'     => __('Edit Admission', 'textdomain'),
        'all_items'     => __('Admission', 'textdomain')
    );
    $admission_args = array(  
            'labels'              => $admission_label,
            'public'              => true,
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor',  'thumbnail')
    );
    register_post_type('admission', $admission_args);
    
    $testimonial_label  = array (
        'name'          => __('Testimonial', 'textdomain'),
        'singular_name' => __('Testimonial', 'textdomain'),
        'add_new'       => __('Add Testimonial', 'textdomain'),
        'add_new_item'  => __('Add New Testimonial', 'textdomain'),
        'edit_item'     => __('Edit Testimonial', 'textdomain'),
        'all_items'     => __('Testimonial', 'textdomain')
    );
    $testimonial_args = array(  
            'labels'              => $testimonial_label,
            'public'              => true,
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor',  'thumbnail')
    );
    register_post_type('testimonial', $testimonial_args);
   

}
add_action('init', 'fca_custom_post');
