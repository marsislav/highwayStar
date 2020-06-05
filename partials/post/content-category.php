<?php
 global $post;
 $author_ID= $post->post_author;
 $author_URL=get_author_posts_url($author_ID);

 ?>
<h2> <?php the_archive_title()?></h2>
<h2> <?php the_archive_description()?></h2>

    <?php if (has_post_thumbnail() ) {?>
    <div class="thumbnail">
            <?php the_post_thumbnail('full', ['class'=>'featuredImage']); ?>   
    </div> 
    <?php }; ?>
    
    <h2>
    <a href="<?php the_permalink();?>">
        <?php the_title();?>
    </a>
    </h2>
    <ul class="meta-tags">
        <li><i class="date">date-ico</i> <?php echo get_the_date();?></li>
        <li><a href="<?php $author_URL ;?>"><i class="author">user-ico</i> <?php the_author();?></a></li>
        <li><i class="category">cat-ico</i><p class="categoryLabel"><?php the_category(' ');?></p></li>
        <li><i class="comments">comments-ico</i><p class="categoryLabel"><?php comments_number('0');?></p></li>
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
    
