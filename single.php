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
                </main>
        </div>                                        
        <?php get_footer();?>