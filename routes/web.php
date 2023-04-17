<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () { 
//     return view('welcome');
// });


Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');

Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::any('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::any('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard')->middleware('auth');

Route::any('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard')->middleware('auth');

Route::any('/bank-account', 'App\Http\Controllers\BankAccount@index')->middleware('auth');
Route::any('/account_list', 'App\Http\Controllers\BankAccount@account_list')->middleware('auth');

Route::any('/bank-account/add', 'App\Http\Controllers\BankAccount@add')->middleware('auth');
Route::any('/bank-account/edit/{id}', 'App\Http\Controllers\BankAccount@edit')->middleware('auth');

Route::any('/user-roles', 'App\Http\Controllers\PeopleController@index')->middleware('auth');
Route::any('/add-user-role', 'App\Http\Controllers\PeopleController@add_user_role')->middleware('auth');
Route::any('/add-user-role/{id}', 'App\Http\Controllers\PeopleController@add_user_role')->middleware('auth');
Route::any('/users', 'App\Http\Controllers\PeopleController@users')->middleware('auth');
Route::any('/add-user', 'App\Http\Controllers\PeopleController@add_user')->middleware('auth');
Route::any('/edit-user/{id}', 'App\Http\Controllers\PeopleController@edit_user')->middleware('auth');

Route::any('/customer', 'App\Http\Controllers\PeopleController@customer')->middleware('auth');
Route::any('/add-customer', 'App\Http\Controllers\PeopleController@add_customer')->middleware('auth');
Route::any('/view-customer/{id}', 'App\Http\Controllers\PeopleController@view_customer')->middleware('auth');
Route::any('/edit-customer/{id}', 'App\Http\Controllers\PeopleController@edit_customer')->middleware('auth');

Route::any('/supplier', 'App\Http\Controllers\PeopleController@supplier')->middleware('auth');
Route::any('/add-supplier', 'App\Http\Controllers\PeopleController@add_supplier')->middleware('auth');
Route::any('/view-supplier/{id}', 'App\Http\Controllers\PeopleController@view_supplier')->middleware('auth');
Route::any('/edit-supplier/{id}', 'App\Http\Controllers\PeopleController@edit_supplier')->middleware('auth');

Route::any('/warehouse', 'App\Http\Controllers\InventoryController@index')->middleware('auth');
Route::any('/add-warehouse', 'App\Http\Controllers\InventoryController@add_warehouse')->middleware('auth');
Route::any('/edit-warehouse', 'App\Http\Controllers\InventoryController@edit_warehouse')->middleware('auth');


Route::any('/stock', 'App\Http\Controllers\InventoryController@stock')->middleware('auth');

Route::any('/transfer', 'App\Http\Controllers\InventoryController@transfer')->middleware('auth');
Route::any('/add-transfer', 'App\Http\Controllers\InventoryController@add_transfer')->middleware('auth');

Route::any('/product-category', 'App\Http\Controllers\InventoryController@product_category')->middleware('auth');
Route::any('/product', 'App\Http\Controllers\InventoryController@product')->middleware('auth');

Route::any('/purchase', 'App\Http\Controllers\InventoryController@purchase')->middleware('auth');
Route::any('/add-purchase', 'App\Http\Controllers\InventoryController@add_purchase')->middleware('auth');
Route::any('/view-purchase/{id}', 'App\Http\Controllers\InventoryController@view_purchase')->middleware('auth');
Route::any('/edit-purchase/{id}', 'App\Http\Controllers\InventoryController@edit_purchase')->middleware('auth');


Route::any('/purchase-return', 'App\Http\Controllers\InventoryController@purchase_return')->middleware('auth');
Route::any('/add-purchase-return', 'App\Http\Controllers\InventoryController@add_purchase_return')->middleware('auth');
Route::any('/view-purchase-return/{id}', 'App\Http\Controllers\InventoryController@view_purchase_return')->middleware('auth');
Route::any('/edit-purchase-return/{id}', 'App\Http\Controllers\InventoryController@edit_purchase_return')->middleware('auth');


Route::any('/sale', 'App\Http\Controllers\InventoryController@sale')->middleware('auth');
Route::any('/add-sale', 'App\Http\Controllers\InventoryController@add_sale')->middleware('auth');
Route::any('/edit-sale/{id}', 'App\Http\Controllers\InventoryController@edit_sale')->middleware('auth');
Route::any('/view-sale/{id}', 'App\Http\Controllers\InventoryController@view_sale')->middleware('auth');


Route::any('/sales-return', 'App\Http\Controllers\InventoryController@sales_return')->middleware('auth');
Route::any('/add-sales-return', 'App\Http\Controllers\InventoryController@add_sales_return')->middleware('auth');
Route::any('/edit-sales-return/{id}', 'App\Http\Controllers\InventoryController@edit_sales_return')->middleware('auth');
Route::any('/view-sales-return/{id}', 'App\Http\Controllers\InventoryController@view_sales_return')->middleware('auth');


Route::any('/quotation', 'App\Http\Controllers\InventoryController@quotation')->middleware('auth');
Route::any('/view-quotation/{id}', 'App\Http\Controllers\InventoryController@view_quotation')->middleware('auth');
Route::any('/add-quotation', 'App\Http\Controllers\InventoryController@add_quotation')->middleware('auth');
Route::any('/edit-quotation/{id}', 'App\Http\Controllers\InventoryController@edit_quotation')->middleware('auth');

Route::any('/expense', 'App\Http\Controllers\ExpenseController@expense')->middleware('auth');
Route::any('/add-expense', 'App\Http\Controllers\ExpenseController@add_expense')->middleware('auth');
Route::any('/view-expense/{id}', 'App\Http\Controllers\ExpenseController@view_expense')->middleware('auth');
Route::any('/edit-expense/{id}', 'App\Http\Controllers\ExpenseController@edit_expense')->middleware('auth');

Route::any('/report/gstr1', 'App\Http\Controllers\ReportsController@gstr1')->middleware('auth');
Route::any('/report/gstr2', 'App\Http\Controllers\ReportsController@gstr2')->middleware('auth');
Route::any('/report/sale', 'App\Http\Controllers\ReportsController@sale')->middleware('auth');
Route::any('/report/sales-return', 'App\Http\Controllers\ReportsController@sales_return')->middleware('auth');
Route::any('/report/purchase', 'App\Http\Controllers\ReportsController@purchase')->middleware('auth');
Route::any('/report/purchase-return', 'App\Http\Controllers\ReportsController@purchase_return')->middleware('auth');
Route::any('/report/expense', 'App\Http\Controllers\ReportsController@expense')->middleware('auth');
Route::any('/report/ledger', 'App\Http\Controllers\ReportsController@ledger')->middleware('auth');
Route::any('/report/profit-and-loss', 'App\Http\Controllers\ReportsController@profit_and_loss')->middleware('auth');

Route::any('/settings', 'App\Http\Controllers\SettingsController@index')->middleware('auth');
Route::any('/expense-category', 'App\Http\Controllers\SettingsController@expense_category')->middleware('auth');
Route::any('/tax', 'App\Http\Controllers\SettingsController@tax')->middleware('auth');
Route::any('/discount', 'App\Http\Controllers\SettingsController@discount')->middleware('auth');
Route::any('/currency', 'App\Http\Controllers\SettingsController@currency')->middleware('auth');

