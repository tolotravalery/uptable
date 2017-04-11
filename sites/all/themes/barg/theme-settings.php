<?php

function barg_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['#submit'][] = 'barg_settings_form_submit';

  // Get all themes.
  $themes = list_themes();
  // Get the current theme
  $active_theme = $GLOBALS['theme_key'];
  $form_state['build_info']['files'][] = str_replace("/$active_theme.info", '', $themes[$active_theme]->filename) . '/theme-settings.php';

  $theme_path = drupal_get_path('theme', 'barg');
  $form['settings'] = array(
      '#type' => 'vertical_tabs',
      '#title' => t('Theme settings'),
      '#weight' => 2,
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['general_setting'] = array(
      '#type' => 'fieldset',
      '#title' => t('General Settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['general_setting']['text_logo'] = array(
      '#type' => 'textfield',
      '#title' => t('Text logo'),
      '#default_value' => theme_get_setting('text_logo', 'barg'),
  );

  $form['settings']['general_setting']['homepage_style'] = array(
      '#title' => t('Homepage style'),
      '#type' => 'select',
      '#options' => array(
        'multipage' => t('Multi page'),
        'onepage' => t('One page'),
      ),
      '#default_value' => theme_get_setting('homepage_style', 'barg'),
  );

  $form['settings']['general_setting']['body_class'] = array(
      '#type' => 'textfield',
      '#title' => t('Body class'),
      '#default_value' => theme_get_setting('body_class', 'barg'),
      '#description'  => t('Use add class css for Body. Example : no_passpartu, rounded.'),
  );


  $form['settings']['general_setting']['general_setting_tracking_code'] = array(
      '#type' => 'textarea',
      '#title' => t('Tracking Code'),
      '#default_value' => theme_get_setting('general_setting_tracking_code', 'barg'),
  );

  $form['settings']['general_setting']['location_address'] = array(
      '#type' => 'textfield',
      '#title' => t('Location address'),
      '#default_value' => theme_get_setting('location_address', 'barg'),
  );

  $form['settings']['general_setting']['contact_email'] = array(
      '#type' => 'textfield',
      '#title' => t('Contact email'),
      '#default_value' => theme_get_setting('contact_email', 'barg'),
      '#description'  => t('Email contact, support')
  );

  $form['settings']['general_setting']['phone_contact'] = array(
      '#type' => 'textfield',
      '#title' => t('Phone contact 1'),
      '#default_value' => theme_get_setting('phone_contact', 'barg'),
  );

  $form['settings']['general_setting']['phone_contact_2'] = array(
      '#type' => 'textfield',
      '#title' => t('Phone contact 2'),
      '#default_value' => theme_get_setting('phone_contact_2', 'barg'),
  );

  $form['settings']['header'] = array(
      '#type' => 'fieldset',
      '#title' => t('Header settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

   $form['settings']['header']['header_style'] = array(

      '#title' => t('Header style'),

      '#type' => 'select',

      '#options' => array(
        'header1' => t('Header style 1'),
        'header1a' => t('Header style 1a'),
        'header1b' => t('Header style 1b'),
        'header1c' => t('Header style 1c'),
        'header2' => t('Header style 2'),
        'header3' => t('Header style 3'),
        'header4' => t('Header style 4'),
        'header5' => t('Header style 5'),
      ),

      '#default_value' => theme_get_setting('header_style', 'barg'),

  );

   $form['settings']['header']['menu_overlay'] = array(

      '#title' => t('Fixed menu overlay'),

      '#type' => 'select',

      '#options' => array(
        'off' => t('OFF'),
        'on' => t('ON'),
      ),

      '#default_value' => theme_get_setting('menu_overlay', 'barg'),

  );

   $form['settings']['header']['menu_overlay_color'] = array(
      '#type' => 'jquery_colorpicker',
      '#title' => t('Overlay menu color'),
      '#default_value' => theme_get_setting('menu_overlay_color', 'barg'),
      '#description'  => t('Use add hex color for Overlay menu'),
  );

   $form['settings']['header']['menu_overlay_opacity'] = array(
      '#type' => 'textfield',
      '#title' => t('Overlay menu opacity'),
      '#default_value' => theme_get_setting('menu_overlay_opacity', 'barg'),
  );

  $form['settings']['font_icon'] = array(
      '#type' => 'fieldset',
      '#title' => t('Font icon settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['font_icon']['font_icon_style'] = array(

      '#title' => t('Font icon style'),

      '#type' => 'select',

      '#options' => array(
        'build/flaticon.css' => t('Build font icon'),
        'health/flaticon.css' => t('Health font icon'),
        'sound/flaticon.css' => t('Sound font icon'),
        'spa/flaticon.css' => t('Spa font icon'),
        'dentist/flaticon.css' => t('Dentist font icon'),
        'education/flaticon.css' => t('Education font icon'),
      ),

      '#default_value' => theme_get_setting('font_icon_style', 'barg'),

  );

  $form['settings']['portfolio'] = array(
      '#type' => 'fieldset',
      '#title' => t('Portfolio settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['portfolio']['portfolio_style'] = array(

      '#title' => t('Portfolio style'),

      '#type' => 'select',

      '#options' => array(

        'left' => t('Portfolio sidebar left'),
        'right' => t('Portfolio sidebar right'),
        'masonry_two' => t('Masonry two columns'),
        'masonry_three' => t('Masonry three columns'),
      ),

      '#default_value' => theme_get_setting('portfolio_style', 'barg'),

  );

  $form['settings']['shop'] = array(
      '#type' => 'fieldset',
      '#title' => t('Shop settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['shop']['shop_style'] = array(

      '#title' => t('Shop style'),

      '#type' => 'select',

      '#options' => array(

        'left' => t('Shop sidebar left'),
        'right' => t('Shop sidebar right'),
        'full_two' => t('Full width two columns'),
        'full_three' => t('Full width three columns'),
        'full_four' => t('Full width four columns'),
      ),

      '#default_value' => theme_get_setting('shop_style', 'barg'),

  );

  $form['settings']['shop']['shop_background_breadcrumb'] = array(
    '#type'     => 'managed_file',
    '#title'    => t('Shop breadcrumb background '),
    '#required' => FALSE,
    '#upload_location' => 'public://shop-background/',
    '#default_value' => theme_get_setting('shop_background_breadcrumb','barg'),
    '#upload_validators' => array(
    'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );


   $form['settings']['blog'] = array(
      '#type' => 'fieldset',
      '#title' => t('Blog settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

   $form['settings']['blog']['blog_style'] = array(

      '#title' => t('Blog style'),

      '#type' => 'select',

      '#options' => array(

        'left' => t('Blog sidebar left'),
        'right' => t('Blog sidebar right'),
        'full' => t('Blog full width'),
        'masonry_left' => t('Masonry sidebar left'),
        'masonry_right' => t('Masonry sidebar right'),
        'masonry_two' => t('Masonry two columns'),
        'masonry_three' => t('Masonry three columns'),
      ),

      '#default_value' => theme_get_setting('blog_style', 'barg'),

  );



  $form['settings']['footer'] = array(
      '#type' => 'fieldset',
      '#title' => t('Footer settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['footer']['footer_style'] = array(
      '#title' => t('Footer style'),
      '#type' => 'select',
      '#options' => array(
        'footer1' => t('Footer style 1'),
        'footer2' => t('Footer style 2'),
      ),
      '#default_value' => theme_get_setting('footer_style', 'barg'),
  );

  $form['settings']['footer']['footer_color'] = array(
      '#type' => 'jquery_colorpicker',
      '#title' => t('Footer color'),
      '#default_value' => theme_get_setting('footer_color', 'barg'),
      '#description'  => t('Use add hex color for footer'),
  );

  $form['settings']['footer']['footer_background_image'] = array(
    '#type'     => 'managed_file',
    '#title'    => t('Footer background image'),
    '#required' => FALSE,
    '#upload_location' => 'public://footer-background/',
    '#default_value' => theme_get_setting('footer_background_image','barg'),
    '#upload_validators' => array(
    'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );

  $form['settings']['footer']['footer_overlay'] = array(
      '#title' => t('Footer overlay'),
      '#type' => 'select',
      '#options' => array(
        'off' => t('OFF'),
        'on' => t('ON'),
      ),
      '#default_value' => theme_get_setting('footer_overlay', 'barg'),
  );

  $form['settings']['footer']['footer_overlay_image'] = array(
    '#type'     => 'managed_file',
    '#title'    => t('Footer overlay image'),
    '#required' => FALSE,
    '#upload_location' => 'public://footer-background/',
    '#default_value' => theme_get_setting('footer_overlay_image','barg'),
    '#upload_validators' => array(
    'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );

  $form['settings']['footer']['footer_overlay_color'] = array(
      '#type' => 'jquery_colorpicker',
      '#title' => t('Footer overlay color'),
      '#default_value' => theme_get_setting('footer_overlay_color', 'barg'),
      '#description'  => t('Use add hex color for overlay footer'),
  );

  $form['settings']['footer']['footer_overlay_opacity'] = array(
      '#title' => t('Footer overlay opacity'),
      '#type' => 'select',
      '#options' => array(
        '0.1' => t('0.1'),
        '0.2' => t('0.2'),
        '0.3' => t('0.3'),
        '0.4' => t('0.4'),
        '0.5' => t('0.5'),
        '0.6' => t('0.6'),
        '0.7' => t('0.7'),
        '0.8' => t('0.8'),
        '0.9' => t('0.9'),
        '1' => t('1'),
      ),
      '#default_value' => theme_get_setting('footer_overlay_opacity', 'barg'),
  );

  $form['settings']['footer']['footer_class'] = array(
      '#type' => 'textfield',
      '#title' => t('Footer class'),
      '#default_value' => theme_get_setting('footer_class', 'barg'),
      '#description'  => t('Use add class css for footer'),
  );

  $form['settings']['footer']['footer_copyright_message'] = array(
      '#type' => 'textarea',
      '#title' => t('Footer copyright message'),
      '#default_value' => theme_get_setting('footer_copyright_message', 'barg'),
  );


	$form['settings']['custom_css'] = array(
		  '#type' => 'fieldset',
		  '#title' => t('Custom CSS'),
		  '#collapsible' => TRUE,
		  '#collapsed' => FALSE,
	  );

	$form['settings']['custom_css']['custom_css'] = array(
		  '#type' => 'textarea',
		  '#title' => t('Custom CSS'),
		  '#default_value' => theme_get_setting('custom_css', 'barg'),
		  '#description'  => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }')
	  );

}

function barg_settings_form_submit(&$form, $form_state) {

  $image_fid = $form_state['values']['footer_background_image'];
  $image_fid2 = $form_state['values']['footer_overlay_image'];
  $image_fid3 = $form_state['values']['shop_background_breadcrumb'];

  $image1 = file_load($image_fid);
  $image2 = file_load($image_fid2);
  $image3 = file_load($image_fid3);
  if (is_object($image1)) {
  // Check to make sure that the file is set to be permanent.
    if ($image1->status == 0) {
    // Update the status.
    $image1->status = FILE_STATUS_PERMANENT;
    // Save the update.
    file_save($image1);
    // Add a reference to prevent warnings.
    file_usage_add($image1, 'barg', 'theme', 1);
    }
  }
  if (is_object($image2)) {
  // Check to make sure that the file is set to be permanent.
    if ($image2->status == 0) {
    // Update the status.
    $image2->status = FILE_STATUS_PERMANENT;
    // Save the update.
    file_save($image2);
    // Add a reference to prevent warnings.
    file_usage_add($image2, 'barg', 'theme', 1);
    }
  }
  if (is_object($image3)) {
  // Check to make sure that the file is set to be permanent.
    if ($image3->status == 0) {
    // Update the status.
    $image3->status = FILE_STATUS_PERMANENT;
    // Save the update.
    file_save($image3);
    // Add a reference to prevent warnings.
    file_usage_add($image3, 'barg', 'theme', 1);
    }
  }
}