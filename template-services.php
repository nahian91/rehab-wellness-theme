<?php

/*
Template Name: Services
*/

get_header();?>

    <?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

    <!-- Page Service Section Start -->
<div class="page-service">
    <div class="container">
        <div class="row">
            <?php
            $dpt_args = array(
                'post_type'      => 'service',
                'posts_per_page' => 8,
                'orderby'        => 'date',
                'order'          => 'ASC'
            );
            $dpt_query = new WP_Query($dpt_args);

            if ($dpt_query->have_posts()) :
                $delay = 0;
                while ($dpt_query->have_posts()) : $dpt_query->the_post();
            ?>
                <div class="col-xl-4 col-md-6">
                    <!-- Service Item Royal Start -->
                    <div class="service-item-royal">
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="service-item-image-royal">
                                <a href="<?php the_permalink(); ?>" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>">
                                    </figure>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="service-item-body-royal">
                            <div class="service-item-content-royal">
                                <h2><?php the_title();?></h2>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                            </div>
                            <div class="service-item-btn-royal">
                                <a href="<?php the_permalink(); ?>" class="readmore-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item Royal End -->
                </div>
            <?php
                $delay += 0.2; 
                endwhile;
                wp_reset_postdata();
            else :
                echo '<div class="col-12"><p>No services found.</p></div>';
            endif;
            ?>
        </div>
    </div>
</div>
<!-- Page Service Section End -->




<?php get_footer(); ?>