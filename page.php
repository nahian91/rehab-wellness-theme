<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

<main id="primary" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        
        // This is the magic line that lets Elementor render the page content
        the_content();

        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
    endwhile;
    ?>
</main><!-- #main -->

<?php
get_footer();