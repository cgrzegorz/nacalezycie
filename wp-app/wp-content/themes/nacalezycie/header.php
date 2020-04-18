<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nacalezycie
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="<?php echo get_home_url() ?>"><?php esc_html_e( 'Skip to content', 'nacalezycie' ); ?></a>
        <header id="masthead" class="site-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand logoMenu__mobile" href="#">
                    <img class="logoMenu" src="<?php echo the_field('logo', 'option')?>" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav menuLinks ">
                        <?php
                    wp_nav_menu( array(
                        'menu'        => 'MainMenu1',
                        'container' => '',
                        'menu_class'      => 'MenuLinks',
                        'items_wrap' => '%3$s'
                    ) );
                    ?>
                        <li class="nav-item logoMenu__desktop">
                            <a class="nav-link" href="<?php echo get_home_url() ?>" tabindex="-1" aria-disabled="true">
                                <img class="logoMenu" src="<?php echo the_field('logo', 'option')?>" alt="logo">
                            </a>
                        </li>
                        <?php wp_nav_menu( array(
                    'menu'        => 'MainMenu2',
                    'container' => '',
                    'menu_class'      => 'MenuLinks',
                    'items_wrap' => '%3$s'
                    ) );
                    ?>
                    </ul>
                </div>
            </nav>


        </header><!-- #masthead -->

        <div id="content" class="site-content">