<?php
/*
 *  Author:  Mentel
 *  Custom functions, support, custom post types and more.
 */




/*------------------------------------*\
	- Theme Support
    - Misc Functions
    - Clean wp head
    - Actions + Filters + ShortCodes
    - Meta box SEO
    - Custom block in Homepage template
    - Dashboard
    - Global custom key for social links
    - Admin reskin
    - Custom Post Types
\*------------------------------------*/



/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('wpblank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// Navigation
function wpblank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<a>%3$s</a>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

  // register menu
function register_wpblank_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'wpblank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'wpblank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'wpblank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}


  // Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

  // Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}




// Enqueue assets
function wpblank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    }
}


function wpblank_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}

function load_custom_wp_admin_style() {
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.0', 'all');
    wp_enqueue_style('fontawesome'); // Enqueue it!
    wp_register_style('adminstyle', get_template_directory_uri() . '/css/admin.css', array(), '1.0', 'all');
    wp_enqueue_style('adminstyle'); // Enqueue it!
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


function wpblank_styles()
{
    wp_register_style('wpblank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('wpblank'); // Enqueue it!
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'wpblank'),
        'description' => __('Description for this widget-area...', 'wpblank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'wpblank'),
        'description' => __('Description for this widget-area...', 'wpblank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}



// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function wpblank_index($length) // Create 20 Word Callback for Index page Excerpts
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using wpblank_excerpt('wpblank_custom_post');
function wpblank_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function wpblank_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function wp_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'wpblank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function wpblankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function wpblankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>

    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }




/*------------------------------------*\
	Clean wp head
\*------------------------------------*/

//Function de register redundant assets in header

function deregister_reddt_script() {
  wp_deregister_script( '' );
}
add_action( 'wp_print_scripts', 'deregister_reddt_script', 100 );


/*Remove contact form 7 styles*/
function deregister_ct7_styles() {
    wp_deregister_style( 'contact-form-7' );
}
add_action( 'wp_print_styles', 'deregister_ct7_styles', 100 );

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );


function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

function wpblank_enqueue_scripts() {
  $js_directory = get_template_directory_uri() . '/js/';

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'skrollr' );
  wp_enqueue_script( 'onscreen' );
  wp_enqueue_script( 'barba' );
  wp_enqueue_script( 'TweenMax' );
  wp_enqueue_script( 'global' );

  wp_register_script( 'global', $js_directory . 'scripts.js', 'jquery', '1.0' );
  wp_register_script( 'TweenMax', $js_directory . 'lib/TweenMax.min.js', 'TweenMax', '1.0' );
  wp_register_script( 'barba', $js_directory . 'lib/barba.min.js', 'barba', '1.0' );
  wp_register_script( 'onscreen', $js_directory . 'lib/onscreen.js', 'onscreen', '1.0' );
  wp_register_script( 'skrollr', $js_directory . 'lib/skrollr.js', 'skrollr', '1.0' );
  wp_register_script( 'jquery', $js_directory . 'jquery-3.2.1.min.js', 'jquery', '3.2.1' );
}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
//add_action('init', 'wpblank_header_scripts');

add_action('get_header', 'enable_threaded_comments');
add_action('wp_enqueue_scripts', 'wpblank_styles');
add_action( 'wp_footer', 'wpblank_enqueue_scripts' );

add_action('init', 'register_wpblank_menu');
add_action('widgets_init', 'my_remove_recent_comments_style');
add_action('init', 'wp_pagination');
add_action( 'wp_footer', 'wpblank_deregister_scripts' );
// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'wpblankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'wp_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('wpblank_shortcode_demo', 'wpblank_shortcode_demo'); // You can place [wpblank_shortcode_demo] in Pages, Posts now.
add_shortcode('wpblank_shortcode_demo_2', 'wpblank_shortcode_demo_2'); // Place [wpblank_shortcode_demo_2] in Pages, Posts now.


/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function wpblank_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function wpblank_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}



/*------------------------------------*\
	Meta box SEO
    // add a custom meta box in post
     and  custom type and page sidebar
\*------------------------------------*/

 /*Display meta box*/
  function add_seo(){
    add_meta_box('id_meta_seo', 'Meta seo', 'meta_seo_function', array('post', 'page', 'custom-type' , 'wp-blank'), 'side', 'high');
  }
  add_action('add_meta_boxes','add_seo');

 /*Display custom fields in meta box*/
  function meta_seo_function(){
	global $post;
    $meta = get_post_meta( $post->ID, 'seo_desc' , true); ?>
	<input type="hidden" name="meta_seo_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">
<!--	<label for="seo_desc[text]">Add a meta description</label>-->
      <i>Meta description is also used for opengraph and twitter tag</i>
	<br>
	<br>
    <b> Meta description:</b> <?php if ( ! empty( $meta ) ) {
        echo $meta['text'];
    } ?>
      <br>
      <br>
	<input type="text" name="seo_desc[text]" id="seo_desc[text]" class="input-admin" value="" placeholder="edit description">
	<?php }

  /*Save custom fields in DB*/
//   function save_meta_seo_function( $post_id ) {
// 	// verify nonce
// 	if ( !wp_verify_nonce( $_POST['meta_seo_nonce'], basename(__FILE__) ) ) {
// 		return $post_id;
// 	}
// 	// check autosave
// 	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
// 		return $post_id;
// 	}
// 	// check permissions
// 	if ( 'page' === $_POST['post_type'] ) {
// 		if ( !current_user_can( 'edit_page', $post_id ) ) {
// 			return $post_id;
// 		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
// 			return $post_id;
// 		}
// 	}
// 	$old = get_post_meta( $post_id, 'seo_desc', true );
// 	$new = $_POST['seo_desc'];

// 	if ( $new && $new !== $old ) {
// 		update_post_meta( $post_id, 'seo_desc', $new );
// 	} elseif ( '' === $new && $old ) {
// 		delete_post_meta( $post_id, 'seo_desc', $old );
// 	}
// }
// add_action( 'save_post', 'save_meta_seo_function' );

include('theme-functions/functions_code.php');


/*------------------------------------*\
 Customize dashboard
\*------------------------------------*/
function custom_dashboard_widget() {
	echo "<ul>";
	echo "<li><h4>Custom Note title</h4> <p>Custom content</p> </li>";
	echo "</ul>";
}


function onboarding_dashboard_widget() {
	echo "<ul>";
	echo "<li><h4>Custom Note title</h4> <p>Custom content</p> </li>";
	echo "</ul>";
}



function add_custom_dashboard_widget() {
	wp_add_dashboard_widget('custom_dashboard_widget', 'Mentel WP Wiki', 'custom_dashboard_widget');
	wp_add_dashboard_widget('onboarding_dashboard_widget', 'Welcome on board!', 'onboarding_dashboard_widget');
}
function remove_dashboard_widget() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
    remove_meta_box('dashboard_plugins', 'dashboard', 'core');
    remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
    remove_meta_box('dashboard_primary', 'dashboard', 'core');
    remove_meta_box('dashboard_secondary', 'dashboard', 'core');
    remove_meta_box('dashboard_right_now', 'dashboard', 'core');
}



add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');
add_action('wp_dashboard_setup', 'remove_dashboard_widget');


// customize admin footer text
function custom_admin_footer() {
	echo 'Website Designed and Developped by Mentel';
}
add_filter('admin_footer_text', 'custom_admin_footer');

//remove menu

function remove_menus(){

 // remove_menu_page( 'index.php' );                  //Dashboard
 // remove_menu_page( 'jetpack' );                    //Jetpack*
 // remove_menu_page( 'edit.php' );                   //Posts
 // remove_menu_page( 'upload.php' );                 //Media
 // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
 // remove_menu_page( 'themes.php' );                 //Appearance
 // remove_menu_page( 'plugins.php' );                //Plugins
 // remove_menu_page( 'users.php' );                  //Users
 // remove_menu_page( 'tools.php' );                  //Tools
 // remove_menu_page( 'options-general.php' );        //Settings

}
add_action( 'admin_menu', 'remove_menus' );

?>
<?php

/*------------------------------------*\
	Global custom key for social links
\*------------------------------------*/

/**
 * Create A Simple Theme Options Panel
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Start Class
if ( ! class_exists( 'WPEX_Theme_Options' ) ) {

	class WPEX_Theme_Options {


		public function __construct() {

			// We only need to register the admin panel on the back-end
			if ( is_admin() ) {
				add_action( 'admin_menu', array( 'WPEX_Theme_Options', 'add_admin_menu' ) );
				add_action( 'admin_init', array( 'WPEX_Theme_Options', 'register_settings' ) );
			}

		}


		public static function get_theme_options() {
			return get_option( 'theme_options' );
		}


		public static function get_theme_option( $id ) {
			$options = self::get_theme_options();
			if ( isset( $options[$id] ) ) {
				return $options[$id];
			}
		}


		public static function add_admin_menu() {
			add_menu_page(
				esc_html__( 'Social url', 'text-domain' ),
				esc_html__( 'Social url', 'text-domain' ),
				'manage_options',
				'theme-settings',
				array( 'WPEX_Theme_Options', 'create_admin_page' )
			);
		}


		public static function register_settings() {
			register_setting( 'theme_options', 'theme_options', array( 'WPEX_Theme_Options', 'sanitize' ) );
		}


		public static function create_admin_page() { ?>

			<div class="wrap">

				<h1><?php esc_html_e( 'Social', 'text-domain' ); ?></h1>

				<form method="post" action="options.php">

					<?php settings_fields( 'theme_options' ); ?>

					<table class="form-table wpex-custom-admin-login-table">

						<?php // Text input example ?>
						<tr valign="top">
							<th scope="row">
                              <i class="fa fa-facebook"></i> <?php esc_html_e( 'Facebook url', 'text-domain' ); ?></th>
							<td>

								<?php $value = self::get_theme_option( 'facebook_url' ); ?>
								<input type="text" name="theme_options[facebook_url]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>
	                     <tr valign="top">
							<th scope="row">
                              <i class="fa fa-twitter"></i> <?php esc_html_e( 'Twitter url', 'text-domain' ); ?></th>
							<td>
								<?php $value = self::get_theme_option( 'twitter_url' ); ?>
								<input type="text" name="theme_options[twitter_url]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>
                        <tr valign="top">
							<th scope="row">
                              <i class="fa fa-linkedin"></i> <?php esc_html_e( 'Linkedin url', 'text-domain' ); ?></th>
							<td>
								<?php $value = self::get_theme_option( 'linkedin_url' ); ?>
								<input type="text" name="theme_options[linkedin_url]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>

					</table>

					<?php submit_button(); ?>

				</form>

			</div><!-- .wrap -->
		<?php }

	}
}
new WPEX_Theme_Options();

// Helper function to use in your theme to return a theme option value
function myprefix_get_theme_option( $id = '' ) {
	return WPEX_Theme_Options::get_theme_option( $id );
}
//     How to get the value in the template
//     $value = myprefix_get_theme_option( 'facebook_url' );
//    echo $value;

/*------------------------------------*\
	Admin reskin
\*------------------------------------*/
      // Replace Icons In admin
      add_action( 'admin_head', 'replace_admin_menu_icon' );
      function replace_admin_menu_icon() {
?>

    <style type="text/css">
      .dashicons-admin-post:before, .dashicons-format-standard:before{
        content: '\f123';
      }

    </style>

<?php } ?>
