<?php
declare(strict_types=1);

use Plaisio\Cgi\Test\TestKernel;

mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
date_default_timezone_set('Europe/Amsterdam');

new TestKernel();

require __DIR__.'/../vendor/autoload.php';
