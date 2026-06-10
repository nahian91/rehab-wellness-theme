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
<form id="appointmentForm" action="#" method="POST" enctype="multipart/form-data" class="wow fadeInUp" data-wow-delay="0.2s">
    <div class="row">
        <!-- Patient Name -->
        <div class="form-group col-md-6 mb-4">
            <input type="text" name="name" class="form-control" id="name" placeholder="Patient Full Name" required>
        </div>

        <!-- Age -->
        <div class="form-group col-md-6 mb-4">
            <input type="number" name="age" class="form-control" id="age" placeholder="Age" required>
        </div>

        <!-- Mobile Number -->
        <div class="form-group col-md-6 mb-4">
            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Mobile Number" required>
        </div>

        <!-- Preferred Service -->
        <div class="form-group col-md-6 mb-4">
            <select name="service" class="form-control form-select" id="service" required>
                <option value="" disabled selected>Preferred Service</option>
                <option value="neuro_rehab">Neuro Rehabilitation</option>
                <option value="stroke_rehab">Stroke Rehabilitation</option>
                <option value="physio_pain">Physiotherapy & Pain Management</option>
                <option value="acupuncture">Acupuncture</option>
                <option value="regenerative_wellness">Regenerative Wellness / PRP</option>
            </select>
        </div>

        <!-- Preferred Date -->
        <div class="form-group col-md-6 mb-4">
            <input type="date" name="date" class="form-control" id="date" required>
        </div>

        <!-- Report Upload -->
        <div class="form-group col-md-6 mb-4">
            <label for="report" style="margin-bottom: 5px; font-size: 14px;">Upload Medical Report (Optional)</label>
            <input type="file" name="report" class="form-control" id="report" accept=".pdf,.jpg,.png">
        </div>

        <!-- Main Problem -->
        <div class="form-group col-md-12 mb-4">
            <textarea name="message" class="form-control" id="message" rows="4" placeholder="Briefly describe the main health problem..." required></textarea>
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn-default">Book Appointment</button>
        </div>
    </div>
</form>
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