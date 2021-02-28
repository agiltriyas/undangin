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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['auth']);

Route::group(['middleware' => 'auth'],function(){
    Route::get('/',[App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
    Route::resource('/admin', App\Http\Controllers\AdminController::class);

});

/* Backend
web
superadmin
1. 
2. CRUD admin & USer
3. REPORT CUSTOM
4. LOG
5. CRUD Theme
6. CRUD INVOICE
7. CRUD Contact
admin
1. 
2. CRUD Theme
3. RUD INVOICE
4. CRUD Contact
user
1. 
2. CR INVOICE
3. RU Theme
4. CRUD Contact
5. CRU User


api
1. detail trans
2. info trans
3. contact_user
/*


