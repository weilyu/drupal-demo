<?php

namespace Drupal\hello_world;

use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Prepare the salutation to the world.
 */
class HelloWorldSalutation
{

  use StringTranslationTrait;

  public function getSalutation()
  {
    $time = new \DateTime();
    $time_format = (int)$time->format('G');
    if ($time_format >= 00 && $time_format < 12) {
      return $this->t('Good morning world');
    } elseif ($time_format >= 12 && $time_format < 18) {
      return $this->t('Good afternoon world');
    } else {
      return $this->t('Good Evening world');
    }
  }

}
