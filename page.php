<?php get_header();?>
      
      <div class="container">
      <main>
        
        <?php
while (have_posts() ){
  the_post();?>
 <div class="row">
    <?php
get_template_part('partials/page/content-page');

?>
</div>
<?php

}
?>
</main>
</div>
<?php get_footer();?>