<?php 
/* Template Name: Video Gallery */
get_header(); 
?>

    <?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

    <div class="page-video-gallery">
        <div class="container">
            <div class="row">
                <?php 
                // ACF Repeater লুপ - ডাটা আসছে Site Settings (option) পেজ থেকে
                if (have_rows('video_gallery_repeater', 'option')) :
                    $dpt_delay = 0; 
                    while (have_rows('video_gallery_repeater', 'option')) : the_row();
                        
                        $dpt_video_url   = get_sub_field('video_gallery_url');
                        $dpt_video_image = get_sub_field('video_gallery_image');
                        
                        if ($dpt_video_url && $dpt_video_image) : ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="video-gallery-image wow fadeInUp" data-wow-delay="<?php echo $dpt_delay; ?>s">
                                    <a href="<?php echo esc_url($dpt_video_url); ?>" class="popup-video" data-cursor-text="Play">
                                        <figure>
                                            <img src="<?php echo esc_url($dpt_video_image['url']); ?>" alt="<?php echo esc_attr($dpt_video_image['alt'] ?: 'Video Thumbnail'); ?>">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        <?php 
                        $dpt_delay += 0.2; // প্রতিটি ভিডিওর জন্য অ্যানিমেশন ডিলে বাড়ানো
                        endif;
                    endwhile;
                else :
                    echo '<div class="col-12"><p>No videos found. Please add videos from Site Settings.</p></div>';
                endif; 
                ?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>