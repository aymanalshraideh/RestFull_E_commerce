<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCountroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
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


Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    //*******reegister user*****
    Route::post('/registerUser', [UserCountroller::class, 'registerUser']);
    //*******Log In user***** */
    Route::post('/loginUser', [UserCountroller::class, 'login']);
    //*******Single User *****
    Route::get('singleuser/{id}', [UserCountroller::class, 'showSingleUser']);
    //*******all Users *****
    Route::get('showAllUsers', [UserCountroller::class, 'showAllUsers']);
    //*******delete User *****
    Route::get('deleteuser/{id}', [UserCountroller::class, 'destroy']);
    //*******all Categories *****
    Route::get('showallcategoreis', [CategoryController::class, 'showAllCategoreis']);
    //****** edit category ****/
    Route::get('editsingleCategory/{id}', [CategoryController::class, 'edit']);
    //*******Show Single category *****
    Route::get('showsinglecategory/{id}', [CategoryController::class, 'showSingleCategory']);
    //*******delete category *****
    Route::get('deletecategory/{id}', [CategoryController::class, 'destroy']);
    //*******reegister category*****
    Route::post('/registercategory', [CategoryController::class, 'storeCategory']);
    //*****update category *****/
    Route::get('dupdatecategory/{id}', [CategoryController::class, 'update']);
    //*************************************************** */
    //*******all SubCategories *****
    Route::get('showallsubcategoreis', [SubcategoryController::class, 'showAllsubCategoreis']);
    //*******Show Single category *****
    Route::get('showSinglesubCategory/{id}', [SubcategoryController::class, 'showSinglesubCategory']);
    //****** edit subcategory ****/
    Route::get('editsinglesubCategory/{id}', [SubcategoryController::class, 'edit']);

    //*******delete category *****
    Route::get('deletesubcategory/{id}', [SubcategoryController::class, 'destroy']);
    //*******reegister category*****
    Route::post('/registersubcategory', [SubcategoryController::class, 'storesubCategory']);
    //*****update category *****/
    Route::get('updatesubcategory/{id}', [SubcategoryController::class, 'update']);
    //********************************************************** */
    //****** Search Product */
    Route::get('searchProduct/{key}', [ProductController::class, 'searchProduct']);
    //********Show All Product ******** */

    Route::get('allProduct', [ProductController::class, 'index']);
    //*******Add Product */
    Route::post('storeproduct', [ProductController::class, 'store']);
    //******* Show single Product**** */
    Route::get('singleProduct/{id}', [ProductController::class, 'show']);
    //*****Edit Product *****/*/
    Route::get('editProduct/{id}', [ProductController::class, 'edit']);
    //******* Update Product***** */
    Route::post('updateproduct/{id}', [ProductController::class, 'store']);
    //****** Delete Prodduct****/ */
    Route::get('deleteProduct/{id}', [ProductController::class, 'destroy']);
    //********************************************************************** */
    //****** add Cart ****/
    Route::get('userCart/{id}', [CartController::class, 'get_User']);
    //******* add Product to cart*** */
    Route::post('storeproductcart', [CartController::class, 'store_product']);
    //******* update Product to cart*** */
    Route::post('update_cart/{id}', [CartController::class, 'update_cart']);
    //*********** Delete Product from cart ****/
    Route::post('delete_product_cart/{id}', [CartController::class, 'delete_product_cart']);
    //*********** Delete  cart ****/
    Route::get('delete_cart/{id}', [CartController::class, 'delete_cart']);


    //******* Add Order // Check out */
    Route::post('addOrder/{user_id}', [OrderController::class, 'addOrder']);
    ///***** all Orders  */
    Route::get('getAllOrders', [OrderController::class, 'getAllOrders']);

    Route::get('/userr', function (Request $request) {
        return 'Ayman';
    });
});
