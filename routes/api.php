<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Client;
use App\Http\Controllers;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


//post
Route::get('/posts', function(){
    $post = Post::create([
        'name' => 'Andy',
        'address' => 'Banlasan',
        'phone' => '12346789',
        'capitalization' => 10.00,
        'loan_balance' => 20.00
        ]);

        return $post;
});

Route::post('/posts');

Route::put('/posts/{id}');

Route::delete('/post/{id}');



Route::get('/posts', 'PostController@index');
Route::post('/posts', 'PostController@store');
Route::put('/posts', 'PostController@update');
Route::delete('/posts', 'PostController@destroy');



Route::resource('/posts', 'PostController');

*/
Route::get('client/balance', 'ClientController@balance');
Route::get('client/dividend', 'ClientController@dividend');
Route::patch('client/{client}/deposit/{amount}', 'ClientController@deposit');
Route::get('client/{client}', 'ClientController@show');
Route::post('client', 'ClientController@Store');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
