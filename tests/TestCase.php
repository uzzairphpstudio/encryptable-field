<?php

namespace UzzairPhpStudio\EncryptableField\Tests;

use UzzairPhpStudio\EncryptableField\EncryptableFieldServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
  public function setUp(): void
  {
    parent::setUp();
  }

  protected function getPackageProviders($app)
  {
    return [
      EncryptableFieldServiceProvider::class,
    ];
  }

  protected function getEnvironmentSetUp($app)
  {
    
  }
}