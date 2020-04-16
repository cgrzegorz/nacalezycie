<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nacalezycie
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="footer">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12 col-md-3 footer__left">
                    <div class="footer__instagramLink">
                        <a class href="https://www.instagram.com/nacalezycie/">
                            <i class="fab fa-instagram fa-lg"></i>
                            <span>@nacalezycie</span>
                        </a>
                    </div>
                    <div class="footer__socialLinks">
                        <a href="https://www.facebook.com/nacalezyciefilm">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a class="footer__centerIcon" href="https://vimeo.com/nacalezycie">
                            <i class="fab fa-vimeo-v"></i>
                        </a>
                        <a href="https://www.instagram.com/nacalezycie/">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div id="instafeed"></div>
                </div>

            </div>

        </div>
        <div class="footer__backGround">
        </div>
    </div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<?php wp_footer(); ?>

</body>

</html>