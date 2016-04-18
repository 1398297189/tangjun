<?php

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

/*$app->get('/', function () use ($app) {
    return $app->version();
});*/
/*$app->get('admin', function () use ($app) {
    return $app->version();
});*/

/**
 * 公开接口
 */

//$app->get('/',['uses'=>'indexController@indx','as'=>'V1.index']);
$app->group(['namespace' => 'App\Http\Controllers\V1','prefix'=>'v1','middleware' => []], function($app)
{
    $app->get('/index',['uses'=>'indexController@index','as'=>'V1.index']);
    $app->get('/view',function(){
        return  view('index');
    });

});