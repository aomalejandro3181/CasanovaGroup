<?php
  /**
   * Settings custom Type
   * This file contains the custom type definition
   * for general settings
   */
  
  // Security enhancement
  if ( !defined('ABSPATH') ) die("Forbidden");
  
  /**
   * Create new custom post type
   */
  function create_post_type_settings(){
  
    /** @var WP_Post_Type $postType */
    $postType = register_post_type('settings', getSettingOptionArguments());
    // Check if there was an error creating the post type
    if ($postType instanceof WP_Error) {
      // log or whatever
    }
  }
  add_action('init', 'create_post_type_settings');
  
  /**
   * Set arguments for post type
   */
  function getSettingOptionArguments(){
    $cptSlug = get_option('settings_base', 'settings');
    $args = array(
      'labels'             => getSettingOptionLabels(),
      'description'        => __( 'General Settings', 'opal' ),
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => $cptSlug ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'supports'           => array('title'),
      'menu_icon'          => 'dashicons-info',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'exclude_from_search'   => false,
      'register_meta_box_cb'  => '',
    );
    return $args;
  }
  
  /**
   * Set labels for custom post type
   * @return array labels
   */
  function getSettingOptionLabels(){
    $labels = array(
      'name'               => _x( 'General Settings', 'post type general name', 'opal' ),
      'singular_name'      => _x( 'General Settings', 'post type singular name', 'opal' ),
      'menu_name'          => _x( 'General Settings', 'admin menu', 'opal' ),
      'name_admin_bar'     => _x( 'General Settings', 'add new on admin bar', 'opal' ),
      'add_new'            => _x( 'New General Setting', 'baptism certificate', 'opal' ),
      'add_new_item'       => __( 'New General Setting', 'opal' ),
      'new_item'           => __( 'Add New General Setting', 'opal' ),
      'edit_item'          => __( 'Edit General Settings', 'opal' ),
      'view_item'          => __( 'View General Settings', 'opal' ),
      'all_items'          => __( 'All General Settings', 'opal' ),
      'search_items'       => __( 'Search General Settings', 'opal' ),
      'parent_item_colon'  => __( 'Parent General Settings:', 'opal' ),
      'not_found'          => __( 'No General Settings were found.', 'opal' ),
      'not_found_in_trash' => __( 'No General Settings were found in trash.', 'opal' )
    );
    return $labels;
  }
  
  /**
   * Add permalink option to permalinks page
   * to allow slug customization from the dashboard
   */
  function settings_load_permalinks() {
    if( isset( $_POST['settings_base'] ) ) {
      update_option(
        'settings_base',
        sanitize_title_with_dashes( $_POST['settings_base'] )
      );
    }
    // Permalink page
    add_settings_field(
      'settings_base',
      __( 'General Settings base url', 'opal' ),
      'settings_field_callback',
      'permalink', 'optional'
    );
  }
  add_action( 'load-options-permalink.php', 'settings_load_permalinks' );
  
  /**
   * Field callback for permalinks options
   */
  function settings_field_callback() {
    $value = get_option( 'settings_base' );
    echo '<input type="text" value="' . esc_attr( $value ) . '" name="settings_base" id="settings_base" class="regular-text" />';
  }
  
  /**
   * Flush permalinks
   * This will be executed just when the theme get activated
   *
   * This function registers the slug in wordpress
   */
  function rewrite_flush_for_settings() {
    /** Init post type */
    create_post_type_settings();
    /** Flush rewrite options to update permalinks */
    flush_rewrite_rules();
  }
  add_action('after_switch_theme', 'rewrite_flush_for_settings');

  // Files required
  require "settings-fields.php";
