<?php
/**
 * Template Name: International
 *
 * A high-performance, structurally optimized full-width template 
 * designed for international patient coordination, combining asymmetric 
 * sidebar information desks, sequential processing flows, and a service infrastructure matrix.
 *
 * @package WordPress
 * @subpackage Custom_Theme
 */

get_header(); 
?>

<?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

<div class="dpt-international-collaboration-page py-5">
    <div class="container">
        
        <!-- Hero Section: Premium Image Reveal & Core Intent -->
        <div class="row align-items-center mb-5 pb-4">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="dpt-single-image-wrapper">
                    <figure class="image-anime mb-0">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'full', [ 'class' => 'img-fluid rounded shadow-lg dpt-hero-thumb' ] ); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/international.png' ); ?>" class="img-fluid rounded shadow-lg dpt-hero-thumb" alt="International Patient Care">
                        <?php endif; ?>
                    </figure>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dpt-service-hero-entry ps-lg-5">
                    <span class="badge bg-primary text-uppercase px-3 py-2 mb-2 rounded-pill dpt-step-badge">Medical Network</span>
                    <h1 class="text-anime-style-3 mb-4 font-weight-bold">World-Class Medical Infrastructure & Collaboration</h1>
                    <p>We bridge borders to provide elite healthcare access, synchronizing clinical intelligence with personalized international hospitality frameworks.</p>
                    <div class="text-muted dpt-hero-description-text entry-content">
                        <?php 
                        if ( have_posts() ) : 
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;
                        endif; 
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5 dpt-divider">

        <!-- Split Layout: Sidebar Info Desk + Sequential Roadmap -->
        <div class="row pt-2">
            
            <!-- Left Sidebar: International Desk Operational Metadata -->
            <div class="col-lg-4 order-2 order-lg-1 mt-5 mt-lg-0">
                <div class="dpt-sticky-sidebar-panel">
                    <div class="page-category-list wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="page-category-list-title">International Desk Support</h2>

                        <div class="case-study-category-item-list">
                            <div class="case-study-category-item">
                                <h2>Dedicated Helpline:</h2>
                                <p>+880 171X-XXXXXX</p>
                            </div>

                            <div class="case-study-category-item">
                                <h2>Support Email:</h2>
                                <p>globalcare@domain.com</p>
                            </div>

                            <div class="case-study-category-item">
                                <h2>Languages Supported:</h2>
                                <p>English, Bengali, Arabic, Hindi, Urdu</p>
                            </div>

                            <div class="case-study-category-item">
                                <h2>Visa Assistance Response:</h2>
                                <p>Within 24-48 Hours (Invitation Letters provided)</p>
                            </div>

                            <div class="case-study-category-item">
                                <h2>Airport Coordination:</h2>
                                <p>Complimentary pickup & local transit setup</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Area: Case-Study Style Processing Workflow -->
            <div class="col-lg-8 order-1 order-lg-2">
                <div class="dpt-collaboration-workflow-wrapper">
                    <h2 class="text-anime-style-3 mb-3">The Collaboration Roadmap</h2>
                    <p class="text-muted mb-4">We ensure a frictionless ecosystem for patients traveling across borders, managing absolute clinical and logistical pathways.</p>
                    
                    <div class="dpt-solution-timeline-list mt-4">
                        <?php 
                        $dpt_steps = [
                            [
                                'label' => 'Phase 01',
                                'title' => 'Remote Evaluation & Digital Diagnosis',
                                'desc'  => 'Patients submit historical electronic health records (EHR) via our encrypted portal. Specialized clinical boards evaluate data assets to formulate tentative strategies.'
                            ],
                            [
                                'label' => 'Phase 02',
                                'title' => 'Legal Documentation & Visa Endorsement',
                                'desc'  => 'Our legal department registers documentation parameters and dispatches formal institutional invitation letters to local embassies, accelerating priority processing lanes.'
                            ],
                            [
                                'label' => 'Phase 03',
                                'title' => 'Integrated Institutional Clinical Care',
                                'desc'  => 'Upon physical arrival, patients receive targeted attention from dedicated case handlers, directing swift motion through specialized lab analytics and diagnostic systems.'
                            ],
                            [
                                'label' => 'Phase 04',
                                'title' => 'Continuous Telehealth Continuity Plan',
                                'desc'  => 'Post-discharge timelines do not terminate support grids. Automated digital networks hand over follow-up telemetry streams back to native primary medical practitioners.'
                            ]
                        ];

                        foreach ( $dpt_steps as $dpt_index => $dpt_step ) :
                            $dpt_step_delay = 0.15 * ( $dpt_index + 1 );
                            $dpt_image_toggle = ( ( $dpt_index + 1 ) % 2 === 0 ) ? 2 : 1;
                            ?>
                            <div class="dpt-solution-card-row mb-4 p-4 rounded border bg-white wow fadeInUp" data-wow-delay="<?php echo esc_attr( $dpt_step_delay ); ?>s">
                                <div class="row align-items-center">
                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="dpt-solution-card-image-box">
                                            <figure class="image-anime mb-0 rounded overflow-hidden">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-solution-item-image-' . $dpt_image_toggle . '.jpg' ); ?>" class="img-fluid" alt="<?php echo esc_attr( $dpt_step['title'] ); ?>">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="dpt-solution-card-body ps-md-2">
                                            <span class="badge bg-primary text-uppercase px-3 py-2 mb-2 rounded-pill dpt-step-badge"><?php echo esc_html( $dpt_step['label'] ); ?></span>
                                            <h3 class="h5 font-weight-bold mb-2 text-dark"><?php echo esc_html( $dpt_step['title'] ); ?></h3>
                                            <p class="text-muted mb-0 small"><?php echo esc_html( $dpt_step['desc'] ); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>

        <!-- Facilities Matrix Infrastructure Section -->
        <div class="dpt-facilities-matrix-section mt-5 pt-5">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Services</span>
                        <h2 class="text-anime-style-3">Comprehensive healthcare services for better living</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <?php 
                $dpt_facilities = [
                    [ 'icon' => 'fa-microscope', 'title' => 'Diagnostic Lab', 'desc' => 'AI-powered pathology for rapid results.' ],
                    [ 'icon' => 'fa-heart-pulse', 'title' => 'Cardiac Care', 'desc' => 'State-of-the-art telemetry monitoring.' ],
                    [ 'icon' => 'fa-bed-pulse', 'title' => 'Smart ICU', 'desc' => '24/7 critical care tracking systems.' ],
                    [ 'icon' => 'fa-laptop-medical', 'title' => 'Telehealth Suite', 'desc' => 'Secure virtual consultation portal.' ],
                    [ 'icon' => 'fa-x-ray', 'title' => 'Digital Imaging', 'desc' => 'High-resolution X-ray and MRI scans.' ],
                    [ 'icon' => 'fa-syringe', 'title' => 'Pharmacy Station', 'desc' => 'On-site stocked medicine dispensary.' ],
                    [ 'icon' => 'fa-user-nurse', 'title' => 'Recovery Lounge', 'desc' => 'Comfort-focused post-op recovery zones.' ],
                    [ 'icon' => 'fa-shield-virus', 'title' => 'Sterilization Hub', 'desc' => 'Hospital-grade sanitization protocols.' ],
                    [ 'icon' => 'fa-wheelchair', 'title' => 'Accessibility Zone', 'desc' => 'Full ADA-compliant movement areas.' ],
                    [ 'icon' => 'fa-calendar-check', 'title' => 'Booking Kiosk', 'desc' => 'Fast-track digital appointment setup.' ],
                    [ 'icon' => 'fa-dna', 'title' => 'Genomic Testing', 'desc' => 'Advanced personalized health reports.' ],
                    [ 'icon' => 'fa-notes-medical', 'title' => 'Record Archives', 'desc' => 'Secure encrypted health history vault.' ]
                ];

                foreach ( $dpt_facilities as $dpt_f_index => $dpt_f_item ) :
                    $dpt_f_delay = ( $dpt_f_index * 0.08 ); 
                    ?>
                    <div class="col-xl-3 col-md-4 mb-4">
                        <!-- Service Item Start -->
                        <div class="service-item-prime international-paitent" data-wow-delay="<?php echo esc_attr( $dpt_f_delay ); ?>s">
                            <div class="service-item-header-prime">
                                <div class="icon-box">
                                    <i class="fa-solid <?php echo esc_attr( $dpt_f_item['icon'] ); ?> fa-2x text-primary"></i>
                                </div>
                            </div>
                            <div class="sevice-item-content-prime">
                                <h2><a href="#"><?php echo esc_html( $dpt_f_item['title'] ); ?></a></h2>
                                <p><?php echo esc_html( $dpt_f_item['desc'] ); ?></p>
                            </div>
                        </div>
                        <!-- Service Item End -->
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- FAQ System Infrastructure Accordion -->
        <div class="our-faqs mt-5 pt-4">
            <div class="row">
                <div class="col-xl-5">
                    <!-- FAQ CTA Box Start -->
                    <div class="faq-cta-box">
                        <!-- FAQ CTA Image Start -->
                        <div class="faq-cta-image">
                            <figure class="image-anime">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq-cta-image.jpg' ); ?>" alt="Support Assistance">
                            </figure>
                        </div>
                        <!-- FAQ CTA Image End -->

                        <!-- FAQ CTA Body Start -->
                        <div class="faq-cta-body">
                            <!-- FAQ CTA Content Start -->
                            <div class="faq-cta-content wow fadeInUp">
                                <h3>Have any Questions!</h3>
                                <p>If you have any questions about our medical services, appointments, or treatments, our team is here to help. We are committed to providing clear information and friendly support to ensure you receive the care and guidance you need.</p>
                            </div>
                            <!-- FAQ CTA Content End -->

                            <!-- FAQ CTA Button Start -->
                            <div class="faq-cta-btn wow fadeInUp" data-wow-delay="0.2s">
                                <a href="#" class="btn-default">View all Questions</a>
                            </div>
                            <!-- FAQ CTA Button End -->
                        </div>
                        <!-- FAQ CTA Body End -->
                    </div>
                    <!-- FAQ CTA Box End -->
                </div>

                <div class="col-xl-7">
                    <div class="section-title section-title-center mb-4">
                        <span class="section-sub-title wow fadeInUp">FAQ Guide</span>
                        <h2 class="text-anime-style-3">Frequently Asked Operational Processes</h2>
                    </div>

                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="accordion">
                        <!-- FAQ Item 1 Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    1. How can I book an appointment with a doctor from overseas?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" role="region" aria-labelledby="heading1" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>We provide a wide range of services including general checkups, cardiology, pediatrics, orthopedics, dermatology, and diagnostic tests.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item 1 End -->

                        <!-- FAQ Item 2 Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    2. Do you provide emergency medical coordination for arrival?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" role="region" aria-labelledby="heading2" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>We provide a wide range of services including general checkups, cardiology, pediatrics, orthopedics, dermatology, and diagnostic tests.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item 2 End -->

                        <!-- FAQ Item 3 Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                    3. What medical services do you provide inside the matrix?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse show" role="region" aria-labelledby="heading3" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>We provide a wide range of services including general checkups, cardiology, pediatrics, orthopedics, dermatology, and diagnostic tests.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item 3 End -->

                        <!-- FAQ Item 4 Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    4. How early should I arrive for my integrated appointments?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" role="region" aria-labelledby="heading4" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>We provide a wide range of services including general checkups, cardiology, pediatrics, orthopedics, dermatology, and diagnostic tests.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item 4 End -->

                        <!-- FAQ Item 5 Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    5. What should I bring to my initial medical consultation?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" role="region" aria-labelledby="heading5" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>We provide a wide range of services including general checkups, cardiology, pediatrics, orthopedics, dermatology, and diagnostic tests.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item 5 End -->
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>