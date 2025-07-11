<?php
declare(strict_types=1);

namespace Plaisio\Cgi\Test;

use Plaisio\Cgi\Test\Plaisio\TestKernel;
use Plaisio\Kernel\Nub;

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
    $value = Nub::$nub->cgi->putLeader();
    self::assertSame('', $value);
  }

  //--------------------------------------------------------------------------------------------------------------------
  public function setUp(): void
  {
    new TestKernel();
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
