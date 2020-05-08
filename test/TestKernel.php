<?php
declare(strict_types=1);

namespace Plaisio\Cgi\Test;

use Plaisio\Cgi\Cgi;
use Plaisio\Cgi\CoreCgi;
use Plaisio\Kernel\Nub;
use Plaisio\Obfuscator\DevelopmentObfuscatorFactory;
use Plaisio\Obfuscator\ObfuscatorFactory;

/**
 * Kernel for testing purposes.
 */
class TestKernel extends Nub
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Object constructor.
   */
  public function __construct()
  {
    parent::__construct();
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the helper object for CGI variables.
   *
   * @return Cgi
   */
  public function getCgi(): Cgi
  {
    return new CoreCgi();
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the obfuscator factory.
   *
   * @return ObfuscatorFactory
   */
  public function getObfuscatorFactory(): ObfuscatorFactory
  {
    return new DevelopmentObfuscatorFactory();
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
