<?php

namespace Assertify\Framework;

use ReflectionClass;
use ReflectionException;

class TestCase extends \PHPUnit\Framework\TestCase
{

  /**
   * Test a private/protected method
   *
   * @param $className
   * @param $name
   * @return \ReflectionMethod
   * @throws \ReflectionException
   */
  protected function getMethod($className, $name)
  {
    $class = new ReflectionClass($className);
    $method = $class->getMethod($name);
    $method->setAccessible(true);

    return $method;
  }

  /**
   * @param $class
   * @param $property
   * @return array
   *
   * @throws ReflectionException
   */
  protected function getNonPublicProperty($class, $property)
  {
    $class = new ReflectionClass($class);
    $properties = $class->getDefaultProperties();

    return $properties[$property];
  }
}
