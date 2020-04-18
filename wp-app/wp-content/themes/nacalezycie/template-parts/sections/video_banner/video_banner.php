<div class="movieBanner">
    <video autoplay muted loop poster="https://fakeimg.pl/350x200">
        <source src="<?php echo get_sub_field('video_banner_movie')['url']; ?>" type="video/mp4">
    </video>
    <div class="movieBanner__poster">
       <img src="<?php echo get_sub_field('video_banner_poster')['sizes']['1536x1536'] ?>"/>>
    </div>
    <h2><?php echo get_sub_field('video_banner_bigText'); ?></h2>
    <p><?php echo get_sub_field('video_banner_smallText'); ?></p>
    <a class="link_movie" href="<?php site_url(); ?>/kontakt">Napisz do Nas</a>
</div>
<div class="postListing__button link_movie_second">
            <a class="postListing__button__link movieListMain__link" href="<?php site_url(); ?>/filmy">Napisz do Nas</a>
        </div>




