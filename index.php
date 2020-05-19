<?php get_header();?>
      
      <div class="container">
      <main>
        <?php if (have_posts()){
while (have_posts() ){
  the_post();
get_template_part('partials/post/content-excerpt');
}
}
        ?>
       
        <ul>
          <li class="mainButton buttonHot">main bnt</li>
          <li class="mainButton buttonHot">another btn</li>
        </ul>

        </main>
<aside>
<?php get_sidebar ();?>
</aside>
      </div>
      <?php get_footer();?>