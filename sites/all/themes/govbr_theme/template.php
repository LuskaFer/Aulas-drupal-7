<?php

/**
 * @file
 * template.php
 */

/**
 * Implements hook_theme().
 *
 * Register theme hook implementations.
 *
 * @see _bootstrap_theme()
 */
function govbr_theme_theme(&$existing, $type, $theme, $path) {
  return _bootstrap_theme($existing, $type, $theme, $path);
}

/**
 * Declare various hook_*_alter() hooks.
 *
 * hook_*_alter() implementations must live (via include) inside this file so
 * they are properly detected when drupal_alter() is invoked.
 */
bootstrap_include('bootstrap', 'theme/alter.inc');

/**
 * Include helpers functions.
 */
bootstrap_include('govbr_theme', 'theme/helpers.inc');

/**
* Implementa hook_preprocess_HOOK() para os templates de preprocess.
*/
function govbr_preprocess_page(&$variables) {

// Adicione a região "second" para o menu secundário.

$variables ['page']['sidebar_second'] = array (
'#weight' => 10,
'#theme_wrappers' => 'region',
'#region' => 'sidebar_second',
'#attributes' => array ('class' => array('region', 'region-sidebar_second')),
);
}