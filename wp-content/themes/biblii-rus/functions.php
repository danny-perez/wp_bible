<?php
/**
 * biblii.rus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package biblii.rus
 */

if ( ! function_exists( 'biblii_rus_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function biblii_rus_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on biblii.rus, use a find and replace
		 * to change 'biblii-rus' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'biblii-rus', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'biblii-rus' ),
		) );

		/*
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'biblii_rus_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'biblii_rus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function biblii_rus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'biblii_rus_content_width', 640 );
}
add_action( 'after_setup_theme', 'biblii_rus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function biblii_rus_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'biblii-rus' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'biblii-rus' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'biblii_rus_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function biblii_rus_scripts() {
	wp_enqueue_style( 'biblii-rus-style', get_stylesheet_uri() );

	wp_enqueue_script( 'biblii-rus-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'biblii-rus-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'biblii_rus_scripts' );

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
//====================================================================
//====================================================================
//========================= USERS CODE ===============================
//====================================================================
function dimox_breadcrumbs() {

	/* === OPTIONS === */
$text['home'] = 'Главная'; // текст ссылки "Главная"

$text['category'] = 'Архив рубрики "%s"'; // текст для страницы рубрики

$text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска

$text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега

$text['author'] = 'Статьи автора %s'; // текст для страницы автора

$text['404'] = 'Ошибка 404'; // текст для страницы 404

$show_current = 1; // 1 - показывать название текущей статьи/страницы/рубрики, 0 - не показывать

$show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать

$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать

$show_title = 1; // 1 - показывать подсказку (title) для ссылок, 0 - не показывать

//$delimiter = ' &raquo; '; // разделить между "крошками"

$delimiter = ' &rArr; '; // разделить между "крошками"

$before = '<span class="current">'; // тег перед текущей "крошкой"

$after = '</span>'; // тег после текущей "крошки"

/* === END OF OPTIONS === */

global $post;

$home_link = home_url('/');

$link_before = '<span typeof="v:Breadcrumb">';

$link_after = '</span>';

$link_attr = ' rel="v:url" property="v:title"';

$link = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;

$parent_id = $parent_id_2 = $post->post_parent;

$frontpage_id = get_option('page_on_front');

if (is_home() || is_front_page()) {

if ($show_on_home == 1) echo '<div><a href="' . $home_link . '">' . $text['home'] . '</a></div>';

} else {

echo '<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">';

if ($show_home_link == 1) {

echo '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $text['home'] . '</a>';

if ($frontpage_id == 0 || $parent_id != $frontpage_id) echo $delimiter;

}

if ( is_category() ) {

$this_cat = get_category(get_query_var('cat'), false);

if ($this_cat->parent != 0) {

$cats = get_category_parents($this_cat->parent, TRUE, $delimiter);

if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);

$cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);

$cats = str_replace('</a>', '</a>' . $link_after, $cats);

if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);

echo $cats;

}

if ($show_current == 1) echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;

} elseif ( is_search() ) {

echo $before . sprintf($text['search'], get_search_query()) . $after;

} elseif ( is_day() ) {

echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;

echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;

echo $before . get_the_time('d') . $after;

} elseif ( is_month() ) {

echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;

echo $before . get_the_time('F') . $after;

} elseif ( is_year() ) {

echo $before . get_the_time('Y') . $after;

} elseif ( is_single() && !is_attachment() ) {

if ( get_post_type() != 'post' ) {

$post_type = get_post_type_object(get_post_type());

$slug = $post_type->rewrite;

printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);

if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;

} else {

$cat = get_the_category(); $cat = $cat[0];

$cats = get_category_parents($cat, TRUE, $delimiter);

if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);

$cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);

$cats = str_replace('</a>', '</a>' . $link_after, $cats);

if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);

echo $cats;

if ($show_current == 1) echo $before . get_the_title() . $after;

}
} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {

$post_type = get_post_type_object(get_post_type());

echo $before . $post_type->labels->singular_name . $after;

} elseif ( is_attachment() ) {

$parent = get_post($parent_id);

$cat = get_the_category($parent->ID); $cat = $cat[0];

$cats = get_category_parents($cat, TRUE, $delimiter);

$cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);

$cats = str_replace('</a>', '</a>' . $link_after, $cats);

if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);

echo $cats;

printf($link, get_permalink($parent), $parent->post_title);

if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;

} elseif ( is_page() && !$parent_id ) {

if ($show_current == 1) echo $before . get_the_title() . $after;

} elseif ( is_page() && $parent_id ) {

if ($parent_id != $frontpage_id) {

$breadcrumbs = array();

while ($parent_id) {

$page = get_page($parent_id);

if ($parent_id != $frontpage_id) {

$breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));

}

$parent_id = $page->post_parent;

}

$breadcrumbs = array_reverse($breadcrumbs);

for ($i = 0; $i < count($breadcrumbs); $i++) {

echo $breadcrumbs[$i];

if ($i != count($breadcrumbs)-1) echo $delimiter;

}

}

if ($show_current == 1) {

if ($show_home_link == 1 || ($parent_id_2 != 0 && $parent_id_2 != $frontpage_id)) echo $delimiter;

echo $before . get_the_title() . $after;

}

} elseif ( is_tag() ) {

echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;

} elseif ( is_author() ) {

global $author;

$userdata = get_userdata($author);

echo $before . sprintf($text['author'], $userdata->display_name) . $after;

} elseif ( is_404() ) {

echo $before . $text['404'] . $after;

}

if ( get_query_var('paged') ) {

if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';

echo __('Page') . ' ' . get_query_var('paged');

if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';

}

echo '</div><!-- .breadcrumbs -->';

}

} // end dimox_breadcrumbs()