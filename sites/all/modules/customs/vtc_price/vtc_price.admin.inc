<?php

function vtc_price_admin_settings_form() {
  $form['vtc_price_unit_price'] = array(
    '#type' => t('textfield'),
    '#title' => t('Prix tarrifaire minimum pour la course'),
    '#default_value' => variable_get('vtc_price_unit_price', 2),
  );

  $form['vtc_unit_price_by_km1'] = array(
    '#type' => t('textfield'),
    '#title' => t('Prix au KM de 8h à 16h'),
    '#default_value' => variable_get('vtc_unit_price_by_km1', 2),
  );

  $form['vtc_unit_price_by_km2'] = array(
    '#type' => t('textfield'),
    '#title' => t('Prix au KM de 16h à 8h'),
    '#default_value' => variable_get('vtc_unit_price_by_km2', 2),
  );

  return system_settings_form($form);
}
