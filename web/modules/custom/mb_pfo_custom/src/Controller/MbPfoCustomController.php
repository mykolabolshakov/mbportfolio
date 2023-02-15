<?php

namespace Drupal\mb_pfo_custom\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for mb_pfo_custom routes.
 */
class MbPfoCustomController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
