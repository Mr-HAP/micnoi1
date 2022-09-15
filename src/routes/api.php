<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\UserController;

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
Route::post('/login', [AuthController::class, 'login']);
//Route::post('loginform', [LoginController::class, 'login']);
//Route::middleware('auth:api')->get('/offers');

Route::group(
    [
        'middleware' => ['auth:api', 'role:musico'],
    ],
    function (){
        //Offer Musician
//        Route::post('/offer/store', [OfferController::class, 'store']);
        Route::get('/offers', [OfferController::class, 'index']);
        Route::post('/offers', [OfferController::class, 'store']);
        Route::get('/offers/{id}', [OfferController::class, 'show']);
        Route::put('/offers/{id}', [OfferController::class, 'update']);

        Route::get('/users/{id}', [UserController::class, 'show']);
    }
);
