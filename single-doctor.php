<?php get_header();?>

    <!-- Page Header Section Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque"><?php the_title();?></h1>
                        <nav class="wow fadeInUp" >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url();?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> <?php the_title();?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Team Single Start -->
    <div class="page-team-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-single-sidebar">
                        <div class="team-single-image">
                            <figure class="image-anime">
                                <?php if(has_post_thumbnail()) { the_post_thumbnail('full'); } ?>
                            </figure>
                        </div>

                        <div class="team-sidebar-cta-box dark-section wow fadeInUp" data-wow-delay="0.25s">
                            <div class="team-sidebar-cta-title">
                                <h2>Contact Details:</h2>
                            </div>

                            <div class="team-sidebar-cta-list">
                                <!-- Phone -->
                                <div class="team-sidebar-cta-item">
                                    <div class="icon-box"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon-headphone.svg" alt=""></div>
                                    <div class="team-sidebar-cta-item-content">
                                        <p>Call Us!</p>
                                        <h3><a href="tel:<?php echo get_field('doctor_phone'); ?>"><?php echo get_field('doctor_phone'); ?></a></h3>
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="team-sidebar-cta-item">
                                    <div class="icon-box"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon-mail-white.svg" alt=""></div>
                                    <div class="team-sidebar-cta-item-content">
                                        <p>E-mail Us!</p>
                                        <h3><a href="mailto:<?php echo get_field('doctor_email'); ?>"><?php echo get_field('doctor_email'); ?></a></h3>
                                    </div>
                                </div>
                                <!-- Position -->
                                <div class="team-sidebar-cta-item">
                                    <div class="icon-box"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon-position.svg" alt=""></div>
                                    <div class="team-sidebar-cta-item-content">
                                        <p>Position:</p>
                                        <h3><?php echo get_field('doctor_position'); ?></h3>
                                    </div>
                                </div>
                                <!-- Chamber -->
                                <div class="team-sidebar-cta-item">
                                    <div class="icon-box"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon-location-white.svg" alt=""></div>
                                    <div class="team-sidebar-cta-item-content">
                                        <p>Chamber:</p>
                                        <h3><?php echo get_field('doctor_chamber'); ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="team-single-content">
                        <!-- About -->
                        <div class="team-member-about">
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">About me</h2>
                                <p class="wow fadeInUp"><?php echo get_field('doctor_description'); ?></p>
                            </div>
                        </div>

                        <!-- Education -->
                        <?php if( have_rows('doctor_education_list') ): ?>
                        <div class="team-member-education">
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Education</h2>
                            </div>
                            <div class="member-education-list">
                                <?php while( have_rows('doctor_education_list') ): the_row(); ?>
                                <div class="member-education-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon-box"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon-member-education-1.svg" alt=""></div>
                                    <div class="member-education-item-content">
                                        <h3><?php echo get_sub_field('doctor_education_title'); ?></h3>
                                        <p><?php echo get_sub_field('doctor_education_description'); ?></p>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Qualifications -->
                        <?php if( have_rows('doctor_qualification_list') ): ?>
                        <div class="team-member-education">
                            <div class="section-title">
                                <h2 class="text-anime-style-3">Qualifications</h2>
                            </div>
                            <div class="member-about-item-list">
                                <?php while( have_rows('doctor_qualification_list') ): the_row(); ?>
                                <div class="member-about-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h3><?php echo get_sub_field('doctor_qualification_title'); ?></h3>
                                    <p><?php echo get_sub_field('doctor_qualification__description'); ?></p>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Expertise -->
                        <?php if( have_rows('doctor_expertise_list') ): ?>
                        <div class="team-member-expertise">
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Areas of expertise</h2>
                            </div>
                            <div class="member-skill-list">
                                <?php while( have_rows('doctor_expertise_list') ): the_row(); 
                                    $percent = get_sub_field('doctor_expertise_percentage');
                                ?>
                                <div class="skills-progress-bar">
                                    <div class="skillbar" data-percent="<?php echo $percent; ?>%">
                                        <div class="skill-data">
                                            <div class="skill-title"><?php echo get_sub_field('doctor_expertise_title'); ?></div>
                                            <div class="skill-no"><?php echo $percent; ?>%</div>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="count-bar" style="width: <?php echo $percent; ?>%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();?>