<?php

namespace Aptof\BookKeeping\Facades;

use Illuminate\Support\Facades\Facade;

class Accountant extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'accountant';
  }
}