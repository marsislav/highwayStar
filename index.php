<?php get_header();?>
      
      <div class="container">
      <div class="misc">
        <div class="search">
                
        <?php if( get_theme_mod( 'hs_fixed_show_search' ) ){
                 get_template_part('partials/global/fixed-search');
                        }

                        ?>

        </div>
                </div>
                <div class="misc">
        <div class="shop">
                
        <?php if( get_theme_mod( 'hs_fixed_show_cart' ) ){
                 get_template_part('partials/global/fixed-cart');
                        }

                        ?>

        </div>
</div>
      <main>
        <?php
               if (!is_single() && is_home() && function_exists('wpp_get_mostpopular')) {
                wpp_get_mostpopular([
                        'wpp_start' =>'<div class="">Most pop post',
                        'wpp_end' =>'</div>'
                ]); ?>
                <p>most poulr posts</p>
               <?php }
        ?>
        <?php if (have_posts()){
while (have_posts() ){

  the_post();?>
 <div class="row rowMargin">
    <?php
get_template_part('partials/post/content-excerpt');

?>
</div>
<?php
}
}
?>
        <div class="row">
                <div class="one-half column">
                        <p class="mainButton buttonCold older"><?php next_posts_link('&larr; Older posts'); ?></p>
                </div>
                <div class="one-half column">
                        <p class="mainButton buttonHot newer"><?php next_posts_link('Newer posts &rarr;'); ?></p>
                </div>
        </div>
        </main>
<aside>
<?php get_sidebar ();?>
</aside>


      </div>


      <?php get_footer();?>