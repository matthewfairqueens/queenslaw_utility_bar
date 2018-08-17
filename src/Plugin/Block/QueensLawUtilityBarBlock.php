<?php

namespace Drupal\queenslaw_utility_bar\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;

/**
 * Provides a Utility bar block.
 *
 * @Block(
 *   id = "queenslaw_utility_bar",
 *   admin_label = @Translation("Queen's utility bar"),
 * )
 */
class QueensLawUtilityBarBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $return = [
      '#attached' => [
        'library' => ['queenslaw_utility_bar/queenslaw-utility-bar'],
      ],
    ];
    // use #children instead of #markup to avoid having the "style" attribute stripped
    if ($markup = _queenslaw_utility_bar_content()) $return['#children'] = $markup;
    return $return;
  }

}
?>
