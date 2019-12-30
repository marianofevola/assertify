<?php

namespace Assertify\Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

  /**
   * A basic test example.
   *
   * @return void
   */
  public function testisTrue()
  {
    $this->assertTrue(true);
  }

  /**
   * A basic test example.
   *
   * @return void
   */
  public function testisFalse()
  {
    $this->assertFalse(1 == 2);
  }
}
