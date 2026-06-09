<?php

/*
Template Name: Services
*/

get_header();?>

    <?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

    <!-- Page Service Section Start -->
<div class="page-service">
    <div class="container">
        <div class="row">
            <?php
            $dpt_args = array(
                'post_type'      => 'service',
                'posts_per_page' => 8,
                'orderby'        => 'date',
                'order'          => 'ASC'
            );
            $dpt_query = new WP_Query($dpt_args);

            if ($dpt_query->have_posts()) :
                $delay = 0;
                while ($dpt_query->have_posts()) : $dpt_query->the_post();
            ?>
                <div class="col-xl-4 col-md-6">
                    <!-- Service Item Royal Start -->
                    <div class="service-item-royal wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="service-item-header-royal">
                            <?php 
                            // টেক্সোনমি বা ক্যাটাগরি দেখানোর জন্য (যদি সার্ভিস ক্যাটাগরি থাকে)
                            $terms = get_the_terms(get_the_ID(), 'service-category'); // আপনার কাস্টম টেক্সোনমি নাম এখানে দিন
                            if ($terms && !is_wp_error($terms)) {
                                echo '<span>' . esc_html($terms[0]->name) . '</span>';
                            } else {
                                echo '<span>Healthcare</span>'; // ফলব্যাক
                            }
                            ?>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="service-item-image-royal">
                                <a href="<?php the_permalink(); ?>" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>">
                                    </figure>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="service-item-body-royal">
                            <div class="service-item-content-royal">
                                <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                            </div>
                            <div class="service-item-btn-royal">
                                <a href="<?php the_permalink(); ?>" class="readmore-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item Royal End -->
                </div>
            <?php
                $delay += 0.2; 
                endwhile;
                wp_reset_postdata();
            else :
                echo '<div class="col-12"><p>No services found.</p></div>';
            endif;
            ?>
        </div>
    </div>
</div>
<!-- Page Service Section End -->

    <!-- Our Fact Section Start -->
    <div class="our-facts bg-section dark-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Fact / Statistics</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Key statistics that reflect our medical excellence</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Fact Item Start -->
                    <div class="fact-item wow fadeInUp">
                        <div class="fact-item-header">
                            <div class="fact-item-counter-content">
                                <h2><span class="counter">35</span>+</h2>
                                <ul>
                                    <li>Experienced Doctors</li>
                                </ul>
                            </div>
                            <div class="icon-box">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-fact-item-1.svg" alt="">
                            </div>
                        </div>
                        <div class="fact-item-content">
                            <p>Our team of experienced doctor dedicated to providing expert medical care with.</p>
                        </div>
                    </div>
                    <!-- Fact Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Fact Item Start -->
                    <div class="fact-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="fact-item-header">
                            <div class="fact-item-counter-content">
                                <h2><span class="counter">12</span>+</h2>
                                <ul>
                                    <li>Medical Departments</li>
                                </ul>
                            </div>
                            <div class="icon-box">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-fact-item-2.svg" alt="">
                            </div>
                        </div>
                        <div class="fact-item-content">
                            <p>Our team of experienced doctor dedicated to providing expert medical care with.</p>
                        </div>
                    </div>
                    <!-- Fact Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Fact Item Start -->
                    <div class="fact-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="fact-item-header">
                            <div class="fact-item-counter-content">
                                <h2><span class="counter">24</span>/7</h2>
                                <ul>
                                    <li>Emergency Support</li>
                                </ul>
                            </div>
                            <div class="icon-box">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-fact-item-3.svg" alt="">
                            </div>
                        </div>
                        <div class="fact-item-content">
                            <p>Our team of experienced doctor dedicated to providing expert medical care with.</p>
                        </div>
                    </div>
                    <!-- Fact Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                        <p>Browse all professional healthcare services available for you and family</p>
                        <ul>
                            <li class="section-footer-content">Trusted By <b>58,900+</b> Users</li>
                            <li>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </li>
                            <li><span class="counter">4.9</span>/5</li>
                        </ul>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Fact Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Why Choose Us Content Start -->
                    <div class="why-choose-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Why Choose Us</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Why choose us for quality healthcare services</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Our experienced medical team focuses on accurate diagnosis, effective treatment, and personalized care to ensure the best outcomes for every patient.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Us Body Start -->
                        <div class="why-choose-us-body">
                            <!-- Why Choose Counter Box Start -->
                            <div class="why-choose-counter-box wow fadeInUp" data-wow-delay="0.4s">
                                <!-- Why choose Counter Item List Start -->
                                <div class="why-choose-counter-item-list">
                                    <!-- Why choose Counter Item Start -->
                                    <div class="why-choose-counter-item">
                                        <h2><span class="counter">25</span>+</h2>
                                        <p>Years Experience</p>
                                    </div>
                                    <!-- Why choose Counter Item End -->

                                    <!-- Why choose Counter Item Start -->
                                    <div class="why-choose-counter-item">
                                        <h2><span class="counter">24</span>/7</h2>
                                        <p>Emergency Support</p>
                                    </div>
                                    <!-- Why choose Counter Item End -->
                                </div>
                                <!-- Why Choose Counter Item List End -->

                                <!-- Why Choose Counter Image Start -->
                                <div class="why-choose-counter-image">
                                    <figure class="image-anime">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/why-choose-counter-image.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Why Choose Counter Image End -->
                            </div>
                            <!-- Why Choose Counter Box End -->

                            <!-- Why Choose Body Image Start -->
                            <div class="why-choose-body-image">
                                <figure class="image-anime reveal">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/why-choose-body-image.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose Body Image End -->
                        </div>
                        <!-- Why Choose Us Body End -->
                    </div>
                    <!-- Why Choose Us Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- Why choose Us Image Box Start -->
                    <div class="why-choose-us-image-box wow fadeInUp">
                        <!-- Why Choose Experience Circle Start -->
                        <div class="years-experience-circle">
                            <figure>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/years-experience-circle-white.svg" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose Experience Circle End -->

                        <!-- Why Choose Us Image Start -->
                        <div class="why-choose-us-image">
                            <figure>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/why-choose-us-image.png" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose Us Image End -->

                        <!-- Why Choose Cta Box Start -->
                        <div class="why-choose-cta-box">
                            <div class="icon-box">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-why-choose-cta-box.svg" alt="">
                            </div>
                            <div class="why-choose-cta-content">
                                <h2><span class="counter">12</span>+</h2>
                                <p>Medical Departments</p>
                            </div>
                        </div>
                        <!-- Why Choose Counter Box End -->
                    </div>
                    <!-- Why choose Us Image Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Our Approach Section Start -->
    <div class="our-approach bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title">Our Approach</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Our patient first approach to quality healthcare</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Approach CTA Box Start -->
                    <div class="approach-cta-box wow fadeInUp">
                        <!-- Hero Client Box Start -->
                        <div class="hero-client-box">
                            <!-- Satisfy Client Image Start -->
                            <div class="satisfy-client-images">
                                <div class="satisfy-client-image">
                                    <figure class="image-anime">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/author-1.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="satisfy-client-image">
                                    <figure class="image-anime">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/author-2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="satisfy-client-image">
                                    <figure class="image-anime">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/author-3.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <!-- Satisfy Client Image End -->

                            <!-- Hero Client Content Start -->
                            <div class="hero-client-content">
                                <h2><span class="counter">4.9</span>/5<i class="fa fa-solid fa-star"></i></h2>
                                <p>More Than 2500 Reviews</p>
                            </div>
                            <!-- Hero Client Content End -->
                        </div>
                        <!-- Hero Client Box End -->
                        
                        <div class="approach-cta-body">
                            <div class="approach-cta-content">
                                <p>We prioritize comfort, trust, and treatment to ensure the best possible health outcomes for every patient.</p>
                            </div>
                            <div class="approach-cta-btn">
                                <a href="contact.html" class="btn-default">24/7 Services for Emergancy</a>
                            </div>
                        </div>
                    </div>
                    <!-- Approach CTA Box End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Approach Item Start -->
                    <div class="approach-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-approach-item-1.svg" alt="">
                        </div>
                        <div class="approach-item-content">
                            <h3>Your Health Our Priority</h3>
                            <p>Your health is at the heart of everything we do. We are committed to high-quality care tailored to your journey.</p>
                        </div>
                    </div>
                    <!-- Approach Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Approach Item Start -->
                    <div class="approach-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-approach-item-2.svg" alt="">
                        </div>
                        <div class="approach-item-content">
                            <h3>Vision For Better Healthcare</h3>
                            <p>Your health is at the heart of everything we do. We are committed to high-quality care tailored to your journey.</p>
                        </div>
                    </div>
                    <!-- Approach Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                        <p>Browse all professional healthcare services available for you and family</p>
                        <ul>
                            <li class="section-footer-content">Trusted By <b>58,900+</b> Users</li>
                            <li class="section-footer-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </li>
                            <li><span class="counter">4.9</span>/5</li>
                        </ul>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

    <!-- Our Expertise Start -->
    <div class="our-expertise">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- Expertise Image Box Start -->
                    <div class="expertise-image-box wow fadeInUp">
                        <!-- Expertise Image Box 1 Start -->
                        <div class="expertise-image-box-1">
                            <div class="expertise-image">
                                <figure class="image-anime">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/our-expertise-image-1.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Expertise Image Box 1 End -->

                        <!-- Expertise Image Box 2 Start -->
                        <div class="expertise-image-box-2">
                            <div class="expertise-experience-circle">
                                <figure>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/experience-circle-accent.svg" alt="">
                                </figure>
                            </div>
                            <div class="expertise-image">
                                <figure class="image-anime">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/our-expertise-image-2.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Expertise Image Box 2 End -->
                    </div>
                    <!-- Expertise Image Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- Our Expertise Content start -->
                    <div class="our-expertise-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Medical Expertise</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Experience and expertise you can trust always</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">With years of hands-on experience and deep medical expertise, we provide care you can trust at every step our skilled professionals are committed.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Expertise Item List Start -->
                        <div class="expertise-item-list">
                            <!-- Expertise Item Start -->
                            <div class="expertise-item">
                                <div class="circle" data-size="60" data-value="0.85">
                                    <div class="progress_value"><span class="pro_data"></span><span>%</span></div>
                                </div>
                                <div class="expertise-item-content">
                                    <h3>General Medicine And Primary Care</h3>
                                    <p>Our General Medicine and Primary Care services focus on patients.</p>
                                </div>
                            </div>
                            <!-- Expertise Item End -->

                            <!-- Expertise Item Start -->
                            <div class="expertise-item">
                                <div class="circle" data-size="60" data-value="0.67">
                                    <div class="progress_value"><span class="pro_data"></span><span>%</span></div>
                                </div>
                                <div class="expertise-item-content">
                                    <h3>Orthopedic And Bone Treatments</h3>
                                    <p>Our General Medicine and Primary Care services focus on patients.</p>
                                </div>
                            </div>
                            <!-- Expertise Item End -->
                        </div>

                        <!-- Expertise Content Footer Start -->
                        <div class="expertise-content-footer wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Expertise Content Button Start -->
                            <div class="expertise-content-btn">
                                <a href="book-appointment.html" class="btn-default">Book Appointment</a>
                            </div>
                            <!-- Expertise Content Button End -->

                            <!-- What We Contact Item Start -->
                            <div class="what-we-contact-item">
                                <div class="icon-box">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-headphone.svg" alt="">
                                </div>
                                <div class="what-we-contact-item-content">
                                    <p>Emergency Call</p>
                                    <h3><a href="tel:+123456789">+(123) 456-789</a></h3>
                                </div>
                            </div>
                            <!-- What We Contact Item End -->
                        </div>
                        <!-- Expertise Content Footer End -->
                    </div>
                    <!-- Our Expertise Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Expertise Section End -->

    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Patients Testimonials</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">What our patients are saying</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Hear from our patients about their experiences with our dedicated medical team and quality healthcare services their feedback reflects our commitment.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider wow fadeInUp">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Swiper Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-header">
                                            <div class="testimonial-item-quote">
                                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/testimonial-quote.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>