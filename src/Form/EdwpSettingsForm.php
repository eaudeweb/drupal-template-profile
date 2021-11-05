<?php

namespace Drupal\edwp\Form;


use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class EdwpSettingsForm extends FormBase {


  public function getFormId() {
    return 'edwp_profile_settings';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['use_google_analytics'] = [
      '#type' => 'checkbox',
      '#title' => t('Use Google Analytics')
    ];
    $form['use_mail_login'] = [
      '#type' => 'checkbox',
      '#title' => t('Allow users to log in with their email address')
    ];
    $form['use_recaptcha'] = [
      '#type' => 'checkbox',
      '#title' => t('Enable ReCaptcha protection for forms')
    ];
    // Submit Button
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Save Settings'),
    );
    $form['#title'] = t('Select profile configuration');
    return $form;

  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    // TODO: Implement submitForm() method.
  }

}
