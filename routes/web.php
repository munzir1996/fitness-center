<?php

use App\Http\Controllers\DashboardController;
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

Route::get('/', 'WelcomeController');

Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/leads/add', 'LeadController@create')->name('lead.add');
    Route::post('/leads/save', 'LeadController@store')->name('lead.save');
    Route::post('/leads/update', 'LeadController@update')->name('lead.update');
    Route::get('/leads/list', 'LeadController@index')->name('lead.list');
    Route::get('/leads/view/{lead}', 'LeadController@view')->name('lead.view');

    Route::get('/leads/view/{lead}/reminder/add', 'ReminderController@add')->name('reminder.add');
    Route::post('/leads/view/reminder/save', 'ReminderController@store')->name('reminder.save');
    Route::get('/leads/view/{lead}/reminder/{reminder}/view', 'ReminderController@view')->name('reminder.view');
    Route::post('/leads/view/reminder/update', 'ReminderController@update')->name('reminder.update');
    Route::get('/leads/view/{lead}/reminder/{reminder}/note', 'ReminderController@note')->name('reminder.note');
    Route::post('/leads/view/reminder/close', 'ReminderController@close')->name('reminder.close');

});


