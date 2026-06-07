<?php 
/* Template Name: Facilities */
get_header(); 
?>

<!-- Page Header Section -->
<div class="page-header dark-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="text-anime-style-3" data-cursor="-opaque"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="page-service-single-full py-5">
    <div class="container">
        
        <!-- Hero Section: Image & Intro -->
        <div class="row align-items-center mb-5 pb-5">
            <div class="col-lg-6">
                <div class="page-single-image">
                    <figure class="image-anime reveal">
                        <?php if (has_post_thumbnail()) { the_post_thumbnail('full', ['class' => 'rounded shadow-lg']); } ?>
                    </figure>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-entry ps-lg-5">
                    <h2 class="text-anime-style-3 mb-4">World-Class Medical Infrastructure</h2>
                    <div class="text-muted">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- 12 Facilities Grid -->
        <div class="service-facilities-box mt-5 pt-5">
            <h2 class="text-anime-style-3 text-center mb-5">Our Core Facilities</h2>
            
            <div class="row">
                <?php 
                $dpt_facilities = [
                    ['icon' => 'fa-microscope', 'title' => 'Diagnostic Lab', 'desc' => 'AI-powered pathology for rapid results.'],
                    ['icon' => 'fa-heart-pulse', 'title' => 'Cardiac Care', 'desc' => 'State-of-the-art telemetry monitoring.'],
                    ['icon' => 'fa-bed-pulse', 'title' => 'Smart ICU', 'desc' => '24/7 critical care tracking systems.'],
                    ['icon' => 'fa-laptop-medical', 'title' => 'Telehealth Suite', 'desc' => 'Secure virtual consultation portal.'],
                    ['icon' => 'fa-x-ray', 'title' => 'Digital Imaging', 'desc' => 'High-resolution X-ray and MRI scans.'],
                    ['icon' => 'fa-syringe', 'title' => 'Pharmacy Station', 'desc' => 'On-site stocked medicine dispensary.'],
                    ['icon' => 'fa-user-nurse', 'title' => 'Recovery Lounge', 'desc' => 'Comfort-focused post-op recovery zones.'],
                    ['icon' => 'fa-shield-virus', 'title' => 'Sterilization Hub', 'desc' => 'Hospital-grade sanitization protocols.'],
                    ['icon' => 'fa-wheelchair', 'title' => 'Accessibility Zone', 'desc' => 'Full ADA-compliant movement areas.'],
                    ['icon' => 'fa-calendar-check', 'title' => 'Booking Kiosk', 'desc' => 'Fast-track digital appointment setup.'],
                    ['icon' => 'fa-dna', 'title' => 'Genomic Testing', 'desc' => 'Advanced personalized health reports.'],
                    ['icon' => 'fa-notes-medical', 'title' => 'Record Archives', 'desc' => 'Secure encrypted health history vault.']
                ];

                foreach ($dpt_facilities as $index => $item) {
                    $dpt_delay = ($index * 0.1); 
                    echo '
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="facility-card h-100 p-4 border rounded shadow-sm wow fadeInUp" data-wow-delay="'.$dpt_delay.'s">
                            <div class="icon-box mb-3">
                                <i class="fa-solid '.$item['icon'].' fa-2x text-primary"></i>
                            </div>
                            <h3>'.$item['title'].'</h3>
                            <p class="text-muted mb-0">'.$item['desc'].'</p>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>

    </div>
</div>

<!-- Custom Elite Styling -->
<style>
    .facility-card {
        transition: all 0.4s ease;
        background: #ffffff;
        border-color: #f0f0f0 !important;
    }
    .facility-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
        border-color: var(--primary-color) !important;
    }
    .facility-card h3 { font-size: 1.25rem; margin-bottom: 10px; }
    .text-primary { color: var(--primary-color); }
</style>

<?php get_footer(); ?>