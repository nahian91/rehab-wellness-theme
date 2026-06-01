<?php get_header(); ?>

    <!-- Page Header Section Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1>Our Blog</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                ?>
                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item">
                        <div class="post-featured-image">
                            <a href="<?php the_permalink(); ?>">
                                <figure>
                                    <?php if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('large');
                                    } ?>
                                </figure>    
                            </a>
                            <div class="post-item-tags">
                                <?php the_category(', '); ?>
                            </div>                          
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <div class="post-item-btn">
                                <a href="<?php the_permalink(); ?>" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>
                <?php
                    endwhile;
                else :
                    echo '<p>No posts found.</p>';
                endif;
                ?>

                <div class="col-lg-12">
                    <!-- Pagination Start -->
                    <div class="page-pagination">
                        <?php
                        echo paginate_links( array(
                            'prev_text' => '<i class="fa-solid fa-angle-left"></i>',
                            'next_text' => '<i class="fa-solid fa-angle-right"></i>',
                        ) );
                        ?>
                    </div>
                    <!-- Pagination End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Blog End -->

<?php get_footer(); ?>