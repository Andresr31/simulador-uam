<?php

use App\BiomedicalEquipmentCategory;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/biomedical-equipments', BiomedicalEquipmentController::class);

    Route::resources([
        'biomedical-equipments-category' => 'BiomedicalEquipmentCategoryController',
        'celling' => 'CellingController',
    ]);
    
});
