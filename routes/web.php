<?php

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

    Route::resources([
        'biomedical-equipments-category' => BiomedicalEquipmentCategoryController::class,
        'celling' => CellingController::class,
        'biomedical-equipments' => BiomedicalEquipmentController::class,
        'users' => UsersController::class,
        'floors' => FloorController::class,
        'walls' => WallController::class,
        'hospital-rooms' => HospitalRoomController::class,
        'simulations' => SimulationController::class,
        'groups' => GroupController::class,
        'enrollments' => EnrollmentController::class,
        'studyCards' => StudyCardController::class
    ]);

    Route::resource('rules', RuleController::class, ['except' => ['create', 'edit']]);

    Route::get('/sumulations/user/{user_id}', 'SimulationController@showSimulations')->name('simulations.showSimulation');
    Route::get('/rules/{hospital_room_id}/create', 'RuleController@create')->name('rules.create');
    Route::get('/rules/{hospital_room_id}/edit/{rule_id}', 'RuleController@edit')->name('rules.edit');
});
