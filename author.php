<?php get_header();?>
      
      <div class="container">
      <main>
///
<p class="authorTitle">
    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>
</p>
    <h2>About: <?php echo $curauth->nickname; ?></h2>
    <dl>
        <dt>Website</dt>
        <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
        <dt>Profile</dt>
        <dd><?php echo $curauth->user_description; ?></dd>
    </dl>

    <h2>Posts by <?php echo $curauth->nickname; ?>:</h2>

    <ul>
<!-- The Loop -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
            <?php the_title(); ?></a>,
            <?php the_time('d M Y'); ?> in <?php the_category(' ');?>
        </li>

    <?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>

<!-- End Loop -->

    </ul>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>





















<?php get_header();?>
      
      <div class="container">
      <main>
         
      <div class="authorInfo"> 
          ////

             <p class="authorTitile"><?php _e ('Posted by', 'hs');?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a> : </p>
             <div class="authorAvatar">
                 <?php echo get_avatar( $author_ID, 90, '', false, [ 'class' => 'img-circle' ] ); ?>
             </div>
             <div class="authorInfo">
             <?php echo nl2br (get_the_author_meta('description'));?>
             </div>    
         </div>


         
        <?php if (have_posts()){
while (have_posts() ){
  the_post();?>
 <div class="row">
    <?php
get_template_part('partials/post/content-category');

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