<?php $images = get_sub_field('homeBanner__images'); ?>
<div class="hearoHeader">
<?php get_header(); ?>
<div id="carouselExampleIndicators" class="carousel slide carouser-banner" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php foreach( $images as $key => $image_id ): ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key?>"
            class="<?php if ($key == 0) { echo ' active'; } ?>"></li>
        <?php endforeach; ?>
    </ol>
    <div class="carousel-inner">
        <?php 
        if( $images ): ?>
        <?php foreach( $images as $key => $image_id ): ?>
        <div class="carousel-item <?php if ($key == 0) { echo ' active'; } ?>">
            <div class="carouser-banner__image-item"
                style="background-image: url('<?php echo esc_url($image_id['sizes']['2048x2048']); ?>')">
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>
