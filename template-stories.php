<?php 
/* Template Name: Stories */
get_header(); 
?>

<?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

<div class="page-service-single-full py-5">
    <div class="container">

        <!-- Case Studies Section -->
        <div class="service-facilities-box mt-5 pt-5">
            
            <div class="row">
                <?php 
                $dpt_args = [
                    'post_type'      => 'case-study', // Matches your exact custom post type slug
                    'posts_per_page' => -1,           // Displays all case studies; change to a specific number if pagination is preferred
                    'post_status'    => 'publish',
                ];

                $dpt_query = new WP_Query( $dpt_args );
                $dpt_index = 0;

                if ( $dpt_query->have_posts() ) :
                    while ( $dpt_query->have_posts() ) : $dpt_query->the_post();
                        
                        // Dynamically calculate staggered animation delay (e.g., 0s, 0.2s, 0.4s, 0.6s)
                        $dpt_delay = $dpt_index > 0 ? sprintf( '%.1fs', $dpt_index * 0.2 ) : '';
                        
                        // Fallback handling if excerpt field is empty
                        $dpt_excerpt = has_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 15, '...' );
                        ?>
                        
                        <div class="col-xl-4 col-md-6 mb-4">
                            <!-- Case Study Item Start -->
                            <div class="case-study-item wow fadeInUp" <?php echo ! empty( $dpt_delay ) ? 'data-wow-delay="' . esc_attr( $dpt_delay ) . '"' : ''; ?>>
                                <div class="case-study-item-image">
                                    <a href="<?php the_permalink(); ?>" data-cursor-text="View">
                                        <figure>
                                            <?php if ( has_post_thumbnail() ) : ?>
                                                <?php the_post_thumbnail( 'large', [ 'alt' => esc_attr( get_the_title() ) ] ); ?>
                                            <?php else : ?>
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/case-study-image-1.jpg" alt="<?php the_title_attribute(); ?>">
                                            <?php endif; ?>
                                        </figure>
                                    </a>
                                </div>
                                <div class="case-study-item-content">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p><?php echo esc_html( $dpt_excerpt ); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn-default">View More</a>
                                </div>
                            </div>
                            <!-- Case Study Item End -->
                        </div>

                        <?php 
                        $dpt_index++;
                    endwhile;
                    wp_reset_postdata();
                else : ?>
                    <div class="col-12 text-center py-4">
                        <p class="text-muted">No case studies found.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>