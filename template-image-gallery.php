<?php 
/* Template Name: Image Gallery */
get_header(); 
?>

    <!-- Page Header Section Start -->
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

    <!-- Page Gallery Start -->
    <div class="page-gallery">
        <div class="container">
            <div class="row gallery-items page-gallery-box">
                <?php 
                // ACF Repeater লুপ শুরু
                if (have_rows('image_gallery_repeater', 'option')) :
                    $dpt_delay = 0; // অ্যানিমেশন ডিলে-এর জন্য
                    while (have_rows('image_gallery_repeater', 'option')) : the_row();
                        
                        $dpt_image = get_sub_field('image_gallery_url');
                        
                        if ($dpt_image) : ?>
                            <div class="col-lg-4 col-6">
                                <div class="photo-gallery wow fadeInUp" data-wow-delay="<?php echo $dpt_delay; ?>s">
                                    <a href="<?php echo esc_url($dpt_image['url']); ?>" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="<?php echo esc_url($dpt_image['url']); ?>" alt="<?php echo esc_attr($dpt_image['alt']); ?>">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        <?php 
                        $dpt_delay += 0.2; // প্রতিটি আইটেমে ডিলে বাড়াতে
                        endif;
                    endwhile;
                else :
                    echo '<div class="col-12"><p>No gallery images found.</p></div>';
                endif; 
                ?>
            </div>
        </div>
    </div>
    <!-- Page Gallery End -->

<?php get_footer(); ?>