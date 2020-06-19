<?php

function hs_misc_customizer_section( $wp_customize ){
    //checkbox sanitization function
 function hs_sanitize_checkbox( $input ){
    //returns true if checkbox is checked
    return ( ( isset( $input ) && true == $input ) ? true : false );
}
/*Sanitization functions - END*/
    $wp_customize->add_setting( 'hs_fixed_show_search', [
        'default'       =>  'no',
        'transport'     =>  'postMessage',
        'sanitize_callback' => 'hs_sanitize_checkbox'
    ]);

    $wp_customize->add_setting( 'hs_fixed_show_cart', array(
        'default'       =>  'no',
        'transport'     =>  'postMessage',
        'sanitize_callback' => 'hs_sanitize_checkbox'
    ));

    $wp_customize->add_setting( 'hs_footer_copyright_text', array(
        'default'       =>  'Copyrights &copy; 2020 All Rights Reserved.',
        'transport'=>'postMessage',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_setting( 'hs_footer_tos_page', array(
        'default'       =>  0,
        'transport'=>'postMessage',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_setting( 'hs_footer_privacy_page', array(
        'default'       =>  0,
        'transport'=>'postMessage',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_setting( 'hs_show_header_popular_posts', [
        'default'       =>  false,
        'sanitize_callback' => 'hs_sanitize_checkbox'
    ]);

    $wp_customize->add_setting( 'hs_popular_posts_widget_title', [
        'default'       =>  'Breaking News',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);


    $wp_customize->add_section( 'hs_misc_section', [
        'title'         =>  __( 'HighwayStar Misc Settings', 'hs' ),
        'priority'      =>  30,
        'panel'         =>  'hs'
    ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'hs_header_show_search_input',
        array(
            'label'                 =>  __( 'Show fixed search button on right', 'hs' ),
            'section'               => 'hs_misc_section',
            'settings'              => 'hs_fixed_show_search',
            'type'                  =>  'checkbox',
            'choices'               =>  [
                'yes'               =>  'Yes'
            ]
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'hs_header_show_cart_input',
        array(
            'label'                 =>  __( 'Show fixed cart button on right', 'hs' ),
            'section'               => 'hs_misc_section',
            'settings'              => 'hs_fixed_show_cart',
            'type'                  =>  'checkbox',
            'choices'               =>  [
                'yes'               =>  'Yes'
            ]
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'hs_footer_copyright_text_input',
        array(
            'label'                 =>  __( 'Show Search Button in Header', 'hs' ),
            'section'               => 'hs_misc_section',
            'settings'              => 'hs_footer_copyright_text',
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'hs_footer_tos_page_input',
        array(
            'label'                 =>  __( 'Footer TOS Page', 'hs' ),
            'section'               => 'hs_misc_section',
            'settings'              => 'hs_footer_tos_page',
            'type'                  =>  'dropdown-pages'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'hs_footer_privacy_page_input',
        array(
            'label'                 =>  __( 'Footer Privacy Policy Page', 'hs' ),
            'section'               => 'hs_misc_section',
            'settings'              => 'hs_footer_privacy_page',
            'type'                  =>  'dropdown-pages'
        )
    ));

  

    $wp_customize->add_control(
        new WP_Customize_Control( 
            $wp_customize, 
            'hs_show_header_popular_posts_widget_input', 
            array(
                'label'     => __( 'Show Header Popular Posts Widget', 'hs' ),
                'section'   => 'hs_misc_section',
                'settings'  => 'hs_show_header_popular_posts',
                'type'      =>  'checkbox',
                'choices'   =>  [
                    'yes'   =>  __( 'Yes', 'hs' )
                ]
            ) 
        ) 
    );

    $wp_customize->add_control(
        new WP_Customize_Control( 
            $wp_customize, 
            'hs_popular_posts_widget_title_input', 
            array(
                'label'     => __( 'Popular Posts Widget Title', 'hs' ),
                'section'   => 'hs_misc_section',
                'settings'  => 'hs_popular_posts_widget_title',
            ) 
        ) 
    );
}