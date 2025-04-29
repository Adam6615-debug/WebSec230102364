<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ProductsController;
use App\Http\Controllers\Web\UsersController;
use App\Http\Controllers\Auth\GoogleController;


Route::get('register', [UsersController::class, 'register'])->name('register');
Route::post('register', [UsersController::class, 'doRegister'])->name('do_register');
Route::get('login', [UsersController::class, 'login'])->name('login');
Route::post('login', [UsersController::class, 'doLogin'])->name('do_login');
Route::get('logout', [UsersController::class, 'doLogout'])->name('do_logout');
Route::get('users', [UsersController::class, 'list'])->name('users');
Route::get('profile/{user?}', [UsersController::class, 'profile'])->name('profile');
Route::get('users/edit/{user?}', [UsersController::class, 'edit'])->name('users_edit');
Route::post('users/save/{user}', [UsersController::class, 'save'])->name('users_save');
Route::get('users/delete/{user}', [UsersController::class, 'delete'])->name('users_delete');
Route::get('users/edit_password/{user?}', [UsersController::class, 'editPassword'])->name('edit_password');
Route::post('users/save_password/{user}', [UsersController::class, 'savePassword'])->name('save_password');
Route::post('users/block/{user}', [UsersController::class, 'savePassword'])->name('');

Route::get('/customers', [UsersController::class, 'listCustomers'])->name('customers');


Route::get('users/addemployee', [UsersController::class, 'showAddEmployeePage'])->name('addemployee.form');
Route::post('users/addemployee', [UsersController::class, 'addEmployee'])->name('addemployee');

Route::post('/products/buy/{product}', [ProductsController::class, 'buy'])->name('products_buy');


Route::get('products', [ProductsController::class, 'list'])->name('products_list');
Route::get('products/edit/{product?}', [ProductsController::class, 'edit'])->name('products_edit');
Route::post('products/save/{product?}', [ProductsController::class, 'save'])->name('products_save');
Route::get('products/delete/{product}', [ProductsController::class, 'delete'])->name('products_delete');

Route::get('/', function () {
    return view('welcome');
});
Route::post('/users/{user}/add-credit', [UsersController::class, 'addCredit'])->name('users_add_credit');

Route::get('/multable', function (Request $request) {
    $j = $request->number??5;
    $msg = $request->msg;
    return view('multable', compact("j", "msg"));
});

Route::get('/orders', [ProductsController::class, 'orders'])->name('orders');

Route::get('/even', function () {
    return view('even');
});

Route::get('/prime', function () {
    return view('prime');
});

Route::get('/test', function () {
    return view('test');
});
Route::get('/orders', [ProductsController::class, 'viewOrders'])->name('orders')->middleware('auth');


Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('verify', [UsersController::class, 'verify'])->name('verify');

Route::get('auth/facebook', [UsersController::class, 'redirectToFacebook'])->name('redirectToFacebook');
Route::get('auth/facebook/callback', [UsersController::class, 'handleFacebookCallback'])->name('handleFacebookCallback');

Route::get('auth/github', [UsersController::class, 'redirectToGitHub'])->name('redirectToGitHub');
Route::get('auth/github/callback', [UsersController::class, 'handleGitHubCallback'])->name('handleGitHubCallback');



Route::get('/collect', function (Request $request) {
    $name = $request->query('name');
    $credit = $request->query('credit');

    return response('data collected', 200)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With');
});