<?php get_header();

// Fetch general text fields
$therapist_desc         = get_field('therapists_description');
$therapist_designation  = get_field('therapists_designation');

// Fetch contact details
$therapist_phone        = get_field('therapists_phone');
$therapist_email        = get_field('therapists_email');
$therapist_specialization = get_field('therapists_specialization');
$therapist_location     = get_field('therapists_location');

// Fetch complex fields / repeaters
$education_list         = get_field('therapists_education_list');
$qualification_list     = get_field('therapists_qualification_list');
$expertise_list         = get_field('therapists_expertise_list');
?>

    <?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

    <!-- Page Team Single Start -->
    <div class="page-team-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-single-sidebar">
                        <div class="team-single-image">
                            <figure class="image-anime">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/team-single.jpg" alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                            </figure>
                        </div>

                        <div class="team-sidebar-cta-box dark-section wow fadeInUp" data-wow-delay="0.25s">
                            <div class="team-sidebar-cta-title">
                                <h2>Get in Touch:</h2>
                            </div>

                            <div class="team-sidebar-cta-list">
                                <!-- Phone -->
                                <?php if (!empty($therapist_phone)) : ?>
                                <div class="team-sidebar-cta-item">
                                    <div class="icon-box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-headphone.svg" alt="Phone"></div>
                                    <div class="team-sidebar-cta-item-content">
                                        <p>Call for Appointment</p>
                                        <h3><a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $therapist_phone)); ?>"><?php echo esc_html($therapist_phone); ?></a></h3>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <!-- Email -->
                                <?php if (!empty($therapist_email)) : ?>
                                <div class="team-sidebar-cta-item">
                                    <div class="icon-box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-mail-white.svg" alt="Email"></div>
                                    <div class="team-sidebar-cta-item-content">
                                        <p>Email Me</p>
                                        <h3><a href="mailto:<?php echo esc_attr(sanitize_email($therapist_email)); ?>"><?php echo esc_html($therapist_email); ?></a></h3>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <!-- Specialization -->
                                <?php if (!empty($therapist_specialization)) : ?>
                                <div class="team-sidebar-cta-item">
                                    <div class="icon-box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-position.svg" alt="Specialization"></div>
                                    <div class="team-sidebar-cta-item-content">
                                        <p>Specialization:</p>
                                        <h3><?php echo esc_html($therapist_specialization); ?></h3>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <!-- Chamber Location -->
                                <?php if (!empty($therapist_location)) : ?>
                                <div class="team-sidebar-cta-item">
                                    <div class="icon-box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-location-white.svg" alt="Location"></div>
                                    <div class="team-sidebar-cta-item-content">
                                        <p>Practice Location:</p>
                                        <h3><?php echo esc_html($therapist_location); ?></h3>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="team-single-content">
                        <!-- About / Therapeutic Approach -->
                        <?php if (!empty($therapist_desc)) : ?>
                        <div class="team-member-about">
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Therapeutic Approach</h2>
                                <p class="wow fadeInUp"><?php echo wp_kses_post($therapist_desc); ?></p>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Education & Training Repeater -->
                        <?php if (!empty($education_list) && is_array($education_list)) : ?>
                        <div class="team-member-education">
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Education & Training</h2>
                            </div>
                            <div class="member-education-list">
                                <?php 
                                $edu_delay = 0.2;
                                foreach ($education_list as $edu) : 
                                    $edu_title = isset($edu['doctor_education_title']) ? $edu['doctor_education_title'] : '';
                                    $edu_desc  = isset($edu['therapists_education_description']) ? $edu['therapists_education_description'] : '';
                                    if (empty($edu_title) && empty($edu_desc)) continue;
                                ?>
                                <div class="member-education-item wow fadeInUp" data-wow-delay="<?php echo esc_attr($edu_delay); ?>s">
                                    <div class="icon-box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-member-education-1.svg" alt="Education"></div>
                                    <div class="member-education-item-content">
                                        <?php if (!empty($edu_title)) : ?>
                                            <h3><?php echo esc_html($edu_title); ?></h3>
                                        <?php endif; ?>
                                        <?php if (!empty($edu_desc)) : ?>
                                            <p><?php echo esc_html($edu_desc); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php 
                                    $edu_delay += 0.2;
                                endforeach; 
                                ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Qualifications & Licenses Repeater -->
                        <?php if (!empty($qualification_list) && is_array($qualification_list)) : ?>
                        <div class="team-member-education">
                            <div class="section-title">
                                <h2 class="text-anime-style-3">Certifications & Licenses</h2>
                            </div>
                            <div class="member-about-item-list">
                                <?php 
                                $qual_delay = 0.2;
                                foreach ($qualification_list as $qual) : 
                                    $qual_title = isset($qual['therapists_qualification_title']) ? $qual['therapists_qualification_title'] : '';
                                    // Watch out for the double underscore in the JSON definition name attribute: therapists_qualification__description
                                    $qual_desc  = isset($qual['therapists_qualification__description']) ? $qual['therapists_qualification__description'] : '';
                                    if (empty($qual_title) && empty($qual_desc)) continue;
                                ?>
                                <div class="member-about-item wow fadeInUp" data-wow-delay="<?php echo esc_attr($qual_delay); ?>s">
                                    <?php if (!empty($qual_title)) : ?>
                                        <h3><?php echo esc_html($qual_title); ?></h3>
                                    <?php endif; ?>
                                    <?php if (!empty($qual_desc)) : ?>
                                        <p><?php echo esc_html($qual_desc); ?></p>
                                    <?php endif; ?>
                                </div>
                                <?php 
                                    $qual_delay += 0.2;
                                endforeach; 
                                ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Expertise Skills Repeater -->
                        <?php if (!empty($expertise_list) && is_array($expertise_list)) : ?>
                        <div class="team-member-expertise">
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Clinical Focus Areas</h2>
                            </div>
                            <div class="member-skill-list">
                                <?php 
                                foreach ($expertise_list as $item) : 
                                    $skill_title   = isset($item['therapists_expertise_title']) ? $item['therapists_expertise_title'] : '';
                                    $skill_percent = isset($item['therapists_expertise_percentage']) ? intval($item['therapists_expertise_percentage']) : 0;
                                    if (empty($skill_title)) continue;
                                ?>
                                <div class="skills-progress-bar">
                                    <div class="skillbar" data-percent="<?php echo esc_attr($skill_percent); ?>%">
                                        <div class="skill-data">
                                            <div class="skill-title"><?php echo esc_html($skill_title); ?></div>
                                            <div class="skill-no"><?php echo esc_html($skill_percent); ?>%</div>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="count-bar" style="width: <?php echo esc_attr($skill_percent); ?>%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
get_footer();