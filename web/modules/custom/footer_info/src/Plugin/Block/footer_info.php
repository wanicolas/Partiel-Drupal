<?php

namespace Drupal\footer_info\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'footer_info' Block.
 *
 * @Block(
 *   id = "footer_info",
 *   admin_label = @Translation("footer_info"),
 *   category = @Translation("footer_info"),
 * )
 */
class footer_info extends BlockBase
{

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        return [
            '#markup' => $this->t('user: admin | password: admin'),
        ];
    }
}
