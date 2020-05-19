<?php
function hs_widgets () {
    register_sidebar([
        'name'=>__('Main sidebar'),
        'id'=>'hs_sidebar',
        'description'=>__('Main sidebar for the theme Highway star'),
        'before_widget'=>'<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'


    ]);
}