<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\hello_world\HelloWorldSalutation;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller for the salutation message.
 */
class HelloWorldController extends ControllerBase
{

  protected $salutation;

  /**
   * HelloWorldController constructor.
   * @param $salutation
   */
  public function __construct(HelloWorldSalutation $salutation)
  {
    $this->salutation = $salutation;
  }

  public static function create(ContainerInterface $container)
  {
    return new static($container->get('hello_world.salutation'));
  }


  /**
   * Hello World
   *
   * @return array Our message
   */
  public function helloWorld(): array
  {
    return ['#markup' => $this->salutation->getSalutation()];
  }
}
