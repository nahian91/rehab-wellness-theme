<?php
/**
 * The template for displaying single case studies
 *
 * @package WordPress
 * @subpackage Custom_Theme
 */

get_header(); ?>

<?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

<div class="page-case-study-single py-5">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-4 order-2 order-lg-1">
                <div class="page-single-sidebar">
                    
                    <div class="page-category-list case-study-category-list wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="page-category-list-title">Case Study Information</h2>

                        <div class="case-study-category-item-list">
                            <div class="case-study-category-item">
                                <h2>Client:</h2>
                                <p>Darlene Robertson</p>
                            </div>
                            <div class="case-study-category-item"> 
                                <h2>Start Date:</h2>
                                <p>18 November, 2025</p>
                            </div>
                            <div class="case-study-category-item">
                                <h2>Treatment Cost:</h2>
                                <p>$280.00</p>
                            </div>
                            <div class="case-study-category-item">
                                <h2>Total Duration:</h2>
                                <p>06 Month</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="col-lg-8 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="case-study-single-content">
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                        <div class="page-single-image mb-4">
                            <figure class="image-anime reveal">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'full', [ 'class' => 'img-fluid', 'alt' => esc_attr( get_the_title() ) ] ); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-image-1.jpg' ); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                            </figure>
                        </div>
                        <div class="case-study-entry">
                            <h1 class="entry-title mb-4"><?php the_title(); ?></h1>
                            
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>

                            <div class="case-study-solution mt-5">
                                <h2 class="text-anime-style-3 mb-3" data-cursor="-opaque">Solutions implemented</h2>
                                <p class="wow fadeInUp">To address the identified challenges, we introduced a series of strategic improvements focused on enhancing efficiency, patient experience, and quality of care.</p>

                                <div class="case-study-solution-item-list mt-4">
                                    <div class="case-study-solution-item wow fadeInUp mb-4" data-wow-delay="0.2s">
                                        <div class="case-study-solution-item-image">
                                            <figure class="image-anime">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-solution-item-image-1.jpg' ); ?>" alt="Solution 01">
                                            </figure>
                                        </div>
                                        <div class="case-study-solution-item-content">
                                            <span>Solutions - 01</span>
                                            <h3>Conducted staff training programs focused on pediatric care best practices</h3>
                                            <ul>
                                                <li>Provided staff training in pediatric care best practices</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="case-study-solution-item wow fadeInUp mb-4" data-wow-delay="0.4s">
                                        <div class="case-study-solution-item-image">
                                            <figure class="image-anime">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-solution-item-image-2.jpg' ); ?>" alt="Solution 02">
                                            </figure>
                                        </div>
                                        <div class="case-study-solution-item-content">
                                            <span>Solutions - 02</span>
                                            <h3>Integrated modern diagnostic tools for faster accurate and reliable treatment</h3>
                                            <ul>
                                                <li>Optimized patient flow to improve service efficiency overall</li>
                                            </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            <div class="case-study-result mt-5">
                                <h2 class="text-anime-style-3 mb-3" data-cursor="-opaque">Results achieved</h2>
                                <p class="wow fadeInUp">The implemented improvements led to significant positive outcomes in both patient care and efficiency. Waiting times were greatly reduced, allowing children to receive timely medical attention.</p>

                                <div class="case-study-result-body d-flex flex-wrap align-items-center mt-4">
                                    <div class="case-study-result-image-box wow fadeInUp mb-4 me-lg-4" data-wow-delay="0.2s">
                                        <div class="case-study-result-image">
                                            <figure>
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-result-image.jpg' ); ?>" alt="Results Overview">
                                            </figure>
                                        </div>
                                        <div class="case-study-result-counter-item">
                                            <div class="icon-box">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon-case-study-result-counter-item.svg' ); ?>" alt="Counter Icon">
                                            </div>
                                            <div class="case-study-result-counter-item-content">
                                                <h2><span class="counter">12</span>+</h2>
                                                <p>Years of Experience</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="case-study-result-content wow fadeInUp mb-4" data-wow-delay="0.4s">
                                        <p>Additionally, the use of advanced diagnostic tools and improved workflows increased the accuracy and effectiveness of treatments.</p>
                                        <ul>
                                            <li>Reduced Patient Wait Time Significantly</li>
                                            <li>Improved Patient & Parent Satisfaction</li>
                                            <li>Better Engagement With Young Patients</li>
                                            <li>Increased Overall Efficiency In Pediatric Services</li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        <div class="page-single-faqs mt-5">
                            <div class="section-title mb-4">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Frequently Asked Questions</h2>
                            </div>
                            <div class="faq-accordion accordion" id="dptSingleCaseStudyAccordion">
                                <div class="accordion-item wow fadeInUp mb-3">
                                    <h2 class="accordion-header" id="dptHeading1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dptCollapse1" aria-expanded="false" aria-controls="dptCollapse1">
                                            1. How can I book an appointment with a doctor?
                                        </button>
                                    </h2>
                                    <div id="dptCollapse1" class="accordion-collapse collapse" role="region" aria-labelledby="dptHeading1" data-bs-parent="#dptSingleCaseStudyAccordion">
                                        <div class="accordion-body">
                                            <p>We provide a wide range of services including general checkups, cardiology, pediatrics, orthopedics, dermatology, and diagnostic tests.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp mb-3" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="dptHeading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dptCollapse2" aria-expanded="false" aria-controls="dptCollapse2">
                                            2. Do you provide emergency medical services?
                                        </button>
                                    </h2>
                                    <div id="dptCollapse2" class="accordion-collapse collapse" role="region" aria-labelledby="dptHeading2" data-bs-parent="#dptSingleCaseStudyAccordion">
                                        <div class="accordion-body">
                                            <p>We provide a wide range of services including general checkups, cardiology, pediatrics, orthopedics, dermatology, and diagnostic tests.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp mb-3" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="dptHeading3">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#dptCollapse3" aria-expanded="true" aria-controls="dptCollapse3">
                                            3. What medical services do you provide?
                                        </button>
                                    </h2>
                                    <div id="dptCollapse3" class="accordion-collapse collapse show" role="region" aria-labelledby="dptHeading3" data-bs-parent="#dptSingleCaseStudyAccordion">
                                        <div class="accordion-body">
                                            <p>We provide a wide range of services including general checkups, cardiology, pediatrics, orthopedics, dermatology, and diagnostic tests.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp mb-3" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="dptHeading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dptCollapse4" aria-expanded="false" aria-controls="dptCollapse4">
                                            4. How early should I arrive for my appointment?
                                        </button>
                                    </h2>
                                    <div id="dptCollapse4" class="accordion-collapse collapse" role="region" aria-labelledby="dptHeading4" data-bs-parent="#dptSingleCaseStudyAccordion">
                                        <div class="accordion-body">
                                            <p>We provide a wide range of services including general checkups, cardiology, pediatrics, orthopedics, dermatology, and diagnostic tests.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp mb-3" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="dptHeading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dptCollapse5" aria-expanded="false" aria-controls="dptCollapse5">
                                            5. What should I bring to my medical appointment?
                                        </button>
                                    </h2>
                                    <div id="dptCollapse5" class="accordion-collapse collapse" role="region" aria-labelledby="dptHeading5" data-bs-parent="#dptSingleCaseStudyAccordion">
                                        <div class="accordion-body">
                                            <p>We provide a wide range of services including general checkups, cardiology, pediatrics, orthopedics, dermatology, and diagnostic tests.</p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>

                </div>
                </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>