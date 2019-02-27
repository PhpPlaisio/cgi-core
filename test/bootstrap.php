<?php
declare(strict_types=1);

use SetBased\Abc\Cgi\Test\TestAbc;

mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
date_default_timezone_set('Europe/Amsterdam');

new TestAbc();

require __DIR__.'/../vendor/autoload.php';
