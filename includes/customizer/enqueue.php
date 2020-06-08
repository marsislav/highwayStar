<?php

function hs_customize_preview_init(){
    wp_enqueue_script(
        'hs_theme_customizer',
        get_theme_file_uri( '/js/theme-customize.js' ),
        [ 'jquery', 'customize-preview' ],
        false,
        true 
    );
}