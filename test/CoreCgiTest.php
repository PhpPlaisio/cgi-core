<?php
declare(strict_types=1);

namespace SetBased\Abc\Cgi\Test;

use SetBased\Abc\Abc;

/**
 * Concrete implementation of the unit test.
 */
class CoreCgiTest extends CgiTest
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test cases for putLeader.
   */
  public function testPutLeader(): void
  {
    $value = Abc::$cgi->putLeader();
    self::assertSame('', $value);
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
