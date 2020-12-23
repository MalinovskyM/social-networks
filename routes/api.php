<?php

use App\Http\Controllers\Api\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

/**
 *  роут на получения юзеров
 */
Route::get('all_users/{id?}',[UserController::class,'getAllUser']);

/**
 *  роут на получения комментариев по юзеру
 */
Route::get('all_comment/{user_id}',[CommentController::class,'getAllUserComment']);

/**
 *  роут на получения комментариев по юзеру через SQL
 */
Route::get('all_comment_db/{user_id}',[CommentController::class,'getAllUserCommentDb']);
