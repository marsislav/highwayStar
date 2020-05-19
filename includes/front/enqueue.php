<?php
function hs_enqueue () {
    $uri=get_theme_file_uri();
    $ver=HS_DEV_MODE ? time(): false;//cache = to remove when finished  - , [], time(), $ver
    wp_register_style('hs_maincss',$uri.'/css/main.css', [], $ver);
    wp_enqueue_style('hs_maincss');

    wp_register_script('hs_mainjs', $uri.'/js/main.js', array(), $ver, true );
    wp_register_script('hs_fa', $uri.'/js/fa.js', array(), $ver, true );
    wp_enqueue_script('jquery');
    wp_enqueue_script('hs_mainjs');
    wp_enqueue_script('hs_fa');
}