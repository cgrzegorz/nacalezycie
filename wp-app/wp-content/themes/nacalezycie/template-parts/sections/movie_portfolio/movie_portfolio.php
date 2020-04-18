<div class="movieListMain moviePortfolio">
    <div class="container">
        <div class="row justify-content-md-center">
            <?php $movies = get_sub_field('movie_portfolio_content'); ?>
            <?php foreach ( $movies as $movie ){ ?>
            <div class="col-12 col-md-12 movieListMain__item">
                <p class="movieListMain__item__title">
                    <?php echo $movie['movie_portfolio_content_small'] ?>
                </p>
                <p class="movieListMain__item__desc">
                    <?php echo $movie['movie_portfolio_content_big'] ?>
                </p>
                <div class="movieListMain__item__movie">
                    <iframe src="https://player.vimeo.com/video/<?php echo $movie['movie_portfolio_content_vimeo'] ?>"
                        width="740" height="460" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
            <?php
} ?>
        </div>
    </div>
</div>