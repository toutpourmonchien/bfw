<?php
/**
 * @file
 * bfw_ct_reservation.features.inc
 */

/**
 * Implements hook_node_info().
 */
function bfw_ct_reservation_node_info() {
  $items = array(
    'reservation' => array(
      'name' => t('Reservation'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
