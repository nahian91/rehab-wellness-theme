<?php

/*
Template Name: Contact
*/

get_header();?>

    <?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title ">Get In Touch</span>
                        <h2 class="text-anime-style-3">Reach out for expert care</h2>
                        <p>Reach out for expert care and let our dedicated medical professionals support you every step of the way we are here to provide timely guidance, personalized treatment.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                <!-- Contact Info Item List Start -->
                <div class="contact-info-item-list">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-headphone.svg" alt="">
                        </div>
                        <div class="contact-info-item-content">
                            <p>Emergency Call</p>
                            <h3> +880 13 2476 3317 <br>+880 13 2476 3318</h3>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->

                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-mail-white.svg" alt="">
                        </div>
                        <div class="contact-info-item-content">
                            <p>E-mail Us</p>
                            <h3><a href="mailto:arawsylhet@gmail.com">arawsylhet@gmail.com</a></h3>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->

                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-location-white.svg" alt="">
                        </div>
                        <div class="contact-info-item-content">
                            <p>Our Location</p>
                            <h3>Shahjalal City College Building, <br> Garden Tower,<br>Shahjalal Uposhahar, Sylhet</h3>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->
                </div>
                <!-- Contact Info Item List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us Section End -->

    <!-- Contact location Form Box Start -->
    <div class="contact-location-form-box">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- Contact location Info Box Start -->
                    <div class="contact-location-info-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Contact Us</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Reach out to our healthcare experts today</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Google Map Start -->
                        <div class="google-map-iframe wow fadeInUp" data-wow-delay="0.2s">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3228.2213225233286!2d91.87758001031256!3d24.885082594180872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751ab31dfb5a90d%3A0x52a8fb11a9d072d8!2sGarden%20Tower!5e1!3m2!1sen!2sbd!4v1780976820499!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Google Map End -->
                    </div>
                    <!-- Contact location Info Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <p class="wow fadeInUp">Reach out to our healthcare experts today for trusted guidance and personalized care.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <form id="contactForm" action="<?php echo esc_url( admin_url('admin-ajax.php') ); ?>" method="POST" class="wow fadeInUp" data-wow-delay="0.2s">
    <!-- CSRF Protection Nonce Field and WP AJAX Handler Hook Identifier -->
    <?php wp_nonce_field( 'dpt_submit_contact_nonce', 'dpt_contact_nonce' ); ?>
    <input type="hidden" name="action" value="dpt_process_contact_form">

    <div class="row">
        <!-- First Name -->
        <div class="form-group col-md-6 mb-4">
            <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name*" required>
            <div class="help-block with-errors"></div>
        </div>

        <!-- Last Name -->
        <div class="form-group col-md-6 mb-4">
            <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name*" required>
            <div class="help-block with-errors"></div>
        </div>

        <!-- Phone Number -->
        <div class="form-group col-md-6 mb-4">
            <input type="tel" name="call" class="form-control" id="call" placeholder="Phone Number*" required>
            <div class="help-block with-errors"></div>
        </div>

        <!-- E-mail Address -->
        <div class="form-group col-md-6 mb-4">
            <input type="email" name="mail" class="form-control" id="mail" placeholder="E-mail Address*" required>
            <div class="help-block with-errors"></div>
        </div>

        <!-- Message -->
        <div class="form-group col-md-12 mb-5">
            <textarea name="msg" class="form-control" id="msg" rows="5" placeholder="Write Message Here..." required></textarea>
            <div class="help-block with-errors"></div>
        </div>

        <!-- Action Submit Action Trigger -->
        <div class="col-md-12 mb-3">
            <button type="submit" class="btn-default" id="dptContactSubmitBtn">Submit Message</button>
        </div>

        <!-- PLACED AT THE BOTTOM: Dynamic Message Output Box -->
        <div class="col-md-12">
            <div id="dpt-form-response-msg" class="d-none"></div>
        </div>
    </div>
</form>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    if (!form) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitBtn = document.getElementById('dptContactSubmitBtn');
        const responseBox = document.getElementById('dpt-form-response-msg');
        const formData = new FormData(form);

        // UI Processing States
        submitBtn.disabled = true;
        const originalBtnText = submitBtn.innerText;
        submitBtn.innerText = 'Sending...';
        responseBox.className = 'd-none';

        fetch(form.getAttribute('action'), {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            submitBtn.disabled = false;
            submitBtn.innerText = originalBtnText;
            responseBox.classList.remove('d-none');
            
            if (data.success) {
                responseBox.className = 'alert alert-success mt-2';
                responseBox.innerText = data.data.message;
                form.reset(); // Wipe all input data channels upon successful processing
            } else {
                responseBox.className = 'alert alert-danger mt-2';
                responseBox.innerText = data.data.message;
            }
        })
        .catch(error => {
            submitBtn.disabled = false;
            submitBtn.innerText = originalBtnText;
            responseBox.classList.remove('d-none');
            responseBox.className = 'alert alert-danger mt-2';
            responseBox.innerText = 'An unexpected system error occurred. Please try again.';
        });
    });
});
</script>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact location Form Box End -->

<?php get_footer();?>