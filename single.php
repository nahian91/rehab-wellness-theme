<?php
/**
 * The template for displaying all single posts
 *
 * @package rehab-wellness-theme
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    while ( have_posts() ) :
        the_post();
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="page-header dark-section parallaxie">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header-box">
                            <h1 class="text-anime-style-3" data-cursor="-opaque"><?php the_title(); ?></h1>
                            <nav class="wow fadeInUp">
                                <div class="post-single-meta wow fadeInUp">
                                    <ol class="breadcrumb">
                                        <li><i class="fa-regular fa-user"></i> <?php the_author(); ?></li>
                                        <li><i class="fa-regular fa-clock"></i> <?php echo get_the_date('j F, Y'); ?></li>
                                    </ol>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-single-post">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-image">
                                <figure class="image-anime">
                                    <?php the_post_thumbnail('full'); ?>
                                </figure>
                            </div>
                        <?php endif; ?>
                        <div class="post-content">
                            <div class="post-entry">
                                <?php the_content(); ?>
                            </div>

                            <div class="post-tag-links">
                                <div class="row align-items-center">
                                    <div class="col-lg-8">
                                        <div class="post-tags wow fadeInUp" data-wow-delay="0.5s">
                                            <span class="tag-links">
                                                <?php the_tags('Tags: ', ', ', ''); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </article>

    <?php
    endwhile; // End of the loop.
    ?>

</main><?php
get_footer();