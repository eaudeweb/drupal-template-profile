<?php

/**
 * @file
 * Enables modules and site configuration for a standard site installation.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_FORM_ID_alter() for install_configure_form().
 *
 * Allows the profile to alter the site configuration form.
 */
function edwp_form_install_configure_form_alter(&$form, FormStateInterface $form_state) {
  $form['#submit'][] = 'edwp_form_install_configure_submit';
}

/**
 * Submission handler to finish configuration.
 */
function edwp_form_install_configure_submit($form, FormStateInterface $form_state) {
  $site_mail = $form_state->getValue('site_mail');
}
