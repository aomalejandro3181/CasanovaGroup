<?php
  /**
   * This document contains the fields used for the General Setting custom type
   */

  add_action( 'cmb2_admin_init', 'cmb2_settings_metaboxes' );
  
  /***********************************************
   * Define the metabox and field configurations *
   ***********************************************/
  function cmb2_settings_metaboxes() {
    // Start with an underscore to hide fields from custom fields list
    $prefix = '_settings';

    //Initiation of the metabox "Hero Slider" Section group
    $cmb_section_1 = new_cmb2_box( array(
      'id'            => $prefix . '_section_1',
      'title'         => __( 'Hero Slider', 'casanova' ),
      'object_types'  => array( 'settings', ),
      'context'       => 'normal',
      'priority'      => 'high',
      'show_names'    => true,
      'repeatable'    => true,
      'closed'        => true,
    ) );
    
    // Title
    $cmb_section_1->add_field( array(
      'name'       => __( 'Title Slide 1', 'cmb2' ),
      'id'         => $prefix . '_title',
      'type'       => 'text',
      'repeatable' => false,
      'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );
    //Content
    $cmb_section_1->add_field( array(
      'name'       => __( 'Sub Title 1', 'cmb2' ),
      'id'         => $prefix . '_content',
      'type'       => 'text',
      'repeatable' => false,
      'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );
    //Background image section
    $cmb_section_1->add_field( array(
      'name'       => __( 'Background Image', 'cmb2' ),
      'desc'    => 'Min resolution: 1440x750 ',
      'id'         => $prefix . '_background_image',
      'type'       => 'file',
      'repeatable' => false,
      'show_on_cb' => 'cmb2_hide_if_no_cats',
      'text'    => array(
        'add_upload_file_text' => 'Add Image' 
      ),
      'query_args' => array(
        'type' => 'image/jpeg',
      ),
      'preview_size' => 'large'
    ) );

    //Initiation of the metabox "Opal helps your team act smarter" Section group
    $cmb_section_2 = new_cmb2_box( array(
      'id'            => $prefix . '_section_2',
      'title'         => __( 'Opal helps your team act smarter Section', 'opal' ),
      'object_types'  => array( 'settings', ),
      'context'       => 'normal',
      'priority'      => 'high',
      'show_names'    => true,
      'repeatable'    => true,
      'closed'        => true,
    ) );
    // Title
    $cmb_section_2->add_field( array(
      'name'       => __( 'Title', 'cmb2' ),
      'id'         => $prefix . '_title',
      'type'       => 'text',
      'repeatable' => false,
      'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );
    //Content
    $cmb_section_2->add_field( array(
      'name'       => __( 'Content', 'cmb2' ),
      'id'         => $prefix . '_content',
      'type'       => 'textarea_small',
      'repeatable' => false,
      'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );
    //Background image section
    $cmb_section_2->add_field( array(
      'name'       => __( 'Background Image', 'cmb2' ),
      'desc'    => 'Min resolution: 1440x750 ',
      'id'         => $prefix . '_background_image',
      'type'       => 'file',
      'repeatable' => false,
      'show_on_cb' => 'cmb2_hide_if_no_cats',
      'text'    => array(
        'add_upload_file_text' => 'Add Image' 
      ),
      'query_args' => array(
        'type' => 'image/jpeg',
      ),
      'preview_size' => 'large'
    ) );

    //Initiation of the metabox "Opal helps your team stay aware" Section group
    $cmb_section_3 = new_cmb2_box( array(
      'id'            => $prefix . '_section_3',
      'title'         => __( 'Opal helps your team stay aware Section', 'opal' ),
      'object_types'  => array( 'settings', ),
      'context'       => 'normal',
      'priority'      => 'high',
      'show_names'    => true,
      'repeatable'    => true,
      'closed'        => true,
    ) );
    // Title
    $cmb_section_3->add_field( array(
      'name'       => __( 'Title', 'cmb2' ),
      'id'         => $prefix . '_title',
      'type'       => 'text',
      'repeatable' => false,
      'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );
    //Content
    $cmb_section_3->add_field( array(
      'name'       => __( 'Content', 'cmb2' ),
      'id'         => $prefix . '_content',
      'type'       => 'textarea_small',
      'repeatable' => false,
      'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );
    //Background image section
    $cmb_section_2->add_field( array(
      'name'       => __( 'Background Image', 'cmb2' ),
      'desc'    => 'Min resolution: 1440x750 ',
      'id'         => $prefix . '_background_image',
      'type'       => 'file',
      'repeatable' => false,
      'show_on_cb' => 'cmb2_hide_if_no_cats',
      'text'    => array(
        'add_upload_file_text' => 'Add Image' 
      ),
      'query_args' => array(
        'type' => 'image/jpeg',
      ),
      'preview_size' => 'large'
    ) );

    //Initiation of the metabox "Section What it Does" Section group
    $cmb_what_it_does = new_cmb2_box( array(
      'id'            => $prefix . 'what_it_does',
      'title'         => __( 'Section: What it Does', 'opal' ),
      'object_types'  => array( 'settings', ),
      'context'       => 'normal',
      'priority'      => 'high',
      'show_names'    => true,
      'repeatable'    => true,
      'closed'        => true,
    ) );
    // Title
    $cmb_what_it_does->add_field( array(
      'name'       => __( 'Title', 'cmb2' ),
      'id'         => $prefix . '_title',
      'type'       => 'text',
      'repeatable' => false,
      'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );
    //Content
    $cmb_what_it_does->add_field( array(
      'name'       => __( 'Content', 'cmb2' ),
      'id'         => $prefix . '_content',
      'type'       => 'textarea_small',
      'repeatable' => false,
      'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );
    //Background image section
    $cmb_what_it_does->add_field( array(
      'name'       => __( 'Background Image', 'cmb2' ),
      'desc'    => 'Min resolution: 1440x750 ',
      'id'         => $prefix . '_background_image',
      'type'       => 'file',
      'repeatable' => false,
      'show_on_cb' => 'cmb2_hide_if_no_cats',
      'text'    => array(
        'add_upload_file_text' => 'Add Image' 
      ),
      'query_args' => array(
        'type' => 'image/jpeg',
      ),
      'preview_size' => 'large'
    ) );
    //Tags Section
    $cmb_what_it_does->add_field( array(
      'name'    => 'Text Tag 1',
      'desc'    => 'field description Tag',
      'default' => 'Emergencies',
      'id'      => $prefix . '_text_tag_1',
      'type'    => 'text_small',
    ) );
    //Icon Tag section
    $cmb_what_it_does->add_field( array(
      'name'       => __( 'Icon 1', 'cmb2' ),
      'desc'    => 'Min resolution: 30x30 ',
      'id'         => $prefix . '_icon_tag_1',
      'type'       => 'file',
      'repeatable' => false,
      'options' => array(
        'url' => false, // Hide the text input for the url
      ),
      'show_on_cb' => 'cmb2_hide_if_no_cats',
      'text'    => array(
        'add_upload_file_text' => 'Add Icon',
      ),
      'query_args' => array(
        'type' => 'image/png',
      ),
      'preview_size' => 'small',
    ) );
    //Tags 2 Section
    $cmb_what_it_does->add_field( array(
      'name'    => 'Text Tag 2',
      'desc'    => 'field description Tag 2',
      'default' => 'Presence',
      'id'      => $prefix . '_text_tag_2',
      'type'    => 'text_small',
    ) );
    //Icon Tag 2 section
    $cmb_what_it_does->add_field( array(
      'name'       => __( 'Icon 2', 'cmb2' ),
      'desc'    => 'Min resolution: 30x30 ',
      'id'         => $prefix . '_icon_tag_2',
      'type'       => 'file',
      'repeatable' => false,
      'options' => array(
        'url' => false, // Hide the text input for the url
      ),
      'show_on_cb' => 'cmb2_hide_if_no_cats',
      'text'    => array(
        'add_upload_file_text' => 'Add Icon',
      ),
      'query_args' => array(
        'type' => 'image/png',
      ),
      'preview_size' => 'small',
    ) );
    //Tags 3 Section
    $cmb_what_it_does->add_field( array(
      'name'    => 'Text Tag 3',
      'desc'    => 'field description Tag 3',
      'default' => 'Headcount',
      'id'      => $prefix . '_text_tag_3',
      'type'    => 'text_small',
    ) );
    //Icon Tag 3 section
    $cmb_what_it_does->add_field( array(
      'name'       => __( 'Icon 3', 'cmb2' ),
      'desc'    => 'Min resolution: 30x30 ',
      'id'         => $prefix . '_icon_tag_3',
      'type'       => 'file',
      'repeatable' => false,
      'options' => array(
        'url' => false, // Hide the text input for the url
      ),
      'show_on_cb' => 'cmb2_hide_if_no_cats',
      'text'    => array(
        'add_upload_file_text' => 'Add Icon',
      ),
      'query_args' => array(
        'type' => 'image/png',
      ),
      'preview_size' => 'small',
    ) );
    //Tags 4 Section
    $cmb_what_it_does->add_field( array(
      'name'    => 'Text Tag 4',
      'desc'    => 'field description Tag 4',
      'default' => 'Metrics',
      'id'      => $prefix . '_text_tag_4',
      'type'    => 'text_small',
    ) );
    //Icon Tag 4 section
    $cmb_what_it_does->add_field( array(
      'name'       => __( 'Icon 4', 'cmb2' ),
      'desc'    => 'Min resolution: 30x30 ',
      'id'         => $prefix . '_icon_tag_4',
      'type'       => 'file',
      'repeatable' => false,
      'options' => array(
        'url' => false, // Hide the text input for the url
      ),
      'show_on_cb' => 'cmb2_hide_if_no_cats',
      'text'    => array(
        'add_upload_file_text' => 'Add Icon',
      ),
      'query_args' => array(
        'type' => 'image/png',
      ),
      'preview_size' => 'small',
    ) );
    
  }

