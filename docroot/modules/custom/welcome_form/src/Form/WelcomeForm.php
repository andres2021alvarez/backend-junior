<?php

namespace Drupal\welcome_form\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\FormBase;

/**
 *
 */
class WelcomeForm extends FormBase {

  /**
   *
   */
  public function getFormId() {
    return 'welcome_form';
  }

  /**
   *
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {
    $form['intro'] = [
      '#type' => 'markup',
      '#markup' => '<div> please fill out welcome form</div>',
    ];

    $form['name'] = [
      '#type' => 'textfield',
      '#title' => 'Your name',
      '#required' => TRUE,
    ];

    $form['actions'] = [
      '#type' => 'actions',
    ];

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit Welcome Form'),
      '#button_type' => 'primary',
    ];

    return $form;
  }

  /**
   *
   */
  public function submitForm(&$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $this->messenger()->addMessage(
      $this->t('Thank you @name! Your welcome form has been submitted successfully.', [
        '@name' => $values['name'],
      ])
    );
  }

}
