<?php
    global $post;
    $author_ID= $post->post_author;
    $author_URL=get_author_posts_url($author_ID);
 ?>
<?php if (has_post_thumbnail() ) {?>
    <div class="thumbnail">
        <?php the_post_thumbnail('full', ['class'=>'featuredImage']); ?>   
    </div> 
<?php }; ?>
    
    <h2>
        <?php the_title();?>
    </h2>
    <ul class="meta-tags">
    <li>
        <i class="far fa-calendar-alt"></i> <?php echo get_the_date();?>, 
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
            <i class="fas fa-user-alt"></i> <?php the_author();?>
        </a>
        </li>
        <li><i class="far fa-folder-open"></i><p class="categoryLabel"><?php the_category(' ');?></p></li>
        <li><i class="far fa-comment"></i> <?php comments_number('0');?></li>
    </ul>
    <div class="content">
        <?php 
            the_content();
            $args =array (
                'before'=>'<p>'. __('Pages:','hs'),
                'after'=>'</p>',
                'next_or_number'=>'number',
                'separator'=>' ',
                'nextpagelink'=>__('Next page', 'hs'),
                'previouspagelink'=>__('Previous page', 'hs'),
            );
            wp_link_pages($args);
        
        ?>


    </div>
    
