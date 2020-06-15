<?php get_header();?>
      
      <div class="container">
      <main>

     <h1><?php _e( 'Search Results for:', 'hs' ); ?> <?php the_search_query(); ?></h1>
     <?php get_search_form(); ?>

     
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



