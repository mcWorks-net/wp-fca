<?php

function fca_custom_post() {

//Admission CPT

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

//Testimonial CPT
    
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

//Services CPT

    $services_label  = array (
        'name'          => __('Services', 'textdomain'),
        'singular_name' => __('Services', 'textdomain'),
        'add_new'       => __('Add Services', 'textdomain'),
        'add_new_item'  => __('Add New Services', 'textdomain'),
        'edit_item'     => __('Edit Services', 'textdomain'),
        'all_items'     => __('Services', 'textdomain')
    );
    $services_args = array(  
            'labels'              => $services_label,
            'public'              => true,
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor',  'thumbnail')
    );
    register_post_type('services', $services_args);

    // $gallery_label  = array (
    //     'name'          => __('Gallery', 'textdomain'),
    //     'singular_name' => __('Gallery', 'textdomain'),
    //     'add_new'       => __('Add Gallery', 'textdomain'),
    //     'add_new_item'  => __('Add New Gallery', 'textdomain'),
    //     'edit_item'     => __('Edit Gallery', 'textdomain'),
    //     'all_items'     => __('Gallery', 'textdomain')
    // );
    // $gallery_args = array(  
    //         'labels'              => $gallery_label,
    //         'public'              => true,
    //         'capability_type'     => 'post',
    //         'show_ui'             => true,
    //         'taxonomies'          => array( 'category' ),
    //         'supports'            => array( 'title', 'editor',  'thumbnail')
    // );
    // register_post_type('gellery', $gallery_args);
   

}
add_action('init', 'fca_custom_post');
