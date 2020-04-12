<div class="postListing container-fluid">
    <div class="row justify-content-md-center">
        <?php $posts = get_sub_field('Listing'); ?>
        <?php foreach ( $posts as $post ){ ?>
            <a href="<?php echo $post['post_Listing-post-item']->guid; ?>" class="col-12 col-md-3 postListing__item">
                <div class="kupa"><img  src="<?php echo get_the_post_thumbnail_url($post['post_Listing-post-item']->ID) ?>" /></div>
                <h4 class="postListing__item__title"><?php echo $post['post_Listing-post-item']->post_title; ?></h4>
                <p class="postListing__item__desc"><?php echo $post['post_Listing-post-item']->post_excerpt; ?></p>
            </a>
        <?php
} ?>
    </div>
</div>


