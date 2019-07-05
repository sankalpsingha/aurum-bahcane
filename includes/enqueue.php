<?php


function bahcane_enqueue() {

    // wp_register_style('bahcane_style', get_template_directory_uri() . '/assets/css/coolstyle.css');
    // wp_register_style('tulsa_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    
    wp_register_script('bahcane_animejs', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js', array('jquery'), false, true);

    wp_register_script('bahcane_animation', get_stylesheet_directory_uri() . '/assets/js/animation.js', array('jquery'), false, true);
    
    if(is_front_page()) {
        wp_dequeue_style( 'icons-entypo' );
        wp_deregister_style('icons-entypo');

        wp_dequeue_style('icons-fontawesome');
        wp_deregister_style( 'icons-fontawesome' );

        wp_dequeue_style( 'bootstrap' );
        wp_deregister_style('bootstrap');

        wp_dequeue_style( 'aurum-main' );
        wp_deregister_style('aurum-main');
        // wp_enqueue_style('bahcane_style');
        wp_enqueue_script('bahcane_animejs');
        wp_enqueue_script('bahcane_animation');

    }

}

