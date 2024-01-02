<?php
/**
 * The template for the home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' ); 

?>

<div id="page-wrapper">

    <div class="container-fluid g-0" id="content" tabindex="-1">

        <div class="row">

            <main class="site-main" id="main">
                <?php get_template_part( 'page-templates/home-hero' );?>


            </main>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();