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
    return [
      '#theme' => 'welcome_page',
      '#welcome_message' => 'Welcome to our amazing website',
    ];
  }

}
