<?php 
if (post_password_required()){
    return; 
}
?>
<?php if (have_comments()) {?>
    <h3><span><?php comments_number(); ?></span></h3>
<ol class="commentList">
    <?php
foreach ($comments as $comment) { ?>
    <li>
        <div class="userAvatar">
            <?php echo get_avatar($comment,  '', "", ['class'=>'userAvatarImg']);?>

        </div>
        <div class="commentsMeta">
            
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
    'comment_field'=>
    '<div>
        <label>'. __( 'Comment <span class="required">*</span> :', 'hs' ) . '</label>
        <textarea name="comment" cols="58" rows="7" required></textarea>
    </div>',
    'fields'                =>  [
        'author'            =>  
            '<div class="col_one_third">
                <label>' . __( 'Name <span class="required">*</span> : ', 'hs' ) . '</label>
                <input type="text" name="author"/>
            </div>',
        'email'             =>  
            '<div class="col_one_third">
                <label>' . __('Email <span class="required">*</span> : ', 'hs' ) . '</label>
                <input type="text" name="email" />
            </div>',
        'url'               =>  
            '<div>
                <label>' . __( 'Website : ', 'hs' ) . '</label>
                <input type="text" name="url"/>
            </div>'
    ],
    'class_submit'          =>  'mainButton buttonHot',
    'label_submit'          =>  __( 'Submit Comment', 'hs' ),
    'title_reply'           =>  __( 'Leave a <span>Comment</span>', 'hs' )
]);
?>