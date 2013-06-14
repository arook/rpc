<?php namespace Bluebanner\Rpc\Facades;

use Illuminate\Support\Facades\Facade;

/**
* 
*/
class Rpc extends Facade
{
  protected static function getFacadeAccessor() { return 'rpc'; }
}
