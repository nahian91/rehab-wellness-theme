<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<!-- Custom Page Header Start -->
<div class="page-header dark-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1><?php the_title(); ?></h1> 
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Custom Page Header End -->

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