<?php get_header();?>
      
      <div class="container">
      <div class="misc">
        <div class="search">
                
        <?php if( get_theme_mod( 'hs_fixed_show_search' ) ){
                 get_template_part('partials/global/fixed-search');
                        }

                        ?>

        </div>
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
        <ul>
        <li class="mainButton buttonCold older"><?php next_posts_link('&larr; Older'); ?></li>
        <li class="mainButton buttonHot newest"><?php previous_posts_link('&larr; Newer'); ?><li>
        </ul>
        </main>
<aside>
<?php get_sidebar ();?>
</aside>


      </div>


      <?php get_footer();?>