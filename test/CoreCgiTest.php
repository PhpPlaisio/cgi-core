<?php

namespace SetBased\Abc\Cgi\Test;

use SetBased\Abc\Abc;

/**
 * Concrete implementation of the unit test.
 */
class CoreCgiTest extends CgiTest
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Object constructor.
   */
  public static function setUpBeforeClass()
  {
    new TestAbc();
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test cases for putLeader.
   */
  public function testPutLeader()
  {
    $value = Abc::$cgi->putLeader();
    self::assertSame('', $value);
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
