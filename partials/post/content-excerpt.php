
<div class="one-half column">
    <?php if (has_post_thumbnail() ) {?>
    <div class="thumbnail">
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('full', ['class'=>'thumbnailEffect']); ?>
            
        </a>
   
    </div>
    </div>
    <?php }; ?>
    
    <div class="one-half column">
    <h2>
    <a href="<?php the_permalink();?>">
        <?php the_title();?>
    </a>
    </h2>
    <ul class="meta-tags">
        <li><i class="date">date-ico</i> <?php echo get_the_date();?></li>
        <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><i class="author">user-ico</i> <?php the_author();?></a></li>
        <li><i class="category">cat-ico</i><p class="categoryLabel"><?php the_category(' ');?></p></li>
        <li><i class="comments">comments-ico</i><p class="categoryLabel"><?php comments_number('0');?></p></li>
    </ul>
    <div class="excerpt">
        <?php the_excerpt();?>
    </div>
    </div>
    
