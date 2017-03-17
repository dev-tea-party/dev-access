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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/change-password', 'HomeController@showChangePasswordForm')->name('change_password');
Route::post('/execute-change-password', 'HomeController@changePassword')->name('execute_change_password');

Route::resource('suppliers/supplier-category', 'Supplier\\SupplierCategoryController');
Route::resource('suppliers/supplier-manage', 'Supplier\\SupplierManageController');

Route::resource('projects/project-manage', 'Projects\\ProjectManageController');
Route::resource('projects/job-order', 'Projects\\JobOrderController');
Route::resource('projects/job-order/{job_id}/materials', 'Projects\\MaterialsController');

Route::resource('accounting/accounts-manage', 'Accounting\\AccountsManageController');

Route::resource('purchasing/purchase-orders', 'Purchasing\\PurchaseOrdersController');


Route::resource('warehouse/inventory-manage', 'Warehouse\\InventoryManageController');

Route::resource('company-details', 'CompanyDetails\\CompanyDetailsController');