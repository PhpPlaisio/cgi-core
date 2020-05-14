<?php
declare(strict_types=1);

namespace Plaisio\Cgi\Test;

use Plaisio\Cgi\Cgi;
use Plaisio\Cgi\CoreCgi;
use Plaisio\Obfuscator\DevelopmentObfuscatorFactory;
use Plaisio\Obfuscator\ObfuscatorFactory;
use Plaisio\PlaisioKernel;

/**
 * Kernel for testing purposes.
 */
class TestKernel extends PlaisioKernel
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the helper object for CGI variables.
   *
   * @return Cgi
   */
  public function getCgi(): Cgi
  {
    return new CoreCgi($this);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the obfuscator factory.
   *
   * @return ObfuscatorFactory
   */
  public function getObfuscator(): ObfuscatorFactory
  {
    return new DevelopmentObfuscatorFactory();
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
