<?php get_header();?>

    <?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Category List Start -->
                        <div class="page-category-list">
                            <h2 class="page-category-list-title">Discover Our Services</h2>
                            <ul class="service-list">
                                <?php
                                $dpt_args = array(
                                    'post_type'      => 'service',
                                    'posts_per_page' => -1,
                                    'orderby'        => 'title',
                                    'order'          => 'ASC'
                                );
                                
                                $dpt_service_query = new WP_Query($dpt_args);

                                if ($dpt_service_query->have_posts()) :
                                    while ($dpt_service_query->have_posts()) : $dpt_service_query->the_post();
                                ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo '<li>No services found</li>';
                                endif;
                                ?>
                            </ul>
                        </div>
                        <!-- Page Category List End -->

                        <!-- Sidebar CTA Box Start -->
                        <?php if (have_rows('service_schedules')) : ?>
                        <div class="sidebar-cta-box dark-section">
                            <div class="sidebar-cta-header">
                                <div class="icon-box">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div class="sidebar-cta-title">
                                    <h2>Schedule hours:</h2>
                                </div>
                            </div>
                            <div class="sidebar-cta-body">
                                <div class="sidebar-cta-list">
                                    <ul>
                                        <?php while (have_rows('service_schedules')) : the_row(); 
                                            $dpt_day  = get_sub_field('service_schedule_day');
                                            $dpt_time = get_sub_field('service_schedule_time');
                                        ?>
                                            <li>
                                                <span><?php echo esc_html($dpt_day); ?>:</span>
                                                <?php echo esc_html($dpt_time); ?>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                                <div class="sidebar-cta-btn">
                                    <a href="#" class="btn-default btn-highlighted">Book An Appointment</a>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">
                        <!-- Page Single Image Start -->
                        <?php if (has_post_thumbnail()) : ?>
                        <div class="page-single-image">
                            <figure class="image-anime">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
                            </figure>
                        </div>
                        <?php endif; ?>
                        <!-- Page Single Image End -->
                        
                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            
                            <!-- Main Service Description -->
                            <?php 
                            $dpt_description = get_field('service_description');
                            if (!empty($dpt_description)) : 
                                echo wp_kses_post(wpautop($dpt_description));
                            endif; 
                            ?>

                            <!-- Service Why Choose Box Start (Features) -->
                            <?php 
                            $dpt_feat_title = get_field('service_feature_title');
                            $dpt_feat_desc  = get_field('service_feature_description');
                            
                            if (!empty($dpt_feat_title) || have_rows('service_features')) :
                            ?>
                            <div class="service-why-choose-box">
                                <?php if (!empty($dpt_feat_title)) : ?>
                                    <h2 class="text-anime-style-3"><?php echo esc_html($dpt_feat_title); ?></h2>
                                <?php endif; ?>
                                
                                <?php if (!empty($dpt_feat_desc)) : ?>
                                    <p><?php echo esc_html($dpt_feat_desc); ?></p>
                                <?php endif; ?>

                                <?php if (have_rows('service_features')) : ?>
                                <!-- Service Why Choose Item List Start -->
                                <div class="service-why-choose-item-list">
                                    <?php while (have_rows('service_features')) : the_row(); 
                                        $dpt_item_title = get_sub_field('service_feature_item_title');
                                        $dpt_item_desc  = get_sub_field('service_feature_item_description'); 
                                    ?>
                                    <!-- Service Why Choose Item Start -->
                                    <div class="service-why-choose-item">
                                        <div class="service-why-choose-item-content" style="padding-left: 0;">
                                            <h3><?php echo esc_html($dpt_item_title); ?></h3>
                                            <p><?php echo esc_html($dpt_item_desc); ?></p>
                                        </div>
                                    </div>
                                    <!-- Service Why Choose Item End -->
                                    <?php endwhile; ?>
                                </div>
                                <!-- Service Why Choose Item List End -->
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                            <!-- Service Why Choose Box End -->

                            <!-- Service Process Box Start (Offers) -->
                            <?php 
                            $dpt_offer_title = get_field('service_offer_title');
                            $dpt_offer_desc  = get_field('service_offer_description');
                            
                            if (!empty($dpt_offer_title) || have_rows('service_offers')) :
                            ?>
                            <div class="service-process-box">
                                <?php if (!empty($dpt_offer_title)) : ?>
                                    <h2 class="text-anime-style-3"><?php echo esc_html($dpt_offer_title); ?></h2>
                                <?php endif; ?>
                                
                                <?php if (!empty($dpt_offer_desc)) : ?>
                                    <p><?php echo esc_html($dpt_offer_desc); ?></p>
                                <?php endif; ?>

                                <?php if (have_rows('service_offers')) : $dpt_step = 1; ?>
                                <!-- Service Process item List Start -->
                                <div class="service-process-item-list">
                                    <?php while (have_rows('service_offers')) : the_row(); 
                                        $dpt_offer_item_title = get_sub_field('service_offer_item_title');
                                        $dpt_offer_item_desc  = get_sub_field('service_offer_item_description');
                                    ?>
                                    <!-- Service Process Item Start -->
                                    <div class="service-process-item">
                                        <div class="service-process-item-number">
                                            <h3><?php echo str_pad($dpt_step, 2, '0', STR_PAD_LEFT); ?></h3>
                                        </div>
                                        <div class="service-process-item-content">
                                            <h3><?php echo esc_html($dpt_offer_item_title); ?></h3>
                                            <p><?php echo esc_html($dpt_offer_item_desc); ?></p>
                                        </div>
                                    </div>
                                    <!-- Service Process Item End -->
                                    <?php $dpt_step++; endwhile; ?>
                                </div>
                                <!-- Service Process item List End -->               
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                            <!-- Service Process Box End -->

                            <!-- Service Video Part Start -->
                            <?php 
                            $dpt_video = get_field('service_video');
                            if (!empty($dpt_video)) : 
                            ?>
                            <div class="service-video-section" style="margin-top: 40px; margin-bottom: 40px;">
                                <h2 class="text-anime-style-3" style="margin-bottom: 20px;">Watch Our Overview</h2>
                                <?php 
// Passing false as the second parameter grabs the raw, unformatted YouTube link text
$dpt_video_url = get_field('service_video', false, false); 

if (!empty($dpt_video_url)) : 
?>
<div class="service-video-section" style="margin-top: 40px; margin-bottom: 40px;">
    <h2 class="text-anime-style-3" style="margin-bottom: 20px;">Watch Our Overview</h2>
    <div class="video-gallery-image">
        <a href="<?php echo esc_url($dpt_video_url); ?>" class="popup-video" data-cursor-text="Play">
            <figure class="image-anime">
                <?php 
                // Checks if a custom fallback gallery background is uploaded, otherwise defaults to the post thumbnail
                $dpt_video_thumb = get_the_post_thumbnail_url(get_the_ID(), 'full');
                if (empty($dpt_video_thumb)) {
                    $dpt_video_thumb = 'https://localhost/rehab-wellness-theme/wp-content/uploads/2026/06/gallery-8.jpg';
                }
                ?>
                <img src="<?php echo esc_url($dpt_video_thumb); ?>" alt="<?php the_title_attribute(); ?> Video Thumbnail">
            </figure>
        </a>
    </div>
</div>
<?php endif; ?>
                            </div>
                            <?php endif; ?>
                            <!-- Service Video Part End -->

                            <!-- Service Gallery Part Start -->
                            <?php 
                            $dpt_gallery = get_field('service_gallery');
                            if (!empty($dpt_gallery) && is_array($dpt_gallery)) : 
                            ?>
                            <div class="service-gallery-section" style="margin-bottom: 40px;">
                                <h2 class="text-anime-style-3" style="margin-bottom: 20px;">Our Gallery</h2>
                                <div class="row g-3">
                                    <?php foreach ($dpt_gallery as $dpt_image) : ?>
                                    <div class="col-md-4">
                                        <div class="photo-gallery">
                                            <a href="<?php echo esc_url($dpt_image['url']); ?>" data-cursor-text="View">
                                                <figure class="image-anime">
                                                    <img src="<?php echo esc_url($dpt_image['sizes']['medium_large'] ?? $dpt_image['url']); ?>" alt="<?php echo esc_attr($dpt_image['alt']); ?>">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <!-- Service Gallery Part End -->

                        </div>
                        <!-- Service Entry End -->

                        <!-- Page Single FAQs Start -->
                        <?php if (have_rows('service_faqs')) : ?>
                        <div class="page-single-faqs">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3">Frequently Asked Questions</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
<div class="faq-accordion" id="dpt-service-accordion">
    <?php 
    $dpt_faq_index = 1; 
    while (have_rows('service_faqs')) : the_row(); 
        $dpt_question = get_sub_field('service_faqs_questions');
        $dpt_answer   = get_sub_field('service_faqs_answer');
        $dpt_is_first = ($dpt_faq_index === 1);
    ?>
    <!-- FAQ Item Start -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="dpt-heading-<?php echo esc_attr($dpt_faq_index); ?>">
            <button class="accordion-button <?php echo $dpt_is_first ? '' : 'collapsed'; ?>" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#dpt-collapse-<?php echo esc_attr($dpt_faq_index); ?>" 
                    aria-expanded="<?php echo $dpt_is_first ? 'true' : 'false'; ?>" 
                    aria-controls="dpt-collapse-<?php echo esc_attr($dpt_faq_index); ?>">
                <?php echo esc_html($dpt_faq_index); ?>. <?php echo esc_html($dpt_question); ?>
            </button>
        </h2>
        
        <div id="dpt-collapse-<?php echo esc_attr($dpt_faq_index); ?>" 
             class="accordion-collapse collapse <?php echo $dpt_is_first ? 'show' : ''; ?>" 
             role="region" 
             aria-labelledby="dpt-heading-<?php echo esc_attr($dpt_faq_index); ?>" 
             data-bs-parent="#dpt-service-accordion">
            <div class="accordion-body">
                <p><?php echo esc_html($dpt_answer); ?></p>
            </div>
        </div>
    </div>
    <!-- FAQ Item End -->
    <?php 
        $dpt_faq_index++; 
    endwhile; 
    ?>
</div>
<!-- FAQ Accordion End -->
                        </div>
                        <?php endif; ?>
                        <!-- Page Single FAQs End -->
                    </div>
                    <!-- Service Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->

<?php get_footer();?>