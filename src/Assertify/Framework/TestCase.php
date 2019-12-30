<?php

namespace Assertify\Framework;

use ReflectionClass;
use ReflectionException;
use \PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCase extends PHPUnitTestCase
{

  /**
   * Call protected/private method of a class.
   *
   * @param object &$object    Instantiated object that we will run method on.
   * @param string $methodName Method name to call
   * @param array  $parameters Array of parameters to pass into method.
   *
   * @return mixed Method return.
   */
  public function invokeMethod(
    &$object,
    $methodName,
    $parameters = []
  )
  {
    $reflection = new \ReflectionClass(get_class($object));
    $method = $reflection->getMethod($methodName);
    $method->setAccessible(true);

    return $method->invokeArgs($object, $parameters);
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

  /**
   * Check whether an array has a certain index
   *
   * @param $index
   * @param $array
   * @param string $errorMessage
   */
  public function assertHasIndex($index, $array, $errorMessage = "")
  {
    return $this
      ->assertTrue(
        array_key_exists($index, $array),
        $errorMessage
      );
  }
}
