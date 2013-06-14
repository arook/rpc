<?php namespace Bluebanner\Rpc;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class HomeController extends BaseController
{
  
  public function index()
  {
    return View::make('rpc::home');
  }

}
