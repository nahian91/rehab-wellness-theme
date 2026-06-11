<?php
/**
 * rehab-wellness-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rehab-wellness-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rehab_wellness_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on rehab-wellness-theme, use a find and replace
		* to change 'rehab-wellness-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'rehab-wellness-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'rehab-wellness-theme' ),
			'footer-1'   => esc_html__( 'Footer 1', 'rehab-wellness-theme' ),
			'footer-2' => esc_html__( 'Footer 2', 'rehab-wellness-theme' ),
			'footer-3' => esc_html__( 'Footer 3', 'rehab-wellness-theme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'rehab_wellness_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'rehab_wellness_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rehab_wellness_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rehab_wellness_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'rehab_wellness_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rehab_wellness_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rehab-wellness-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rehab-wellness-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rehab_wellness_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rehab_wellness_theme_scripts() {
    // 1. Google Fonts: Rethink Sans
    wp_enqueue_style( 'rethink-sans-font', 'https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap', array(), null );
    
    // 2. Load your CSS assets
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css' );
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/all.min.css' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css' );

    // 3. Load your JS assets
    // Ensure jQuery is loaded first
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'slicknav-js', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'magnific-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'rehab_wellness_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Add Bootstrap classes to nav menu
add_filter('nav_menu_css_class', 'add_bootstrap_nav_classes', 10, 2);
function add_bootstrap_nav_classes($classes, $item) {
    $classes[] = 'nav-item';
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_bootstrap_link_classes', 10, 3);
function add_bootstrap_link_classes($atts, $item, $args) {
    $atts['class'] = 'nav-link';
    return $atts;
}

function my_acf_json_save_point( $path ) {
    return get_stylesheet_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );

/**
 * Add floating WhatsApp Chat icon to the bottom right.
 */
function rehab_wellness_whatsapp_chat() {
    // Replace this with your actual WhatsApp phone number (include country code, no spaces or special characters)
    $phone_number = '1234567890'; 
    // Optional pre-filled message (URL encoded)
    $initial_message = urlencode("Hello! I'd like to get more information about your services."); 
    
    $whatsapp_url = "https://wa.me/" . $phone_number . "?text=" . $initial_message;
    ?>
    <a href="<?php echo esc_url( $whatsapp_url ); ?>" class="whatsapp-float" target="_blank" rel="noopener noreferrer" title="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a>

    <style>
        .whatsapp-float {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            color: #fff !important;
            border-radius: 50px;
            text-align: center;
            font-size: 25px;
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .whatsapp-float:hover {
            transform: scale(1.1);
            color: #fff !important;
        }
        .whatsapp-icon {
            margin-top: 0;
        }
        /* Mobile adjustment so it doesn't block important elements */
        @media screen and (max-width: 767px) {
            .whatsapp-float {
                width: 30px;
                height: 30px;
                bottom: 10px;
                right: 10px;
                font-size: 20px;
            }
        }
    </style>
    <?php
}
add_action( 'wp_footer', 'rehab_wellness_whatsapp_chat' );

