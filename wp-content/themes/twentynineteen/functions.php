<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'twentynineteen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
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
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'twentynineteen' ),
					'slug'  => 'primary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => __( 'Secondary', 'twentynineteen' ),
					'slug'  => 'secondary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'twentynineteen' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentynineteen' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentynineteen' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'twentynineteen_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'twentynineteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function twentynineteen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twentynineteen_content_width', 640 );
}
add_action( 'after_setup_theme', 'twentynineteen_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts() {
	// Swiper
	wp_enqueue_style( 'swiper-styles', get_template_directory_uri() . '/css/swiper.min.css' );

	// Font Awesome
    wp_register_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
    wp_enqueue_style('Font_Awesome');

    // Fonts
    wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i' );
    wp_enqueue_style('google-fonts');

    // AOS styles
    wp_register_style( 'aos-styles', 'https://unpkg.com/aos@next/dist/aos.css' );
    wp_enqueue_style('aos-styles');

    // Bootstrap
    wp_register_style( 'bootstrap-styles', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
    wp_enqueue_style('bootstrap-styles');

    // FancyBox Styles
    wp_register_style( 'fancybox-styles', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.3/dist/jquery.fancybox.min.css' );
    wp_enqueue_style('fancybox-styles');

    // Main Styles
    wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/main.min.css' );

    //  Actual jQuery ver.
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script(
            'jquery',
            get_template_directory_uri() . "/js/jquery-2.2.3.min.js",
            false,
            '2.2.3');
        wp_enqueue_script('jquery');
    }


    // Swiper Script
    wp_enqueue_script('swiper-scripts', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), null, true );

    // ScrollToId Script
    wp_enqueue_script('scrolltoid-scripts', get_template_directory_uri() . '/js/scrolltoid.min.js', array('jquery'), null, true );

    // Gallery Script
    wp_enqueue_script('html5gallery-scripts', get_template_directory_uri() . '/js/html5gallery.js', array('jquery'), null, true );

    // Particles Script
    wp_register_script( 'particles', 'https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js', array('jquery'), null, true );
    wp_enqueue_script('particles');

    // TweenMax Script
    wp_register_script( 'tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js', array('jquery'), null, true );
    wp_enqueue_script('tweenmax');

    // aos Script
    wp_register_script( 'aos-script', 'https://unpkg.com/aos@next/dist/aos.js', array('jquery'), null, true );
    wp_enqueue_script('aos-script');

    // aos Script
    wp_register_script( 'fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.3/dist/jquery.fancybox.min.js', array('jquery'), null, true );
    wp_enqueue_script('fancybox');

    // Main Scripts
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twentynineteen_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twentynineteen_skip_link_focus_fix' );

/**
 * Enqueue supplemental block editor styles.
 */
function twentynineteen_editor_customizer_styles() {

	wp_enqueue_style( 'twentynineteen-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'twentynineteen-editor-customizer-styles', twentynineteen_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'twentynineteen_editor_customizer_styles' );

show_admin_bar( false );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


// Post Types
add_action( 'init', 'true_register_products' );
function true_register_products() {
    //  Models
    $labels = array(
        'name' => 'Models',
        'singular_name' => 'Model', // админ панель Добавить->Функцию
        'add_new' => 'Add model',
        'add_new_item' => 'Add new model card', // заголовок тега <title>
        'edit_item' => 'Edit model card',
        'menu_name' => 'Models' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true, // благодаря этому некоторые параметры можно пропустить
        'menu_icon' => 'dashicons-universal-access',
        'menu_position' => 5,
        'supports' => array( 'title', 'thumbnail')
    );
    register_post_type('header-contacts', $args);
}





add_action( 'rest_api_init', 'first_model_row_route' );
function first_model_row_route() {
    register_rest_route( 'http://localhost:8888/etalonium-gallery-wp/wp-json/wp/v2/', 'first-model-row', array(
            'methods' => 'GET',
            'callback' => 'first_model_row',
        )
    );
}
function first_model_row() {
    return 3;
}

// AJAX Functions
function get_models(){
    echo 'yeas';
    die();
}
// wp_ajax_ - только для зарегистрированных пользователей
add_action('wp_ajax_get-models', 'get_models'); // wp_ajax_{значение параметра action}
// wp_ajax_nopriv_ - только для незарегистрированных, т е для залогиненных он работать не будет (результатом выполнения запроса будет 0)
add_action('wp_ajax_nopriv_get-model', 'get_models'); // wp_ajax_nopriv_{значение параметра action}



function my_endpoint( $request_data ) {

    // setup query argument
    $page = $_GET['page'];
    $args = array(
        'post_type' => 'header-contacts',
        'posts_per_page' => 1,
        'offset' => $page,
    );

    // get posts
    $posts = get_posts($args);

    // add custom field data to posts array
    foreach ($posts as $key => $post) {
        $posts[$key]->acf = get_fields($post->ID);
        $posts[$key]->link = get_permalink($post->ID);
        $posts[$key]->image = get_the_post_thumbnail_url($post->ID);
    }
    return $posts;
}

// register the endpoint
add_action( 'rest_api_init', function () {
    register_rest_route( 'my_endpoint/v1', '/my_post_type/', array(
            'methods' => 'GET',
            'callback' => 'my_endpoint',
        )
    );
});

function get_models_lenght() {

    return wp_count_posts('header-contacts');
}

add_action( 'rest_api_init', function () {
    register_rest_route('get_models_lenght/v1', '/models/', array(
        'methods' => 'GET',
        'callback' => 'get_models_lenght',
    ));
});