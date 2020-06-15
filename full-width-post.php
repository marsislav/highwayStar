<?php 
/*
* Template name: Full Width Post
* template Post type: Post

 */
?>
<?php get_header();?>
 <div class="container">
     <main>
         <?php if (have_posts()){
                                while (have_posts() ){
                                        the_post();
                                       
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

         <?php previous_post_link();?>
         <?php next_post_link ();?>
         <?php 
                        next_posts_link('&larr; Older');
                        previous_posts_link('&larr; Newer');
                ?>
         <div class="authorInfo">
             <p class="authorTitile">Posted by <a href="<?php $author_URL ;?>"><?php the_author();?></a></p>
             <div class="avatar">
                 <?php echo get_avatar($author_ID, 90, '', false, ['class'=>'img-circle'] );?>
             </div>
             <?php echo nl2br (get_the_author_meta('description'));?>
         </div>

     </main>

     <?php 
                        $categories=get_the_category();
                        $rp_query               =   new WP_Query([
                                'posts_per_page'    =>  2,
                                'post__not_in'      =>  [ $post->ID ],
                                'cat'               =>  !empty($categories) ?  $categories[0]->term_id : null
                            ]);

                            if( $rp_query->have_posts() ){
                                while( $rp_query->have_posts() ){
                                    $rp_query->the_post();

                                    ?>
     <div class="mpost clearfix">
         <?php

                                        if( has_post_thumbnail() ){
                                            ?>
         <div class="entry-image">
             <a href="<?php the_permalink(); ?>">
                 <?php the_post_thumbnail( 'thumbnail' ); ?>
             </a>
         </div>
         <?php
                                        }

                                        ?>

         <div class="entry-c">
             <div class="entry-title">
                 <h4>
                     <a href="<?php the_permalink(); ?>">
                         <?php the_title(); ?>
                     </a>
                 </h4>
             </div>
             <ul class="entry-meta clearfix">
                 <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
                 <li><i class="icon-comments"></i> <?php comments_number( '0' ); ?></li>
             </ul>
             <div class="entry-content">
                 <?php the_excerpt(); ?>
             </div>
         </div>
     </div>
     <?php
                                }

                                wp_reset_postdata();
                            }

                            ?>


 </div>
 <?php get_footer();?>