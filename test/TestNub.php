<?php
declare(strict_types=1);

namespace Plaisio\Cgi\Test;

use Plaisio\Cgi\CoreCgi;
use Plaisio\Kernel\Nub;
use Plaisio\Obfuscator\DevelopmentObfuscatorFactory;

/**
 * Concrete implementation of ABC.
 */
class TestNub extends Nub
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Object constructor.
   */
  public function __construct()
  {
    parent::__construct();

    self::$cgi               = new CoreCgi();
    self::$obfuscatorFactory = new DevelopmentObfuscatorFactory();
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
