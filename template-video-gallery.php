<?php 
/* Template Name: Video Gallery */
get_header(); 
?>

    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque"><?php the_title(); ?></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

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