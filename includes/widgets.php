<?php
function hs_widgets () {
    register_sidebar([
        'name'=>__('Main sidebar', 'hs'),
        'id'=>'hs_sidebar',
        'description'=>__('Main sidebar for the theme Highway Star', 'hs'),
        'before_widget'=>'<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'


    ]);
}