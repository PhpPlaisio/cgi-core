<?php
declare(strict_types=1);

namespace Plaisio\Cgi\Test;

/**
 * Concrete implementation of the unit test.
 */
class CoreCgiTest extends CgiTest
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * @inheritDoc
   */
  public function setUp(): void
  {
    $this->kernel = new TestKernel();
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test cases for putLeader.
   */
  public function testPutLeader(): void
  {
    $value = $this->kernel->cgi->putLeader();
    self::assertSame('', $value);
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
