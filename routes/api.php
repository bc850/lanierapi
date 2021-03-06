<?php

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// testing
Route::get('/testing-the-api', function() {
    return response()->json([
        "message" => "the API is working"
    ]);
});

Route::apiResource('/products', 'ProductController');

Route::get('/featured-products', 'ProductController@featured_products')->name('products.featured');

Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact web@laniersupply.com'], 404);
});
