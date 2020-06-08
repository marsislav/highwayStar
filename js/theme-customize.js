(function($){
    wp.customize( 'hs_fixed_show_search', function( value ){
        value.bind(function(new_val){
            if( new_val ){
                $("#fixed-search").show();
            }else{
                $("#fixed-search").hide();
            }
        });
    });

    wp.customize( 'hs_fixed_show_cart', function( value ){
        value.bind(function(new_val){
            if( new_val ){
                $("#fixed-cart").show();
            }else{
                $("#fixed-cart").hide();
            }
        });
    });
})(jQuery);