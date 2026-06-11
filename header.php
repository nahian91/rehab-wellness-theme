<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="main-header active-sticky-header">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="top-header-contact">
                        <span><i class="fa-solid fa-phone"></i> +880 13 2476 3317</span>
                        <span><i class="fa-solid fa-envelope"></i> info@arawbd.com</span>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-right">
                    <div class="top-header-address">
                        <span><i class="fa-solid fa-location-dot"></i> Garden Tower, Shahjalal Uposhahar, Sylhet</span>
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