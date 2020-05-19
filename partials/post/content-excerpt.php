<div>
    <?php if (has_post_thumbnail() ) {?>
    <div class="thumbnail">
        <a href="">
            <?php the_post_thumbnail('full', ['class'=>'thumbnailEffect']); ?>
            
        </a>
   
    </div>
    <?php }; ?>
    <h2>
        <?php the_title();?>
    </h2>
    </div>