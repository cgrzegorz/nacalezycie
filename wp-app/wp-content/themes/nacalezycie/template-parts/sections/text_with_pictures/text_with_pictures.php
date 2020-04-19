<?php $images = get_sub_field('text_with_pictures_images'); ?>
<div class="textandImages mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 textandImages__text">
                <?php echo get_sub_field('text_with_pictures_text') ?>
            </div>
        </div>

        <div class="row no-gutters justify-content-center mb-5">

            <div class="postContent__img col-12 col-md-11">

                <?php if( $images ): ?>
                <?php foreach( $images as $key => $image_id ): ?>
                <img class="img-fluid postContent__img__item"
                    src="<?php echo esc_url($image_id['sizes']['post-blog']);?>" alt="<?php echo $image_id['title']?>"
                    loading="lazy" />
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>





    </div>




</div>