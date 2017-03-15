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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('projects/job-order/{job_id}/materials/create', 'Projects\\MaterialsController@create');
Route::get('projects/job-order/{job_id}/materials/{mat_id}', 'Projects\\MaterialsController@update');
Route::get('projects/job-order/{job_id}/materials/{mat_id}', 'Projects\\MaterialsController@destroy');
Route::get('projects/job-order/{job_id}/materials/{mat_id}/show', 'Projects\\MaterialsController@show');
Route::get('projects/job-order/{job_id}/materials/{mat_id}/edit', 'Projects\\MaterialsController@edit');

Route::resource('suppliers/supplier-category', 'Supplier\\SupplierCategoryController');
Route::resource('suppliers/supplier-manage', 'Supplier\\SupplierManageController');

Route::resource('projects/project-manage', 'Projects\\ProjectManageController');
Route::resource('projects/job-order', 'Projects\\JobOrderController');
Route::resource('projects/job-order/{job_id}/materials', 'Projects\\MaterialsController');


