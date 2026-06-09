<?php 
/* Template Name: Facilities */
get_header(); 
?>

<?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

<div class="page-service-single-full">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="facilities-item h-100 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <i class="fa-solid fa-microscope"></i>
                    </div>
                    <div class="facilities-item-content">
                        <h3>Diagnostic Lab</h3>
                        <p>AI-powered pathology for rapid results.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="facilities-item h-100 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon-box">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <div class="facilities-item-content">
                        <h3>Cardiac Care</h3>
                        <p>State-of-the-art telemetry monitoring.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="facilities-item h-100 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon-box">
                        <i class="fa-solid fa-bed-pulse"></i>
                    </div>
                    <div class="facilities-item-content">
                        <h3>Smart ICU</h3>
                        <p>24/7 critical care tracking systems.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="facilities-item h-100 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon-box">
                        <i class="fa-solid fa-laptop-medical"></i>
                    </div>
                    <div class="facilities-item-content">
                        <h3>Telehealth Suite</h3>
                        <p>Secure virtual consultation portal.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="facilities-item h-100 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <i class="fa-solid fa-x-ray"></i>
                    </div>
                    <div class="facilities-item-content">
                        <h3>Digital Imaging</h3>
                        <p>High-resolution X-ray and MRI scans.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="facilities-item h-100 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon-box">
                        <i class="fa-solid fa-syringe"></i>
                    </div>
                    <div class="facilities-item-content">
                        <h3>Pharmacy</h3>
                        <p>On-site stocked medicine dispensary.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="facilities-item h-100 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon-box">
                        <i class="fa-solid fa-user-nurse"></i>
                    </div>
                    <div class="facilities-item-content">
                        <h3>Recovery Lounge</h3>
                        <p>Comfort-focused post-op zones.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="facilities-item h-100 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon-box">
                        <i class="fa-solid fa-shield-virus"></i>
                    </div>
                    <div class="facilities-item-content">
                        <h3>Sterilization Hub</h3>
                        <p>Hospital-grade sanitization.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="facilities-item h-100 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <i class="fa-solid fa-wheelchair"></i>
                    </div>
                    <div class="facilities-item-content">
                        <h3>Accessibility Zone</h3>
                        <p>Full ADA-compliant areas.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="facilities-item h-100 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon-box">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <div class="facilities-item-content">
                        <h3>Booking Kiosk</h3>
                        <p>Fast-track digital setup.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="facilities-item h-100 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon-box">
                        <i class="fa-solid fa-dna"></i>
                    </div>
                    <div class="facilities-item-content">
                        <h3>Genomic Testing</h3>
                        <p>Advanced personal reports.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="facilities-item h-100 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon-box">
                        <i class="fa-solid fa-notes-medical"></i>
                    </div>
                    <div class="facilities-item-content">
                        <h3>Record Archives</h3>
                        <p>Secure health history vault.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .facilities-item {
        transition: all 0.4s ease-in-out;
        background: #ffffff;
        border: 1px solid #f0f0f0;
        border-radius: 8px;
        padding: 25px;
    }
    .facilities-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
        border-color: var(--primary-color, #007bff);
    }
    .facilities-item .icon-box {
        font-size: 2rem;
        color: var(--primary-color, #007bff);
        margin-bottom: 15px;
    }
    .facilities-item-content h3 { 
        font-size: 1.25rem; 
        margin-bottom: 10px; 
        font-weight: 600;
    }
    .facilities-item-content p {
        margin: 0;
        color: #666666;
        font-size: 0.95rem;
    }
</style>

<?php get_footer(); ?>