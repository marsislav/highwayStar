
         <?php previous_post_link();?>
         <?php next_post_link ();?>
         <?php 
                        next_posts_link('&larr; Older');
                        previous_posts_link('&larr; Newer');
                ?>

     <?php 
                        $categories=get_the_category();
                        $rp_query               =   new WP_Query([
                                'posts_per_page'    =>  4,
                                'post__not_in'      =>  [ $post->ID ],
                                'cat'               =>  !empty($categories) ?  $categories[0]->term_id : null
                            ]);
                            
                            if( $rp_query->have_posts() ){?>
                                <div class="relatedPosts">
                                    <?php
                                _e('Related posts:', 'hs');
                                while( $rp_query->have_posts() ){
                                    $rp_query->the_post();

                                    ?>

         
         <?php
         

                                        if( has_post_thumbnail() ){
                                            ?>
         <div class="relatedPostsThumbnail">
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
             </ul>
         </div>

     <?php
                                }

                                wp_reset_postdata();
                            }

                            ?>


