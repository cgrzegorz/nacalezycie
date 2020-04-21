<div class="container">
    <div class="testimonials">
        <?php
if( have_rows('testimonials_content') ):
    while ( have_rows('testimonials_content') ) : the_row(); ?>
        <div class="media">
            <div class="testimonials__img"
                style="background-image: url(<?php echo the_sub_field('testimonials_content_img') ?>)">
            </div>
            <div class="media-body">
                <h5 class="mt-0">
                    <?php echo the_sub_field('testimonials_content_name');  ?></h5>
                <p><?php echo the_sub_field('testimonials_content_desc');  ?></p>
            </div>
            </div>
    <?php endwhile;
else :
endif;
?></div>
</div>