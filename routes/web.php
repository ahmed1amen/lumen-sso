<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;


$router->get('/', function (\Illuminate\Http\Request $request) {

//media/ahmed/f/Laravel-Projects/MediaGate/Microservices/sso/app/config/app.php
//media/ahmed/f/Laravel-Projects/MediaGate/Microservices/sso/config/app.php
  Session::put('name', 'Lumen-Session');
    return response()->json([
        'session.name'
    ]);
});

$router->get('/session', function (\Illuminate\Http\Request $request) {

    return response()->json([
        'session.name' => $request->session()->get('name'),
    ]);
});
