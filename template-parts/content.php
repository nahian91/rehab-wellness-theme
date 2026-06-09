<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rehab-wellness-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- Page Header Section -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <!-- Dynamic Title -->
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

    <!-- Page Single Post Start -->
    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Dynamic Featured Image -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-image">
                            <figure class="image-anime reveal">
                                <?php the_post_thumbnail('full'); ?>
                            </figure>
                        </div>
                    <?php endif; ?>

                    <div class="post-content">
                        <div class="post-entry">
                            <!-- Dynamic Content -->
                            <?php the_content(); ?>
                        </div>

                        <!-- Post Tag Links -->
                        <div class="post-tag-links">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="post-tags wow fadeInUp" data-wow-delay="0.5s">
                                        <span class="tag-links">
                                            <?php the_tags('Tags: ', ', ', ''); ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- Social links remain static as they usually require a plugin or custom JS -->
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
