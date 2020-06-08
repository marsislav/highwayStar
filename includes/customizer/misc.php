<?php

function hs_misc_customizer_section( $wp_customize ){
    $wp_customize->add_setting( 'hs_fixed_show_search', [
        'default'       =>  'no',
        'transport'     =>  'postMessage'
    ]);

    $wp_customize->add_setting( 'hs_fixed_show_cart', array(
        'default'       =>  'no',
        'transport'     =>  'postMessage'
    ));

    $wp_customize->add_setting( 'hs_footer_copyright_text', array(
        'default'       =>  'Copyrights &copy; 2020 All Rights Reserved.',
    ));

    $wp_customize->add_setting( 'hs_footer_tos_page', array(
        'default'       =>  0,
    ));

    $wp_customize->add_setting( 'hs_footer_privacy_page', array(
        'default'       =>  0,
    ));

    $wp_customize->add_setting( 'hs_show_header_popular_posts', [
        'default'       =>  false
    ]);

    $wp_customize->add_setting( 'hs_popular_posts_widget_title', [
        'default'       =>  'Breaking News'
    ]);

    $wp_customize->add_setting( 'hs_read_more_color', [
        'default'       =>  '#1ABC9C'
    ]);

    $wp_customize->add_setting( 'hs_report_file', [
        'default'       =>  ''
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
        new WP_Customize_Color_Control( 
            $wp_customize, 
            'hs_read_more_color_input', 
            array(
                'label'      => __( 'Read more link color', 'hs' ),
                'section'    => 'hs_misc_section',
                'settings'   => 'hs_read_more_color',
            )
        ) 
    );

    $wp_customize->add_control(
        new WP_Customize_Upload_Control( 
            $wp_customize, 
            'hs_report_file_input', 
            array(
                'label'      => __( 'File Report', 'hs' ),
                'section'    => 'hs_misc_section',
                'settings'   => 'hs_report_file',
            ) 
        ) 
    );

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