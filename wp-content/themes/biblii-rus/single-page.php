<?php
/**
Template Name: single-page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package empty_theme
 */

get_header(); ?>
<!--=========================================================================-->
<!--=========================================================================-->
    <?php the_post();?>
    <?php the_content();?>
<!--=========================================================================-->
<!--=========================================================================-->
<?php
get_footer();
