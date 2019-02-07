<?php

use Illuminate\Http\Request;

//Con apiResourse Solo muestra las rutas declaradas en el controller indicado
Route::apiResource('products', 'ProductController');
Route::apiResource('categories', 'CategoryController');
Route::apiResource('Transactions', 'TransactionController');
Route::apiResource('buyers', 'BuyerController');
Route::apiResource('sellers', 'SellerController');
Route::apiResource('users', 'UserController');
