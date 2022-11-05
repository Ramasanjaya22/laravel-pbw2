<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::prefix('dashboard')->group(function () {
        route::get('/user', [UserController::class, 'index'])->name('user');
        route::get('/userRegistration', [UserController::class, 'create'])->name('userRegistration');
        route::post('/userStore', [UserController::class, 'store(Request $request)'])->name('userStore');
        route::get('/userView/{user}', [UserController::class, 'show(User $user)'])->name('userView');
    }); 
});
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::prefix('dashboard')->group(function () {
    route::get('/koleksi', [CollectionController::class, 'index'])->name('koleksi');
    route::get('/koleksiTambah', [CollectionController::class, 'create'])->name('koleksiTambah');
    route::post('/koleksiStore', [CollectionController::class, 'store(Request $request)'])->name('koleksiStore');
    route::get('/koleksiView/{collection}', [CollectionController::class, 'show(Collection $collection)'])->name('koleksiView');
    }); 
});








require __DIR__ . '/auth.php';
