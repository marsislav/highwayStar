<div class="one-half column">
    <?php if (has_post_thumbnail() ) {?>
    <div class="thumbnail">
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('full', ['class'=>'thumbnailEffect']); ?>
        </a>
    </div>  
    <?php }
    else {?>
<div class="no thumbnail thumbnailEffect ">
        <a href="<?php the_permalink();?>">
            <div> 
                <img src="<?php echo get_template_directory_uri(); ?>/img/default-bgr.png" alt="No thumbnail available">
                <?php _e('No thumbnail available', 'hs')?>
            </div>
        </a>
    </div>  
    <?php }
    ?>
    </div>
  
    
    <div class="one-half column">
    <h2>
    <a href="<?php the_permalink();?>">
        <?php the_title();?>
    </a>
    </h2>
    <ul class="meta-tags">
        <li>
            <i class="far fa-calendar-alt"></i> <?php echo get_the_date();?>, 
                <i class="fas fa-user-alt"></i> 
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
                <?php the_author();?>
                </a>
        </li>
        <li><i class="far fa-folder-open"></i><?php the_category(' ');?></li>
        <li><i class="far fa-comment"></i> <?php comments_number('0');?></li>
    </ul>
    <div class="excerpt">
        <?php the_excerpt();?>
    </div>
    </div>
    
