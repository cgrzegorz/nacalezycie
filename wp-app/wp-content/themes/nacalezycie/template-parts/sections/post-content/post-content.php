<?php $images = get_sub_field('post-image'); ?>
<div class="postContent container">
    <div class="row no-gutters">
        <div class="postContent__text col-12 col-md-9">
            <?php echo get_sub_field('post_text') ?></div>

    </div>
</div>
<div class="row no-gutters">
    <div class="postContent__music container col-12 col-md-5">
        <?php echo get_sub_field('post-image-music') ?>
    </div>
</div>
<div class="row no-gutters justify-content-center">
    <div class="postContent__img col-12 col-md-7">
        <?php if( $images ): ?>
        <?php foreach( $images as $key => $image_id ): ?>
        <img class="img-fluid postContent__img__item" src="<?php echo esc_url($image_id['sizes']['post-blog']);?>"
            alt="<?php echo $image_id['title']?>" loading="lazy" />
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
</div>

<?php get_footer() ?>