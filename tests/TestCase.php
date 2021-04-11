<?php
namespace Aptof\BookKeeping\Tests;

use Aptof\BookKeeping\BookKeepingServiceProvider;

Class TestCase extends \Orchestra\Testbench\TestCase
{
  public function setUp(): void
  {
    parent::setUp();
  }

  protected function getPackageProviders($app)
  {
    return [
      BookKeepingServiceProvider::class
    ];
  }

  protected function getEnvironmentSetUp($app)
  {
    
  }
}