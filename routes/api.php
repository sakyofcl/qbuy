<?php

use Illuminate\Http\Request;

use App\Http\Controllers\api\admin\apiCategoryController;
use App\Http\Controllers\api\admin\apiProductController;
use App\Http\Controllers\api\admin\apiUserController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


#---------------- [ CATEGORY ]--------------#

Route::get('/category/sub', [apiCategoryController::class, 'getSubCategory']);


#---------------- [ PRODUCT ]--------------#
Route::post('/product/store', [apiProductController::class, 'storeProduct']);

#---------------- [ USER ]--------------#
Route::post('/user/create/store', [apiUserController::class, 'storeUser']);
Route::post('/user/profile/update', [apiUserController::class, 'updateProfile']);
Route::post('/user/ship/create', [apiUserController::class, 'createShippingAddress']);
Route::post('/user/ship/update', [apiUserController::class, 'updateShippingAddress']);
Route::get('/user/ship/delete', [apiUserController::class, 'deleteShippingAddress']);
