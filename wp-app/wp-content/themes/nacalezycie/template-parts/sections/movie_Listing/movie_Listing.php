<div class="movieListMain">
    <div class="container">
        <div class="row justify-content-md-center">
            <?php $movies = get_sub_field('movie_listing_item'); ?>
            <?php foreach ( $movies as $movie ){ ?>
            <div class="col-12 col-md-6 movieListMain__item">
                <p class="movieListMain__item__title">
                    <?php echo $movie['movie_listing_item_title'] ?>
                </p>
                <p class="movieListMain__item__desc">
                    <?php echo $movie['movie_listing_item_desc'] ?>
                </p>
                <div class="movieListMain__item__movie">
                    <iframe src="https://player.vimeo.com/video/<?php echo $movie['movie_listing_item_idVimeo'] ?>"
                        width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
            <?php
} ?>
        </div>
        <div class="movieListMain__textLine">
            <p class="movieListMain__textLine__elem">Chcesz Więcej ?</p>
        </div>
        <div class="postListing__button">
            <a class="postListing__button__link movieListMain__link" href="<?php site_url(); ?>/filmy">Zobacz Teraz
                !</a>
        </div>
    </div>
</div>