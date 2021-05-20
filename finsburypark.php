<?php

require_once 'finsburypark.civix.php';
use CRM_Finsburypark_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function finsburypark_civicrm_config(&$config) {
  _finsburypark_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_alterBundle(). Add Bootstrap.
 */

function finsburypark_civicrm_alterBundle(CRM_Core_Resources_Bundle $bundle) {
  $theme = Civi::service('themes')->getActiveThemeKey();
  if ($theme !== 'finsburypark') {
    return;
  }

  switch ($theme . ':' . $bundle->name) {
    case 'finsburypark:bootstrap3':
      $bundle->clear();
      $bundle->addStyleFile('finsburypark', 'css/bootstrap3.css');
      $bundle->addScriptFile('finsburypark', 'js/bootstrap.min.js', [
        'translate' => FALSE,
      ]);
      $bundle->addScriptFile('finsburypark', 'js/noConflict.js', [
        'translate' => FALSE,
      ]);
      break;
  }
  if ($bundle->name == 'coreStyles') {
    $bundle->filter(function($snippet) {
      if ($snippet['name'] == 'civicrm:css/civicrm.css') {
        $snippet['weight'] = 290;
        return $snippet;
      }
      elseif (($snippet['name'] == 'civicrm:css/custom.css') or (strpos($snippet['name'], 'custom.css') !== false)) {
        $snippet['weight'] = 300;
        return $snippet;
      }
      return TRUE;
    });
  }
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function finsburypark_civicrm_xmlMenu(&$files) {
  _finsburypark_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function finsburypark_civicrm_install() {
  _finsburypark_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function finsburypark_civicrm_postInstall() {
  _finsburypark_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function finsburypark_civicrm_uninstall() {
  _finsburypark_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function finsburypark_civicrm_enable() {
  _finsburypark_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function finsburypark_civicrm_disable() {
  _finsburypark_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function finsburypark_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _finsburypark_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function finsburypark_civicrm_managed(&$entities) {
  _finsburypark_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function finsburypark_civicrm_caseTypes(&$caseTypes) {
  _finsburypark_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function finsburypark_civicrm_angularModules(&$angularModules) {
  _finsburypark_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function finsburypark_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _finsburypark_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function finsburypark_civicrm_entityTypes(&$entityTypes) {
  _finsburypark_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function finsburypark_civicrm_themes(&$themes) {
  _finsburypark_civix_civicrm_themes($themes);
}
