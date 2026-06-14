<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Essential Security & Browser Optimization Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php
    /**
     * 1. DYNAMIC SEO & OPEN GRAPH MECHANICS
     * Fetches metadata runtime objects directly from active loops without bloated dependencies.
     */
    if ( is_singular() ) {
        // Dynamic Canonical Configuration URL
        $dpt_canonical_url = esc_url( get_permalink() );
        
        // Dynamic Page/Post Content Excerpt for Description Meta Mapping
        $dpt_post_desc = get_the_excerpt();
        if ( empty( $dpt_post_desc ) ) {
            $dpt_post_obj  = get_post();
            $dpt_post_desc = wp_strip_all_tags( wp_trim_words( $dpt_post_obj->post_content, 25, '...' ) );
        }
        $dpt_seo_desc = esc_attr( $dpt_post_desc );
        
        // Social Share Dynamic Image Target Allocation
        if ( has_post_thumbnail() ) {
            $dpt_share_img = esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) );
        } else {
            $dpt_share_img = esc_url( get_site_icon_url( 512 ) ); // Fallback to site icon
        }
        $dpt_og_type = 'article';
    } else {
        // Fallback Mapping logic defaults optimized for Home/Archive roots
        $dpt_canonical_url = esc_url( home_url( '/' ) );
        $dpt_seo_desc      = esc_attr( get_bloginfo( 'description', 'display' ) );
        $dpt_share_img     = esc_url( get_site_icon_url( 512 ) );
        $dpt_og_type       = 'website';
    }
    ?>

    <!-- Basic Crawl Engine Meta Instructions -->
    <meta name="description" content="<?php echo $dpt_seo_desc; ?>">
    <link rel="canonical" href="<?php echo $dpt_canonical_url; ?>">

    <!-- Open Graph (Facebook / LinkedIn) Social Distribution Assets -->
    <meta property="og:type" content="<?php echo $dpt_og_type; ?>">
    <meta property="og:title" content="<?php echo esc_attr( wp_get_document_title() ); ?>">
    <meta property="og:description" content="<?php echo $dpt_seo_desc; ?>">
    <meta property="og:url" content="<?php echo $dpt_canonical_url; ?>">
    <meta property="og:site_name" content="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
    <?php if ( ! empty( $dpt_share_img ) ) : ?>
        <meta property="og:image" content="<?php echo $dpt_share_img; ?>">
        <meta property="og:image:secure_url" content="<?php echo $dpt_share_img; ?>">
    <?php endif; ?>

    <!-- Twitter Card Meta Distribution Map Configurations -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr( wp_get_document_title() ); ?>">
    <meta name="twitter:description" content="<?php echo $dpt_seo_desc; ?>">
    <?php if ( ! empty( $dpt_share_img ) ) : ?>
        <meta name="twitter:image" content="<?php echo $dpt_share_img; ?>">
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="main-header active-sticky-header">

    <div class="top-header d-block d-md-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="header-btn">
                    <a href="<?php echo esc_url( home_url( '/appointment' ) ); ?>" class="btn-default btn-highlighted">Appointment</a>
                </div>
            </div>
            <div class="col-6 col-6 d-flex justify-content-end">
                <div class="top-header-address">
                    <?php echo do_shortcode('[gtranslate]');?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="top-header d-none d-md-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="top-header-contact">
                    <span><i class="fa-solid fa-phone"></i> +880 13 2476 3317</span>
                    <span><i class="fa-solid fa-envelope"></i> arawsylhet@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-6 text-lg-right d-flex justify-content-end align-items-center">
                <div class="top-header-address mr-3">
                    <span><i class="fa-solid fa-location-dot"></i> Garden Tower, Shahjalal Uposhahar, Sylhet</span>
                </div>
                <div class="top-header-address">
                    <?php echo do_shortcode('[gtranslate]');?>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <?php if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else { ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo"></a>
                    <?php } ?>
                </div>

                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'container'      => false,
                            'menu_class'     => 'navbar-nav mr-auto',
                            'fallback_cb'    => '__return_false',
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'          => 2,
                        ) );
                        ?>
                    </div>
                    
                    <div class="header-btn">
                        <a href="<?php echo esc_url( home_url( '/appointment' ) ); ?>" class="btn-default btn-highlighted">Appointment</a>
                    </div>
                </div>
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>