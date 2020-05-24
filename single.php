<?php get_header();?>
      
      <div class="container">
      <main>
        
        <?php if (have_posts()){
while (have_posts() ){
  the_post();?>
 <div class="row">
    <?php
get_template_part('partials/post/content-excerpt');

?>
</div>
<?php
}
}
?>
       
       
        <ul>
          <li class="mainButton buttonHot">main bnt</li>
          <li class="mainButton buttonHot">another btn</li>
        </ul>
        <?php 
next_posts_link('&larr; Older');
previous_posts_link('&larr; Newer');
?>
        </main>
<aside>
<?php get_sidebar ();?>
</aside>


      </div>
      <?php get_footer();?>