<?php

function hs_social_customizer_section( $wp_customize ){
    $wp_customize->add_setting( 'hs_facebook_handle', [ 
        'default'   =>  '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);

    $wp_customize->add_setting( 'hs_twitter_handle', array(
        'default'                   =>  '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_setting( 'hs_instagram_handle', array(
        'default'                   =>  '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_setting( 'hs_email', array(
        'default'                   =>  '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_setting( 'hs_phone_number', array(
        'default'                   =>  '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_section( 'hs_social_section', [
        'title'     =>  __( 'Highway Star Social Settings', 'hs' ),
        'priority'  =>  30,
        'panel'     =>  'hs'
    ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'hs_social_facebook_input',
        array(
            'label'          => __( 'Facebook Handle', 'hs' ),
            'section'        => 'hs_social_section',
            'settings'       => 'hs_facebook_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'hs_social_twitter_input',
        array(
            'label'                 =>  __( 'Twitter Handle', 'hs' ),
            'section'               => 'hs_social_section',
            'settings'              => 'hs_twitter_handle',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'hs_social_instagram_input',
        array(
            'label'                 =>  __( 'Instagram Handle', 'hs' ),
            'section'               => 'hs_social_section',
            'settings'              => 'hs_instagram_handle',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'hs_social_email_input',
        array(
            'label'                 =>  __( 'Email', 'hs' ),
            'section'               => 'hs_social_section',
            'settings'              => 'hs_email',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'hs_social_phone_number_input',
        array(
            'label'                 =>  __( 'Phone Number', 'hs' ),
            'section'               => 'hs_social_section',
            'settings'              => 'hs_phone_number',
            'type'                  =>  'text'
        )
    ));
}