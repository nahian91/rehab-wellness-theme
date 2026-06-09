<?php get_header();?>

    <!-- Page Header Section Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque"><?php the_title();?></h1>
                        <nav class="wow fadeInUp" >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url();?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> <?php the_title();?></li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Page Team Single Start -->
    <div class="page-team-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Team Single Image Start -->
                        <div class="team-single-image">
                            <figure class="image-anime">
                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                            </figure>
                        </div>
                        <!-- Team Single Image End -->

                        <!-- Sidebar CTA Box Start -->
                        <div class="team-sidebar-cta-box dark-section wow fadeInUp" data-wow-delay="0.25s">
                            <div class="team-sidebar-cta-title">
                                <h2>Contact Details:</h2>
                            </div>

                            <!-- Team Sidebar CTA List Start -->
                            <div class="team-sidebar-cta-list">
                                <!-- Team Sidebar CTA Item Start -->
                                <div class="team-sidebar-cta-item">
                                    <div class="icon-box">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-headphone.svg" alt="">
                                    </div>
                                    <div class="team-sidebar-cta-item-content">
                                        <p>Call Us!</p>
                                        <h3><a href="tel:123456789">+(123) 456-789</a></h3>
                                    </div>
                                </div>
                                <!-- Team Sidebar CTA Item End -->

                                <!-- Team Sidebar CTA Item Start -->
                                <div class="team-sidebar-cta-item">
                                    <div class="icon-box">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-mail-white.svg" alt="">
                                    </div>
                                    <div class="team-sidebar-cta-item-content">
                                        <p>E-mail Us!</p>
                                        <h3><a href="mailto:info@domainname.com">domain@gmail.com</a></h3>
                                    </div>
                                </div>
                                <!-- Team Sidebar CTA Item End -->

                                <!-- Team Sidebar CTA Item Start -->
                                <div class="team-sidebar-cta-item">
                                    <div class="icon-box">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-position.svg" alt="">
                                    </div>
                                    <div class="team-sidebar-cta-item-content">
                                        <p>Position:</p>
                                        <h3>Cardiologist</h3>
                                    </div>
                                </div>
                                <!-- Team Sidebar CTA Item End -->

                                <!-- Team Sidebar CTA Item Start -->
                                <div class="team-sidebar-cta-item">
                                    <div class="icon-box">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-location-white.svg" alt="">
                                    </div>
                                    <div class="team-sidebar-cta-item-content">
                                        <p>Chamber:</p>
                                        <h3>123 Health Street, 001</h3>
                                    </div>
                                </div>
                                <!-- Team Sidebar CTA Item End -->
                            </div>
                            <!-- Team Sidebar CTA List End -->
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="team-single-content">
                        <!-- Team Member About Start -->
                        <div class="team-member-about">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">About me</h2>
                                <p class="wow fadeInUp">Dr. David Wilson is a highly experienced cardiologist specializing in the diagnosis and treatment of heart-related conditions. With over 12 years of medical expertise, he is dedicated to providing advanced cardiac care using modern technology and evidence-based treatments.</p>
                            </div>
                            <!-- Section Title End -->
                        </div>
                        <!-- Team Member About End -->

                        <!-- Team Member Education Start -->
                        <div class="team-member-education">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Education</h2>
                            </div>
                            <!-- Section Title End -->
                            
                            <!-- Member Education List Start -->
                            <div class="member-education-list">
                                <!-- Member Education Item Start -->
                                <div class="member-education-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon-box">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-member-education-1.svg" alt="">
                                    </div>
                                    <div class="member-education-item-content">
                                        <h3>Doctor of Medicine (MD)</h3>
                                        <p>This qualification reflects a strong commitment to medical excellence, ethical continuous learning in delivering safe.</p>
                                    </div>
                                </div>
                                <!-- Member Education Item End -->

                            </div>
                            <!-- Member Education List End -->
                        </div>
                        <!-- Team Member Education End -->

                        <!-- Team Member Education Start -->
                        <div class="team-member-education">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3">Qualifications</h2>
                            </div>
                            <!-- Section Title End -->
                            
                            <div class="member-about-item-list">
                                <!-- About Item Start -->
                                <div class="member-about-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h3>Pediatric And Geriatric Care</h3>
                                    <p>Our Mission is to become a trusted and leading healthcare provider known for excellence, innovation, and advanced medical care.</p>
                                </div>
                                <!-- About Item End -->

                                <!-- About Item Start -->
                                <div class="member-about-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h3>Wellness Counseling</h3>
                                    <p>Our vision is to become a trusted and leading healthcare provider known for excellence, innovation, and advanced medical care.</p>
                                </div>
                                <!-- About Item End -->
                            </div>
                        </div>
                        <!-- Team Member Education End -->

                        <!-- Team Member Expertise Start -->
                        <div class="team-member-expertise">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Areas of expertise</h2>
                            </div>
                            <!-- Section Title End -->

                             <!-- Member Skills List Start -->
                            <div class="member-skill-list">
                                <!-- Skills Progress Bar Start -->
                                <div class="skills-progress-bar">
                                    <!-- Skill Item Start -->
                                    <div class="skillbar" data-percent="95%">
                                        <div class="skill-data">
                                            <div class="skill-title">Cardiac Diagnosis</div>
                                            <div class="skill-no">95%</div>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="count-bar"></div>
                                        </div>
                                    </div>
                                    <!-- Skill Item End -->
                                </div>
                                <!-- Skills Progress Bar End -->

                                <!-- Skills Progress Bar Start -->
                                <div class="skills-progress-bar">
                                    <!-- Skill Item Start -->
                                    <div class="skillbar" data-percent="85%">
                                        <div class="skill-data">
                                            <div class="skill-title">Heart Disease Treatment</div>
                                            <div class="skill-no">85%</div>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="count-bar"></div>
                                        </div>
                                    </div>
                                    <!-- Skill Item End -->
                                </div>
                                <!-- Skills Progress Bar End -->

                                <!-- Skills Progress Bar Start -->
                                <div class="skills-progress-bar">
                                    <!-- Skill Item Start -->
                                    <div class="skillbar" data-percent="90%">
                                        <div class="skill-data">
                                            <div class="skill-title">Preventive Care</div>
                                            <div class="skill-no">90%</div>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="count-bar"></div>
                                        </div>
                                    </div>
                                    <!-- Skill Item End -->
                                </div>
                                <!-- Skills Progress Bar End -->

                                <!-- Skills Progress Bar Start -->
                                <div class="skills-progress-bar">
                                    <!-- Skill Item Start -->
                                    <div class="skillbar" data-percent="65%">
                                        <div class="skill-data">
                                            <div class="skill-title">Patient Care & Communication</div>
                                            <div class="skill-no">65%</div>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="count-bar"></div>
                                        </div>
                                    </div>
                                    <!-- Skill Item End -->
                                </div>
                                <!-- Skills Progress Bar End -->
                            </div>
                            <!-- Member Skills List End -->
                        </div>
                        <!-- Team Member Expertise End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Team Single End -->

<?php get_footer();?>