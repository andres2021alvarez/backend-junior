<?php

namespace Drupal\welcome_form\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 *
 */
class WelcomeController extends ControllerBase {

  /**
   *
   */
  public function page(): array {

    $form = $this->formBuilder()->getForm('Drupal\welcome_form\Form\WelcomeForm');

    return [
      '#theme' => 'welcome_page',
      '#form' => $form,
      '#welcome_message' => 'Welcome to our amazing website',

    ];
  }

}
