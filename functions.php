<?php
/**
 * Theme functions and definitions
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function lh_setup() {

  /**
   * Add default posts and comments RSS feed links to head.
   */

  add_theme_support( 'automatic-feed-links' );

  /**
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */

  add_theme_support( 'title-tag' );

  /**
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
   */

  add_theme_support( 'post-thumbnails' );

  /**
   * Register additional Post Thumbnail sizes.
   *
   * Default sizes for reference:
   * add_image_size( 'thumbnail', 150, 150, true );
   * add_image_size( 'medium', 300, 300, false );
   * add_image_size( 'medium_large', 768, '', false );
   * add_image_size( 'large', 1024, 1024, false );
   */

  // add_image_size( 'extra_large', 1280, '', false );

  /**
   * Register menus
   */

  register_nav_menus( array(
    'header' => esc_html__( 'Header Menu', 'lh' ),
    // 'footer' => esc_html__( 'Footer Menu', 'lh' ),
  ) );

  /**
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */

  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  /**
   * Enable support for Post Formats.
   * See https://developer.wordpress.org/themes/functionality/post-formats/
   */

  // add_theme_support( 'post-formats', array(
  //   'aside',
  //   'image',
  //   'video',
  //   'quote',
  //   'link',
  // ) );

  /**
   * Enable excerpts on 'pages'.
   */

  // add_post_type_support( 'page', 'excerpt' );

  /**
   * Set up the WordPress core custom background feature.
   */

  // add_theme_support( 'custom-background', apply_filters( '_lh_custom_background_args', array(
  //   'default-color' => 'ffffff',
  //   'default-image' => '',
  // ) ) );

  /**
   * Add theme support for selective refresh for widgets.
   */

  // add_theme_support( 'customize-selective-refresh-widgets' );

}
add_action( 'after_setup_theme', 'lh_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

function lh_content_width() {
  $GLOBALS['content_width'] = apply_filters( '_lh_content_width', 640 );
}
add_action( 'after_setup_theme', 'lh_content_width', 0 );

/**
 * Register additional image sizes in Add Media modal
 */

// function lh_custom_image_sizes( $sizes ) {
//   return array_merge( $sizes, array(
//     'extra_large' => __( 'Extra Large' ),
//   ) );
// }
// add_filter( 'image_size_names_choose', 'lh_custom_image_sizes' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */

function lh_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'lh' ),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="Widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class="Widget-title">',
    'after_title'   => '</h1>',
  ) );
}
add_action( 'widgets_init', 'lh_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function lh_scripts() {

  /**
   * Enable cache busting of enqueued css and javascript
   *
   * To disable add the following line to wp-config.php
   * define( 'WP_ENV' , 'production' );
   */

  if ( defined( 'WP_ENV' ) && WP_ENV == 'development' ) {

      wp_enqueue_style( 'main-css', get_template_directory_uri() . '/dist/main.css' );

      wp_enqueue_script( 'main-js', get_template_directory_uri() . '/dist/main.js', array('jquery'), null, true );

    } else {

      wp_enqueue_style( 'main-css', get_template_directory_uri() . '/dist/main.css', array(), filemtime( get_template_directory() . '/dist/main.css' ) );

      wp_enqueue_script( 'main-js', get_template_directory_uri() . '/dist/main.js', array('jquery'), filemtime( get_template_directory() . '/dist/main.js' ), true );

    }

    // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    //   wp_enqueue_script( 'comment-reply' );
    // }
}
add_action( 'wp_enqueue_scripts', 'lh_scripts' );

/**
 * Disable file editing within 'wp-admin' completely (good for security)
 */

define( 'DISALLOW_FILE_EDIT', true );

/**
 * Include custom template tags
 */

require get_template_directory() . '/inc/template-tags.php';

/**
 * Include custom commonly used functions
 */

require get_template_directory() . '/inc/common-functions.php';
