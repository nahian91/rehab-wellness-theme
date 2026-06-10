<?php
/**
 * The template for displaying single case studies
 *
 * @package WordPress
 * @subpackage Custom_Theme
 */

get_header(); ?>

<?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

<?php
// Fetch Advanced Custom Fields (ACF) Values
$case_client_name      = get_field( 'case_client_name' );
$case_start_date       = get_field( 'case_start_date' );
$case_treatment_cost   = get_field( 'case_treatment_cost' );
$case_total_duration   = get_field( 'case_total_duration' );
$case_long_description = get_field( 'case_long_description' );

$solutions_title       = get_field( 'solutions_title' );
$solutions_description = get_field( 'solutions_description' );

$results_title         = get_field( 'results_title' );
$results_description   = get_field( 'results_description' );
?>

<div class="page-case-study-single py-5">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-4 order-2 order-lg-1">
                <div class="page-single-sidebar">
                    
                    <div class="page-category-list case-study-category-list wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="page-category-list-title">Case Study Information</h2>

                        <div class="case-study-category-item-list">
                            <?php if ( ! empty( $case_client_name ) ) : ?>
                                <div class="case-study-category-item">
                                    <h2>Client:</h2>
                                    <p><?php echo esc_html( $case_client_name ); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if ( ! empty( $case_start_date ) ) : ?>
                                <div class="case-study-category-item"> 
                                    <h2>Start Date:</h2>
                                    <p><?php echo esc_html( $case_start_date ); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if ( ! empty( $case_treatment_cost ) ) : ?>
                                <div class="case-study-category-item">
                                    <h2>Treatment Cost:</h2>
                                    <p><?php echo esc_html( $case_treatment_cost ); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if ( ! empty( $case_total_duration ) ) : ?>
                                <div class="case-study-category-item">
                                    <h2>Total Duration:</h2>
                                    <p><?php echo esc_html( $case_total_duration ); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-8 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="case-study-single-content">
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                        <div class="page-single-image mb-4">
                            <figure class="image-anime">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'full', [ 'class' => 'img-fluid', 'alt' => esc_attr( get_the_title() ) ] ); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-image-1.jpg' ); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                            </figure>
                        </div>

                        <div class="case-study-entry">
                            
                            <div class="entry-content">
                                <?php 
                                if ( ! empty( $case_long_description ) ) : 
                                    echo wp_kses_post( wpautop( $case_long_description ) );
                                else :
                                    the_content();
                                endif; 
                                ?>
                            </div>

                            <?php if ( have_rows( 'solutions_list' ) || ! empty( $solutions_title ) || ! empty( $solutions_description ) ) : ?>
                                <div class="case-study-solution mt-5">
                                    <?php if ( ! empty( $solutions_title ) ) : ?>
                                        <h2 class="text-anime-style-3 mb-3" data-cursor="-opaque"><?php echo esc_html( $solutions_title ); ?></h2>
                                    <?php endif; ?>
                                    
                                    <?php if ( ! empty( $solutions_description ) ) : ?>
                                        <p class="wow fadeInUp"><?php echo esc_html( $solutions_description ); ?></p>
                                    <?php endif; ?>

                                    <?php if ( have_rows( 'solutions_list' ) ) : ?>
                                        <div class="case-study-solution-item-list mt-4">
                                            <?php 
                                            $sol_counter = 1;
                                            while ( have_rows( 'solutions_list' ) ) : the_row(); 
                                                $sol_label       = get_sub_field( 'solutions_list_label' );
                                                $sol_title       = get_sub_field( 'solutions_list_title' );
                                                $sol_description = get_sub_field( 'solutions_list_description' );
                                                $sol_delay       = 0.2 * $sol_counter;
                                                $img_toggle      = ( $sol_counter % 2 === 0 ) ? 2 : 1;
                                                ?>
                                                <div class="case-study-solution-item wow fadeInUp mb-4" data-wow-delay="<?php echo esc_attr( $sol_delay ); ?>s">
                                                    <div class="case-study-solution-item-image">
                                                        <figure class="image-anime">
                                                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-solution-item-image-' . $img_toggle . '.jpg' ); ?>" alt="<?php echo esc_attr( $sol_title ); ?>">
                                                        </figure>
                                                    </div>
                                                    <div class="case-study-solution-item-content">
                                                        <?php if ( ! empty( $sol_label ) ) : ?>
                                                            <span><?php echo esc_html( $sol_label ); ?></span>
                                                        <?php endif; ?>
                                                        
                                                        <?php if ( ! empty( $sol_title ) ) : ?>
                                                            <h3><?php echo esc_html( $sol_title ); ?></h3>
                                                        <?php endif; ?>
                                                        
                                                        <?php if ( ! empty( $sol_description ) ) : ?>
                                                            <p><?php echo esc_html( $sol_description ); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <?php 
                                                $sol_counter++;
                                            endwhile; 
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if ( have_rows( 'results_list' ) || ! empty( $results_title ) || ! empty( $results_description ) ) : ?>
                                <div class="case-study-result mt-5">
                                    <?php if ( ! empty( $results_title ) ) : ?>
                                        <h2 class="text-anime-style-3 mb-3" data-cursor="-opaque"><?php echo esc_html( $results_title ); ?></h2>
                                    <?php endif; ?>
                                    
                                    <?php if ( ! empty( $results_description ) ) : ?>
                                        <p class="wow fadeInUp"><?php echo esc_html( $results_description ); ?></p>
                                    <?php endif; ?>

                                    <?php if ( have_rows( 'results_list' ) ) : ?>
                                        <ul>
                                            <?php while ( have_rows( 'results_list' ) ) : the_row(); 
                                                $res_title       = get_sub_field( 'results_list_title' );
                                                $res_description = get_sub_field( 'results_list_description' );
                                                ?>
                                                <li>
                                                    <?php if ( ! empty( $res_title ) ) : ?>
                                                        <strong><?php echo esc_html( $res_title ); ?></strong>
                                                    <?php endif; ?>
                                                    
                                                    <?php if ( ! empty( $res_description ) ) : ?>
                                                        <span class="d-block mt-1"><?php echo esc_html( $res_description ); ?></span>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                        </div>

                        <?php if ( have_rows( 'faq_list' ) ) : ?>
                            <div class="page-single-faqs mt-5">
                                <div class="section-title mb-4">
                                    <h2 class="text-anime-style-3" data-cursor="-opaque">Frequently Asked Questions</h2>
                                </div>
                                <div class="faq-accordion accordion" id="dptSingleCaseStudyAccordion">
                                    <?php 
                                    $faq_counter = 1;
                                    while ( have_rows( 'faq_list' ) ) : the_row(); 
                                        $faq_title       = get_sub_field( 'faq_list_title' );
                                        $faq_description = get_sub_field( 'faq_list_description' );
                                        $faq_delay       = 0.2 * ( $faq_counter - 1 );
                                        $is_first        = ( $faq_counter === 1 );
                                        ?>
                                        <div class="accordion-item wow fadeInUp mb-3" data-wow-delay="<?php echo esc_attr( $faq_delay ); ?>s">
                                            <h2 class="accordion-header" id="dptHeading<?php echo esc_attr( $faq_counter ); ?>">
                                                <button class="accordion-button <?php echo $is_first ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#dptCollapse<?php echo esc_attr( $faq_counter ); ?>" aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>" aria-controls="dptCollapse<?php echo esc_attr( $faq_counter ); ?>">
                                                    <?php echo esc_html( $faq_title ); ?>
                                                </button>
                                            </h2>
                                            <div id="dptCollapse<?php echo esc_attr( $faq_counter ); ?>" class="accordion-collapse collapse <?php echo $is_first ? 'show' : ''; ?>" role="region" aria-labelledby="dptHeading<?php echo esc_attr( $faq_counter ); ?>" data-bs-parent="#dptSingleCaseStudyAccordion">
                                                <div class="accordion-body">
                                                    <p><?php echo esc_html( $faq_description ); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                        $faq_counter++;
                                    endwhile; 
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>

                    <?php endwhile; endif; ?>

                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>