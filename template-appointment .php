<?php

/*
Template Name: Appointment 
*/

get_header();?>

    <?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

    <!-- Page Appointment Start -->
    <div class="page-appointment">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <!-- Appointment Content Start -->
                    <div class="our-appointment-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Book an Appointment</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Book your appointment for better health today</h2>
                        </div>
                        <!-- Section Title End -->

                       <div class="support-cta-box">
                            <!-- Support CTA Header Start -->
                            <div class="support-cta-header">
                                <div class="icon-box">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div class="support-cta-title">
                                    <h3>Schedule a hours:</h3>
                                </div>
                            </div>
                            <!-- Support CTA Header End -->

                            <!-- Support CTA Body Start -->
                            <div class="support-cta-body">
                                <!-- Support CTA List Start -->
                                <div class="support-cta-list">
                                    <ul>
                                        <li><span>Mon to Fri:</span>09:00 AM - 07:00 PM</li>
                                        <li><span>Saturday:</span>09:00 AM - 07:00 PM</li>
                                        <li><span>Sunday</span>Closed</li>
                                    </ul>
                                </div>
                                <!-- Support CTA List End -->

                                <!-- Support CTA Button Start -->
                                <div class="support-cta-btn">
                                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-default">24/7 Services for Emergancy</a>
                                </div>
                                <!-- Support CTA Button End -->
                            </div>
                            <!-- Support CTA Body End -->
                        </div>
                    </div>
                    <!-- Appointment Content End -->
                </div>

                <div class="col-xl-7">
                    <!-- Appointment Form Start -->
                    <div class="appointment-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Book an appointment</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Appointment Form Start -->
                        <!-- Appointment Form Start -->
<form id="appointmentForm" action="<?php echo esc_url( admin_url('admin-ajax.php') ); ?>" method="POST" enctype="multipart/form-data" class="wow fadeInUp" data-wow-delay="0.2s">
    <?php wp_nonce_field( 'submit_appointment_nonce', 'appointment_nonce' ); ?>
    <input type="hidden" name="action" value="process_appointment_form">

    <div id="form-response-msg" class="mb-4 d-none"></div>

    <div class="row">
        <div class="form-group col-md-6 mb-4">
            <label for="name" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">Patient Full Name <span class="text-danger">*</span></label>
            <input type="text" name="patient_name" class="form-control" id="name" placeholder="Enter patient full name" required>
        </div>

        <div class="form-group col-md-6 mb-4">
            <label for="age" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">Age <span class="text-danger">*</span></label>
            <input type="number" name="patient_age" class="form-control" id="age" placeholder="Enter age" min="0" max="120" required>
        </div>

        <div class="form-group col-md-6 mb-4">
            <label for="phone" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">Mobile Number <span class="text-danger">*</span></label>
            <input type="tel" name="patient_phone" class="form-control" id="phone" placeholder="Enter mobile number" required>
        </div>

        <div class="form-group col-md-6 mb-4">
            <label for="whatsapp" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">WhatsApp Number</label>
            <input type="tel" name="patient_whatsapp" class="form-control" id="whatsapp" placeholder="Enter WhatsApp number">
        </div>

        <div class="form-group col-md-12 mb-4">
            <label for="message" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">Main Health Problem <span class="text-danger">*</span></label>
            <textarea name="patient_problem" class="form-control" id="message" rows="4" placeholder="Briefly describe the main health problem..." required></textarea>
        </div>

        <div class="form-group col-md-6 mb-4">
            <label for="date" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">Preferred Date <span class="text-danger">*</span></label>
            <input type="date" name="preferred_date" class="form-control" id="date" min="<?php echo date('Y-m-d'); ?>" required>
        </div>

        <div class="form-group col-md-6 mb-4">
            <label for="service" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">Preferred Service <span class="text-danger">*</span></label>
            <select name="preferred_service" class="form-control form-select" id="service" required>
                <option value="" disabled selected>Select Preferred Service</option>
                <option value="Neuro Rehabilitation">Neuro Rehabilitation</option>
                <option value="Stroke Rehabilitation">Stroke Rehabilitation</option>
                <option value="Physiotherapy & Pain Management">Physiotherapy & Pain Management</option>
                <option value="Acupuncture">Acupuncture</option>
                <option value="Regenerative Wellness / PRP">Regenerative Wellness / PRP</option>
            </select>
        </div>

        <div class="form-group col-md-12 mb-4">
            <label for="report" class="form-label" style="margin-bottom: 5px; font-size: 14px; font-weight: 500;">Upload Medical Report (Optional)</label>
            <input type="file" name="medical_report" class="form-control" id="report" accept=".pdf,.jpg,.jpeg,.png">
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn-default" id="submitBtn">Book Appointment</button>
        </div>
    </div>
</form>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('appointmentForm');
    if (!form) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitBtn = document.getElementById('submitBtn');
        const responseBox = document.getElementById('form-response-msg');
        const formData = new FormData(form);

        // Interface Loading State Adjustment
        submitBtn.disabled = true;
        submitBtn.innerText = 'Processing...';
        responseBox.className = 'mb-4 d-none';

        fetch(form.getAttribute('action'), {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            submitBtn.disabled = false;
            submitBtn.innerText = 'Book Appointment';
            responseBox.classList.remove('d-none');
            
            if (data.success) {
                responseBox.className = 'alert alert-success mb-4';
                responseBox.innerText = data.data.message;
                form.reset(); // Clear all inputs seamlessly on success
            } else {
                responseBox.className = 'alert alert-danger mb-4';
                responseBox.innerText = data.data.message;
            }
        })
        .catch(error => {
            submitBtn.disabled = false;
            submitBtn.innerText = 'Book Appointment';
            responseBox.classList.remove('d-none');
            responseBox.className = 'alert alert-danger mb-4';
            responseBox.innerText = 'An unexpected system error occurred. Please try again.';
        });
    });
});
</script>
<!-- Appointment Form End -->
                        <!-- Appointment Form End -->
                    </div>
                    <!-- Appointment Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Appointment End -->

     <!-- Core Features Section Start -->
<div class="core-features bg-section dark-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <!-- Core Features Content Start -->
                <div class="core-features-content">
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Our Expertise</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Elevating the Standard of Healthcare</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">We combine state-of-the-art medical technology with compassionate human care, ensuring that every patient receives a personalized treatment plan tailored to their unique wellness journey.</p>
                    </div>

                    <div class="core-features-content-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="about.html" class="btn-default btn-highlighted">Learn About Our Approach</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-7">
                <div class="core-features-item-list">
                    <!-- Feature 1 -->
                    <div class="core-features-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-core-features-item-1.svg" alt="Quality Care">
                        </div>
                        <div class="core-features-item-content">
                            <h3>Evidence-Based Treatment</h3>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="core-features-item wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-core-features-item-2.svg" alt="Personalized Care">
                        </div>
                        <div class="core-features-item-content">
                            <h3>Patient-Centered Recovery</h3>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="core-features-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-core-features-item-3.svg" alt="Facilities">
                        </div>
                        <div class="core-features-item-content">
                            <h3>State-of-the-Art Infrastructure</h3>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="core-features-item wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-core-features-item-4.svg" alt="Emergency">
                        </div>
                        <div class="core-features-item-content">
                            <h3>24/7 Acute Care Response</h3>
                        </div>
                    </div>

                    <!-- Feature 5 -->
                    <div class="core-features-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-core-features-item-5.svg" alt="Diagnostics">
                        </div>
                        <div class="core-features-item-content">
                            <h3>Rapid Diagnostic Precision</h3>
                        </div>
                    </div>

                    <!-- Feature 6 -->
                    <div class="core-features-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-core-features-item-6.svg" alt="Environment">
                        </div>
                        <div class="core-features-item-content">
                            <h3>Healing-Focused Environment</h3>
                        </div>
                    </div>

                    <!-- Feature 7 -->
                    <div class="core-features-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-core-features-item-7.svg" alt="Professionals">
                        </div>
                        <div class="core-features-item-content">
                            <h3>Board-Certified Specialists</h3>
                        </div>
                    </div>

                    <!-- Feature 8 -->
                    <div class="core-features-item wow fadeInUp" data-wow-delay="0.7s">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-core-features-item-8.svg" alt="Technology">
                        </div>
                        <div class="core-features-item-content">
                            <h3>Advanced Robotic Surgery</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Core Features Section End -->

   <!-- Our FAQs Section Start -->
<div class="our-faqs">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <!-- FAQ CTA Box Start -->
                <div class="faq-cta-box">
                    <div class="faq-cta-image">
                        <figure class="image-anime">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/faq-cta-image.jpg" alt="Support Team">
                        </figure>
                    </div>

                    <div class="faq-cta-body">
                        <div class="faq-cta-content wow fadeInUp">
                            <h3>Have Any Questions?</h3>
                            <p>We are here to help. If you need clarity on our appointment process, insurance requirements, or specific medical treatments, please don't hesitate to reach out to our support staff.</p>
                        </div>
                        <div class="faq-cta-btn wow fadeInUp" data-wow-delay="0.2s">
                            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-default">Contact Support</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7">
                <div class="section-title">
                    <span class="section-sub-title wow fadeInUp">Frequently Asked Questions</span>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Your questions answered about our medical services</h2>
                </div>

                <!-- FAQ Accordion Start -->
                <div class="faq-accordion" id="accordion">
                    
                    <!-- FAQ 1: Booking -->
                    <div class="accordion-item wow fadeInUp">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                1. How can I book an appointment with a doctor?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>You can book an appointment by calling our office directly, using the "Book Appointment" button on our website, or by visiting our front desk in person.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2: Emergency -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                2. Do you provide emergency medical services?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>We offer urgent care services during our operating hours. However, for life-threatening emergencies, please dial your local emergency services number or proceed to the nearest hospital emergency room immediately.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3: Services -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                3. What medical services do you provide?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>We specialize in comprehensive primary care, including cardiology, pediatrics, orthopedics, dermatology, preventative screenings, and advanced diagnostic laboratory testing.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4: Arrival -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                4. How early should I arrive for my appointment?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>We recommend arriving at least 15 minutes prior to your scheduled time to complete any necessary paperwork and insurance verification.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5: What to Bring -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                5. What should I bring to my medical appointment?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>Please bring a valid photo ID, your current insurance card, a list of your current medications, and any relevant medical records or test results from previous visits.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our FAQs Section End -->

<?php get_footer();?>