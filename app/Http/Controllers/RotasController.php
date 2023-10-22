<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class RotasController extends Controller
{

    public function index()
    {
      $routes = Route::getRoutes()->getRoutes();
      return $routes;
    }

}