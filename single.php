 <?php get_header();?>
 <div id="post-<?php the_ID('container'); ?>" <?php post_class('container'); ?> >
     <main>
         <?php if (have_posts()){
            while (have_posts() ){
                the_post();
                global $post;
                        $author_ID          =   $post->post_author;
                        $author_URL         =   get_author_posts_url( $author_ID );
        ?>
         <?php
            get_template_part('partials/post/content-single');
        ?>
         <?php
                }
            }
        ?>
         <div class="tags">
             <?php the_tags('', ' ');?>
         </div>
         <?php if (comments_open() || get_comments_number()) {
            
            
?>
         <div class="commentsForm">
             <?php comments_template();?>
         </div>
         <?php } ?>
         <div class="authorInfo">
             <p class="authorTitile"><?php _e ('Posted by', 'hs');?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a> : </p>
             <div class="authorAvatar">
                 <?php echo get_avatar( $author_ID, 90, '', false, [ 'class' => 'img-circle' ] ); ?>
             </div>
             <div class="authorInfo">
             <?php echo nl2br (get_the_author_meta('description'));?>
             </div>    
         </div>

         </main>

            
         </div>
         <div class="posts-additional">
             <div class="container">
                <?php get_template_part('partials/post/posts-additional');?>
                </div>
             </div>
         </div>
 <?php get_footer();?>