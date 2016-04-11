<?php

function towns_form_system_theme_settings_alter(&$form, &$form_state) {
    $theme_path = drupal_get_path('theme', 'towns');
    $form['#submit'][] = 'towns_settings_form_submit';

    // Get all themes.
    $themes = list_themes();
    // Get the current theme
    $active_theme = $GLOBALS['theme_key'];
    $form_state['build_info']['files'][] = str_replace("/$active_theme.info", '', $themes[$active_theme]->filename) . '/theme-settings.php';
  	
  	$form['settings'] = array(
      	'#type' => 'vertical_tabs',
      	'#title' => t('Theme settings'),
      	'#weight' => 2,
      	'#collapsible' => TRUE,
      	'#collapsed' => FALSE,
        '#attached' => array(
          'css' => array(drupal_get_path('theme', 'towns') . '/css/drupalet_base/admin.css'),
          'js' => array(
            drupal_get_path('theme', 'towns') . '/js/drupalet_admin/admin.js',
        ),
      ),
  	);
    
  	$form['settings']['general_setting'] = array(
      	'#type' => 'fieldset',
      	'#title' => t('General Settings'),
      	'#collapsible' => TRUE,
      	'#collapsed' => FALSE,
  	);

  	$form['settings']['general_setting']['general_setting_tracking_code'] = array(
      	'#type' => 'textarea',
      	'#title' => t('Tracking Code'),
      	'#default_value' => theme_get_setting('general_setting_tracking_code', 'towns'),
  	);

  	//shop catalog
 // Blog settings
  $form['settings']['blog'] = array(
    '#type' => 'fieldset',
    '#title' => t('Blog settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['settings']['blog']['blog_listing'] = array(
    '#type' => 'fieldset',
    '#title' => t('Blog listing'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
   $form['settings']['blog']['blog_listing']['blog_subtitle'] = array(
    '#type' => 'textfield',
    '#title' => t('Subtitle'),
    '#description' => t('Enter subtitle text here'),
    '#default_value' => theme_get_setting('blog_subtitle', 'towns'),
  );
  $form['settings']['blog']['blog_listing']['blog_sidebar'] = array(
    '#type' => 'select',
    '#title' => t('Default sidebar'),
    '#required' => true,
    '#options' => array(
      'none' => t('None'),
      'left' => t('Left sidebar'),
      'right' => t('Right sidebar'),
      ),
    '#default_value' => theme_get_setting('blog_sidebar', 'towns'),
  );

 

  // custom css
	$form['settings']['custom_css'] = array(
		'#type' => 'fieldset',
		'#title' => t('Custom CSS'),
		'#collapsible' => TRUE,
		'#collapsed' => FALSE,
	);
  

	$form['settings']['custom_css']['custom_css'] = array(
		'#type' => 'textarea',
		'#title' => t('Custom CSS'),
		'#default_value' => theme_get_setting('custom_css', 'towns'),
		'#description'  => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }')
	);
   $form['settings']['skin'] = array(

        '#type' => 'fieldset',

        '#title' => t('Switcher Style'),

        '#collapsible' => TRUE,

        '#collapsed' => FALSE,

    );


  //Disable Switcher style;

  $form['settings']['skin']['towns_disable_switch'] = array(

      '#title' => t('Switcher style'),
      '#required' => true,
      '#type' => 'select',

      '#options' => array('on' => t('ON'), 'off' => t('OFF')),

      '#default_value' => theme_get_setting('towns_disable_switch', 'towns'),

  );

  $form['settings']['skin']['built_in_skins'] = array(
    '#type' => 'radios',
    '#required' => true,
    '#title' => t('Predefined skins'),
    '#options' => array(
        'blue' => t('Blue'),
        'green' => t('Green'),
        'orange' => t('Orange'),
        'yellow' => t('Yellow'),
        'red' => t('Red'),
        'gray' => t('Gray'),
    ),


    '#default_value' => theme_get_setting('built_in_skins','towns'),
  );

}
function towns_settings_form_submit(&$form, $form_state) {
  /*$image_fid = $form_state['values']['banner_image'];
  $image1 = file_load($image_fid);

  if (is_object($image1)) {
  // Check to make sure that the file is set to be permanent.
    if ($image1->status == 0) {
      // Update the status.
      $image1->status = FILE_STATUS_PERMANENT;
      // Save the update.
      file_save($image1);
      // Add a reference to prevent warnings.
      file_usage_add($image1, 'towns', 'theme', 1);
    }
  }*/
}