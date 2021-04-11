<?php

namespace Aptof\BookKeeping;

use Illuminate\Support\ServiceProvider;

class BookKeepingServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->bind('accountant', function ($app){
      return new Accountant();
    });
  }

  public function boot()
  {

  }
}