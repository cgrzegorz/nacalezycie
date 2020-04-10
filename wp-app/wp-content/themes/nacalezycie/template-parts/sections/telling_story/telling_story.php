<div class="tellingStories">
    <div class="row no-gutters">
        <div class="col-12 col-lg-7">
            <div class="tellingStories__first">
                <p class="tellingStories__first__title"><?php echo get_sub_field('telling_story_title') ?></p>
                <div class="tellingStories__first__desc">
                    <p class="tellingStories__first__desc__text">
                        <?php echo get_sub_field('telling_story_desc') ?>
                    </p>
                    <img class="tellingStories__first__desc__img"
                        src="<?php echo get_sub_field('telling_story_left_img')[url] ?>" />
                    <div class="tellingStories__first__small_section">
                        <p><?php echo get_sub_field('telling_story_left_text') ?></p>
                        <img src="<?php echo get_sub_field('telling_story_flowers')[url]?>" alt="flower" />
                        <p><?php echo get_sub_field('telling_story_right_text') ?></p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5 tellingStories__second__mobilePhone">
            <div class="tellingStories__second">
                <img class="imgFullWidth" src="<?php echo get_sub_field('telling_story__right_Image')['sizes']['medium_large'] ?>"
                    alt="couple">
                <div class="tellingStories__second__text">
                    <p><?php echo get_sub_field('telling_story__right_text_one') ?><br><?php echo get_sub_field('telling_story__right_text_two') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>