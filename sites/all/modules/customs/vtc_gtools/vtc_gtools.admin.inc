<?php

/**
 * Implements hook_form().
 */
function vtc_gtools_admin_settings_form($form, &$form_state) {
  $apis = vtc_gtools_api_helper();

  foreach ($apis as $key => $url) {
    $form['vtc_api_key_' . $key] = array(
      '#title' => ucwords($key),
      '#type' => 'textfield',
      '#default_value' => variable_get('vtc_api_key_' . $key)
    );

  }

  $form['vtc_api_output'] = array(
    '#title' => t('Format des resultats des WS'),
    '#type' => 'select',
    '#options' => array(
      'json' => t('JSON'),
      'xml' => t('XML'),
    ),
    '#default_value' => variable_get('vtc_api_output', 'json'),
  );

  return system_settings_form($form);
}