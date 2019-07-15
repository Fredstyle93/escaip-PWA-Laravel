<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


$agent = new \Jenssegers\Agent\Agent;
// $result = ;
if($agent->isMobile() || $agent->isTablet()){

    Route::get('/{any}', 'AppController@index')->where('any', '.*');
    
} elseif ($agent->isDesktop()) {

    
    Auth::routes();

    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
    

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/profil', 'UsersController@showProfil')->name('profil');
    });

}

// Route::get('detect', function()
// {
//     $agent = new \Jenssegers\Agent\Agent;
   
//     $result = $agent->isDesktop();
    
//     dd($result);
// });
