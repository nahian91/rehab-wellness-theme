<?php
/**
 * Template Name: International
 *
 *
 * @package WordPress
 * @subpackage Custom_Theme
 */

get_header(); 
?>

<?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

<div class="dpt-international-collaboration-page py-5">
    <div class="container">
        
        <!-- ==========================================
             HERO SECTION: ABOUT THE CENTER & MISSION 
             ========================================== -->
        <div class="row align-items-center mb-5 pb-4">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="dpt-single-image-wrapper">
                    <figure class="image-anime mb-0">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'full', [ 'class' => 'img-fluid rounded shadow-lg dpt-hero-thumb' ] ); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/international.png' ); ?>" class="img-fluid rounded shadow-lg dpt-hero-thumb" alt="International Clinical Collaboration Hub">
                        <?php endif; ?>
                    </figure>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dpt-service-hero-entry ps-lg-5">
                    <span class="badge bg-primary text-uppercase px-3 py-2 mb-2 rounded-pill dpt-step-badge">Global Partnership Network</span>
                    <h1 class="text-anime-style-3 mb-4 font-weight-bold">About Our International Collaboration Center</h1>
                    <p class="lead text-dark">We cross borders to bridge cutting-edge clinical intelligence, synchronizing academic innovation, advanced rehabilitation matrices, and specialized healthcare delivery with global institutions.</p>
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

        <!-- ==========================================
             SPLIT LAYOUT: FOUNDER PROFILE & PILLARS
             ========================================== -->
        <div class="row pt-2">
            
            <!-- Left Column: Founder Profile Panel -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="dpt-sticky-sidebar-panel">
                    <div class="page-category-list wow fadeInUp" data-wow-delay="0.1s" style="background: #f8f9fa; border-radius: 12px; padding: 30px;">
                        <div class="text-center mb-4">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/why-choose-us-image.png' ); ?>" class="img-fluid rounded-circle shadow mb-3" style="width: 150px; height: 150px; object-fit: cover;" alt="Founder Profile">
                            <h2 class="page-category-list-title mb-1" style="font-size: 22px;">Founder Profile</h2>
                        </div>

                        <div class="founder-biography-meta">
                            <p class="small text-muted mb-3">Driven by a vision to globalize advanced clinical infrastructure, our founder has engineered international ecosystems combining healthcare delivery with academic protocols.</p>
                            
                            <div class="case-study-category-item mb-3">
                                <h3 style="font-size: 14px; font-weight: 700;" class="text-dark mb-1">Key Affiliations:</h3>
                                <p class="small mb-0 text-muted">World Rehabilitation Federation, Global Telehealth Alliance</p>
                            </div>

                            <div class="case-study-category-item mb-3">
                                <h3 style="font-size: 14px; font-weight: 700;" class="text-dark mb-1">Research Focus:</h3>
                                <p class="small mb-0 text-muted">Neuro-regeneration paradigms, digitalized clinical pathways, and remote patient monitoring architectures.</p>
                            </div>

                            <div class="case-study-category-item">
                                <h3 style="font-size: 14px; font-weight: 700;" class="text-dark mb-1">Desk Contact:</h3>
                                <p class="small mb-0 text-muted">partnerships@domain.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Strategic Collaboration Framework -->
            <div class="col-lg-8">
                <div class="dpt-collaboration-workflow-wrapper">
                    <h2 class="text-anime-style-3 mb-3">Core Collaboration Frameworks</h2>
                    <p class="text-muted mb-4">We actively facilitate strategic resource exchange across four vital operational pillars, built for global health entities and academic boards.</p>
                    
                    <div class="dpt-solution-timeline-list mt-4">
                        <?php 
                        $dpt_frameworks = [
                            [
                                'label' => 'Pillar 01',
                                'title' => 'Training & Workshop Collaboration',
                                'desc'  => 'We host cross-border medical fellowships, hands-on clinical workshops, and continuous medical education (CME) acceleration streams focused on advanced rehabilitation methodologies.'
                            ],
                            [
                                'label' => 'Pillar 02',
                                'title' => 'Tele-Rehabilitation Ecosystems',
                                'desc'  => 'An enterprise-grade, encrypted remote care structure. We hand over real-time telemetry streams and clinical consulting access back to native medical practitioners globally.'
                            ],
                            [
                                'label' => 'Pillar 03',
                                'title' => 'Comprehensive Medical Tourism Support',
                                'desc'  => 'Seamless cross-border management framework offering priority medical visa invitation documentation, dedicated dual-language case handlers, and end-to-end travel transit coordination.'
                            ],
                            [
                                'label' => 'Pillar 04',
                                'title' => 'Visiting Expert Program',
                                'desc'  => 'An active pipeline allowing international clinical pioneers and specialized researchers to consult, co-operate in surgery, and lead structural masterclasses on site.'
                            ]
                        ];

                        foreach ( $dpt_frameworks as $dpt_index => $dpt_frame ) :
                            $dpt_step_delay = 0.15 * ( $dpt_index + 1 );
                            $dpt_image_toggle = ( ( $dpt_index + 1 ) % 2 === 0 ) ? 2 : 1;
                            ?>
                            <div class="dpt-solution-card-row mb-4 p-4 rounded border bg-white wow fadeInUp" data-wow-delay="<?php echo esc_attr( $dpt_step_delay ); ?>s">
                                <div class="row align-items-center">
                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="dpt-solution-card-image-box">
                                            <figure class="image-anime mb-0 rounded overflow-hidden">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/post-' . $dpt_image_toggle . '.jpg' ); ?>" class="img-fluid" alt="<?php echo esc_attr( $dpt_frame['title'] ); ?>">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="dpt-solution-card-body ps-md-2">
                                            <span class="badge bg-primary text-uppercase px-3 py-2 mb-2 rounded-pill dpt-step-badge"><?php echo esc_html( $dpt_frame['label'] ); ?></span>
                                            <h3 class="h5 font-weight-bold mb-2 text-dark"><?php echo esc_html( $dpt_frame['title'] ); ?></h3>
                                            <p class="text-muted mb-0 small"><?php echo esc_html( $dpt_frame['desc'] ); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>

        <!-- ==========================================
             FACILITIES MATRIX: SERVICES AVAILABLE FOR COLLABORATION
             ========================================== -->
        <div class="dpt-facilities-matrix-section mt-5 pt-5">

            <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title section-title-center">
                    <span class="section-sub-title wow fadeInUp">Infrastructure Matrix</span>
                    <h2 class="text-anime-style-3">Services Available For Strategic Collaboration</h2>
                </div>
            </div>
        </div>
            

        <div class="row">
    <?php 
    // Combine the "Why Choose" item with your services array
    $dpt_services = [
        [ 'icon' => 'fa-user-doctor', 'title' => 'Experienced Doctors', 'desc' => 'Our team of highly qualified specialists provides expert diagnosis and personalized care plans.' ],
        [ 'icon' => 'fa-brain', 'title' => 'Neuro Rehabilitation', 'desc' => 'Advanced sensory-motor retraining strategies for neuro-degenerative frameworks.' ],
        [ 'icon' => 'fa-kit-medical', 'title' => 'Stroke Rehabilitation', 'desc' => 'Sequential biological and physical therapy pathways maximizing neuroplastic recovery.' ],
        [ 'icon' => 'fa-wheelchair-move', 'title' => 'Physiotherapy & Pain Management', 'desc' => 'Targeted musculoskeletal conditioning combined with pain intervention models.' ],
        [ 'icon' => 'fa-needle', 'title' => 'Acupuncture Clinics', 'desc' => 'Evidence-based neurological trigger management integration.' ],
        [ 'icon' => 'fa-dna', 'title' => 'Regenerative Wellness / PRP', 'desc' => 'Autologous growth factor applications within standard musculoskeletal guidelines.' ],
        [ 'icon' => 'fa-laptop-medical', 'title' => 'Telehealth Infrastructure', 'desc' => 'Encrypted pipelines offering remote secondary diagnostics across clinical desks.' ],
        [ 'icon' => 'fa-microscope', 'title' => 'Joint Research Hub', 'desc' => 'Collaborative clinical trials and cohort studies targeting functional biomechanics.' ],
        [ 'icon' => 'fa-passport', 'title' => 'International Desk Unit', 'desc' => 'Comprehensive assistance systems managing legal logistics and clinical documentation.' ]
    ];

    foreach ( $dpt_services as $dpt_s_index => $dpt_s_item ) :
        $dpt_s_delay = ( $dpt_s_index * 0.08 ); 
    ?>
        <div class="col-xl-3 col-md-4 mb-4">
            <div class="service-item-prime p-4 rounded border bg-white h-100 shadow-sm" data-wow-delay="<?php echo esc_attr( $dpt_s_delay ); ?>s">
                <div class="service-item-header-prime mb-3">
                    <div class="icon-box d-inline-block bg-light p-3 rounded-circle">
                        <i class="fa-solid <?php echo esc_attr( $dpt_s_item['icon'] ); ?> fa-2x text-primary"></i>
                    </div>
                </div>
                <div class="sevice-item-content-prime">
                    <h2 class="h6 font-weight-bold mb-2">
                        <a href="#" class="text-decoration-none text-dark"><?php echo esc_html( $dpt_s_item['title'] ); ?></a>
                    </h2>
                    <p class="text-muted small mb-0"><?php echo esc_html( $dpt_s_item['desc'] ); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
        </div>

        <!-- ==========================================
             CONTACT SECTION: FOREIGN ORGANIZATIONS CONCIERGE
             ========================================== -->
        <div class="our-faqs mt-5 pt-4">
            <div class="row align-items-stretch">
                
                <!-- Left Block: Informational Call to Action -->
                <div class="col-xl-5 mb-4 mb-xl-0">
                    <div class="faq-cta-box h-100 d-flex flex-column justify-content-between p-4 rounded text-white bg-dark" style="background-image: linear-gradient(135deg, rgba(0,0,0,0.85), rgba(0,0,0,0.95));">
                        <div class="faq-cta-content wow fadeInUp">
                            <span class="badge bg-primary text-uppercase px-3 py-2 mb-3 rounded-pill">Institutional Access</span>
                            <h3 class="h3 font-weight-bold mb-3 text-white">Global Institutional Gateway</h3>
                            <p class="text-white-50">Our dedicated International Relations Desk processes global strategic requests from ministries of health, medical embassies, corporate health insurers, and academic institutions.</p>
                            <p class="text-white-50">Please complete the formal organization criteria verification layout on the right to trigger rapid processing matrix responses within 24 business hours.</p>
                        </div>
                        
                        <div class="mt-4 pt-3 border-top border-secondary">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa-solid fa-building-shield text-primary me-3 fa-lg"></i>
                                <span class="small text-white-50">Secure, encrypted submission protocol</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-globe text-primary me-3 fa-lg"></i>
                                <span class="small text-white-50">Direct pipeline to Chief Medical Director Desk</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Block: Updated Organization & Client Booking Interface -->
                <div class="col-xl-7">
                    <div class="p-4 p-md-5 rounded border bg-light shadow-sm">
                        <div class="section-title mb-4">
                            <span class="section-sub-title text-primary font-weight-bold text-uppercase small d-block mb-1 wow fadeInUp">Gateway Verification</span>
                            <h2 class="h3 font-weight-bold text-dark mb-2">Foreign Organization Registration & Booking Desk</h2>
                            <p class="text-muted small">Please submit accurate administrative and diagnostic tracking parameters below.</p>
                        </div>

                        <!-- Main Form System -->
                        <form id="appointmentForm" action="#" method="POST" enctype="multipart/form-data" class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="row">
                                <!-- 1. Patient Name / Contact Identity -->
                                <div class="form-group col-md-6 mb-4">
                                    <label for="name" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">Patient Full Name / Corporate Delegate <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter full name" required>
                                </div>

                                <!-- 2. Age -->
                                <div class="form-group col-md-6 mb-4">
                                    <label for="age" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">Age <span class="text-danger">*</span></label>
                                    <input type="number" name="age" class="form-control" id="age" placeholder="Enter age" required>
                                </div>

                                <!-- 3. Mobile Number -->
                                <div class="form-group col-md-6 mb-4">
                                    <label for="phone" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">Mobile Number <span class="text-danger">*</span></label>
                                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Include country code" required>
                                </div>

                                <!-- 4. WhatsApp Number -->
                                <div class="form-group col-md-6 mb-4">
                                    <label for="whatsapp" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">WhatsApp Number</label>
                                    <input type="tel" name="whatsapp" class="form-control" id="whatsapp" placeholder="Include country code">
                                </div>

                                <!-- 5. Main Problem / Institutional Request Scope -->
                                <div class="form-group col-md-12 mb-4">
                                    <label for="message" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">Main Health Problem / Scope of Collaboration <span class="text-danger">*</span></label>
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Briefly describe the clinical condition or specific organizational partnership metrics requested..." required></textarea>
                                </div>

                                <!-- 6. Preferred Date -->
                                <div class="form-group col-md-6 mb-4">
                                    <label for="date" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">Preferred Date <span class="text-danger">*</span></label>
                                    <input type="date" name="date" class="form-control" id="date" required>
                                </div>

                                <!-- 7. Preferred Service -->
                                <div class="form-group col-md-6 mb-4">
                                    <label for="service" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">Preferred Service Sector <span class="text-danger">*</span></label>
                                    <select name="service" class="form-control form-select" id="service" required>
                                        <option value="" disabled selected>Select Preferred Service</option>
                                        <option value="neuro_rehab">Neuro Rehabilitation</option>
                                        <option value="stroke_rehab">Stroke Rehabilitation</option>
                                        <option value="physio_pain">Physiotherapy & Pain Management</option>
                                        <option value="acupuncture">Acupuncture</option>
                                        <option value="regenerative_wellness">Regenerative Wellness / PRP</option>
                                        <option value="training_collaboration">Training / Workshop Collaboration</option>
                                        <option value="tele_rehab">Tele-Rehabilitation Coordination</option>
                                        <option value="visiting_expert">Visiting Expert Program</option>
                                    </select>
                                </div>

                                <!-- 8. Upload Report Option -->
                                <div class="form-group col-md-12 mb-4">
                                    <label for="report" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">Upload Medical Report / Intent Documentation (Optional)</label>
                                    <input type="file" name="report" class="form-control" id="report" accept=".pdf,.jpg,.png">
                                </div>

                                <!-- Submit Action Component -->
                                <div class="col-md-12">
                                    <button type="submit" class="btn-default w-100 py-3 text-uppercase font-weight-bold" style="letter-spacing: 1px;">Initialize Strategic Request</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
                
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>