<div class="postListing container-fluid">
    <div class="row justify-content-md-center">
        <?php $posts = get_sub_field('Listing'); ?>
        <?php foreach ( $posts as $post ){ ?>
            <a href="<?php echo $post['post_Listing-post-item']->guid; ?>" class="col-12 col-md-4 col-lg-3 postListing__item">
                <div class="postListing__imgHover"><img  src="<?php echo get_the_post_thumbnail_url($post['post_Listing-post-item']->ID) ?>" /></div>
                <h4 class="postListing__item__title"><?php echo $post['post_Listing-post-item']->post_title; ?></h4>
                <p class="postListing__item__desc"><?php echo $post['post_Listing-post-item']->post_excerpt; ?></p>
            </a>
        <?php
} ?>
    </div>
    <div class="postListing__button">
        <a class="postListing__button__link" href="<?php site_url(); ?>/fotografia">Zobacz Więcej</a>
    </div>
</div>


