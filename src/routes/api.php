<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\ApiLoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('check-auth', function() {
    return Auth::check() ? response('true') : response('false');
});
Route::post('/login', [ApiLoginController::class, 'login']);
//Route::post('loginform', [LoginController::class, 'login']);
