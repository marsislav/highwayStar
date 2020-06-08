<?php

function hs_customize_register( $wp_customize ){
    // echo '<pre>';
    // var_dump( $wp_customize );
    // echo '</pre>';

    $wp_customize->get_section( 'title_tagline' )->title    =   'General';

    $wp_customize->add_panel( 'hs', [
        'title'         =>  __( 'Highway Star', 'hs' ),
        'description'   =>  '<p>Highway Star Theme Settings</p>',
        'priority'      =>  160
    ]);

    hs_social_customizer_section( $wp_customize );
    hs_misc_customizer_section( $wp_customize );
}