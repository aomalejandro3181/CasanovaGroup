<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

// Custom HTML5 Comment Markup
function mytheme_comment($comment, $args, $depth) {
     $GLOBALS['comment'] = $comment; ?>
     <li>
         <article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
             <header class="comment-author vcard">
                    <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
                    <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
                    <time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a></time>
                    <?php edit_comment_link(__('(Edit)'),'  ','') ?>
             </header>
             <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php _e('Your comment is awaiting moderation.') ?></em>
                    <br />
             <?php endif; ?>

             <?php comment_text() ?>

             <nav>
                 <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
             </nav>
         </article>
        <!-- </li> is added by wordpress automatically -->
<?php
}

automatic_feed_links();

// Widgetized Sidebar HTML5 Markup
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'before_widget' => '<section>',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}

// Custom Functions for CSS/Javascript Versioning
$GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url')."/";
$GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);

// Add ?v=[last modified time] to style sheets
function versioned_stylesheet($relative_url, $add_attributes=""){
    echo '<link rel="stylesheet" href="'.versioned_resource($relative_url).'" '.$add_attributes.'>'."\n";
}

// Add ?v=[last modified time] to javascripts
function versioned_javascript($relative_url, $add_attributes=""){
    echo '<script src="'.versioned_resource($relative_url).'" '.$add_attributes.'></script>'."\n";
}

// Add ?v=[last modified time] to a file url
function versioned_resource($relative_url){
    $file = $_SERVER["DOCUMENT_ROOT"].$relative_url;
    $file_version = "";

    if(file_exists($file)) {
        $file_version = "?v=".filemtime($file);
    }

    return $relative_url.$file_version;
}

/**
         * Function Register Jquery and Remove jQuery old.
         */
        function register_jquery()
        {
                if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') {
                        wp_deregister_script('jquery');
                        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', false, '3.3.1');
                        wp_enqueue_script('jquery');
                }
        }
        add_action('wp_enqueue_scripts', 'register_jquery');

        /**
         * Load Scripts
         */
        function load_scripts()
        {
                //loads js files
                wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
                wp_enqueue_script('popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '', true);
                wp_enqueue_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), '', true);
                wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), '1');

                wp_enqueue_script('basic_js', get_template_directory_uri() .'/js/basic.js', array('jquery'), '1.0.0', true);
                
                // Loads css files
                wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1');
                wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0');
                wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', array(), '1.9.0');
                wp_enqueue_style('Material+Icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(),'');
                wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css', array(), '1');
        }
        add_action('wp_enqueue_scripts', 'load_scripts');

    /**
     * Remove load file wp-emoji.release.min.js
    */
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    add_image_size( 'small', 84, 68 );

    /**
     * Create a Directory name variable
     */
    if ( !defined('OP_DIRNAME') )
        define( 'OP_DIRNAME', get_theme_file_path() );

    // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'Casanova' ),
        'extra-menu' => __( 'Extra Menu' )
    ) );