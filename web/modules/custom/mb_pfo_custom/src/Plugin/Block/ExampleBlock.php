<?php

namespace Drupal\mb_pfo_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "mb_pfo_custom_example",
 *   admin_label = @Translation("Example"),
 *   category = @Translation("mb_pfo_custom")
 * )
 */
class ExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
