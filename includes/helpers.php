<?php

// WORDPRESS FOOTER

add_action('wp_footer', 'show_template');
function show_template() {
    global $template;
    if(is_user_logged_in()) {
    echo '<div class"template-name" style="position:fixed; left: 30px; bottom: 30px; padding:2px; background: coral; color:#fff; font-size: 13px;">'.basename($template).'</div>';
    }
}




// DISREGARD SPACES

remove_filter('the_content', 'wpautop'); 
remove_filter('the_excerpt', 'wpautop');


add_action('rest_api_init', 'register_rest_images' );
function register_rest_images(){
    register_rest_field( array('activities'),
        'fimg_url',
        array(
            'get_callback'    => 'get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
function get_rest_featured_image( $object, $field_name, $request ) {
    if( $object['featured_media'] ){
        $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
        return $img[0];
    }
    return false;
}