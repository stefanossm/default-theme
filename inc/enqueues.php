<?php

/**
 * Enqueue scripts and styles.
 */
function padrao_scripts() {
    wp_register_style( 'padrao-css-main', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );
    wp_enqueue_style('padrao-css-main');

    wp_register_script( 'padrao-js-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script('padrao-js-main');
}
add_action( 'wp_enqueue_scripts', 'padrao_scripts' );