<?php
declare(strict_types=1);

namespace SetBased\Abc\Cgi\Test;

use SetBased\Abc\Abc;
use SetBased\Abc\Cgi\CoreCgi;
use SetBased\Abc\Obfuscator\DevelopmentObfuscatorFactory;

/**
 * Concrete implementation of ABC.
 */
class TestAbc extends Abc
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Object constructor.
   */
  public function __construct()
  {
    parent::__construct();

    Abc::$cgi               = new CoreCgi();
    Abc::$obfuscatorFactory = new DevelopmentObfuscatorFactory();
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
