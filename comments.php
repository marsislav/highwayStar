<?php 
if (post_password_required()){
    return; 
}
?>
<?php if (have_comments()) {?>
    <ol class="commentList">
<?php
foreach ($comments as $comment) { ?>
<li>
<div class="userAvatar">
<?php echo get_avatar($comment,  '', "", ['class'=>'userAvatarImg']);?>

</div>
<div class="commentsMeta"> 
<h3><span><?php comments_number(); ?></span></h3>
    <?php comment_author();?>
    <span> <?php comment_date();?></span>
</div>
<?php comment_text();?>
</li>
<?php }
the_comments_pagination();
?>
</ol>
<?php } ?>

<?php
comment_form([
    'comment_field'         =>  '<div class="clear"></div>

    <div class="col_full">
        <label>Comment</label>
        <textarea name="comment" cols="58" rows="7" class="sm-form-control"></textarea>
    </div>',
    'fields'                =>  [
        'author'            =>  
            '<div class="col_one_third">
                <label>' . __( 'Name', 'hs' ) . '</label>
                <input type="text" name="author" class="sm-form-control" />
            </div>',
        'email'             =>  
            '<div class="col_one_third">
                <label>' . __( 'Email', 'hs' ) . '</label>
                <input type="text" name="email" class="sm-form-control" />
            </div>',
        'url'               =>  
            '<div class="col_one_third col_last">
                <label>' . __( 'Website', 'hs' ) . '</label>
                <input type="text" name="url" class="sm-form-control" />
            </div>'
    ],
    'class_submit'          =>  'button button-3d nomargin',
    'label_submit'          =>  __( 'Submit Comment', 'hs' ),
    'title_reply'           =>  __( 'Leave a <span>Comment</span>', 'hs' )
]);
?>