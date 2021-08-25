<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ChartsController;
use App\Http\Controllers\Backend\BarChartController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('users',UserController::class);

Route::get('piechart', [ChartsController::class, 'index'])->name("piechart");
Route::get('userIndex', [UserController::class, 'index']);
Route::get('barchart', [BarChartController::class, 'index'])->name('barchart');
Route::post('usersDeleteRecord',[UserController::class, 'delete']);

Route::get('/users',[UserController::class,'index']);
Route::get('/user/{id}',[UserController::class,'getUserById']);
Route::post('/add-users',[UserController::class,'addUser'])->name('addUser');
Route::put('/update-users',[UserController::class,'updateUser'])->name('updateUser');
Route::delete('/deleteUser/{id}',[UserController::class,'deleteUser'])->name('deleteUser');


