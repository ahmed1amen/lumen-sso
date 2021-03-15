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


$router->get('/', function (\Illuminate\Http\Request $request) {


    $new=\App\Models\User::find(1);


    return response()->json($new->createToken('My Token', [
        'place-orders'
    ])->toArray());


});

$router->get('/session', function (\Illuminate\Http\Request $request) {
    return response()->json([
        'session.name' => $request->session()->get('name'),
    ]);
});
