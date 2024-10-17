<?php 

require_once 'core/Route.php';

Route::add("/");
Route::add("/home");
Route::add("/about");
Route::add("/products");



if(Route::check()){

    Route::get("/","controllers/home");
    Route::get("/home","controllers/home");
    Route::get("/about","controllers/about");
    Route::get("/products","controllers/products");

}else{
    require_once 'views/404.php';
}
