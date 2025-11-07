<?php

<<<<<<< HEAD
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
=======
use App\Http\Controllers\FormController;
use GuzzleHttp\Psr7\Request;
>>>>>>> 9209f5f0e4b6c8bd491b14f6d5c1bef6c92f317c
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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
});


require __DIR__.'/auth.php';
=======
Route::get('/register', [FormController::class , "show"]);
Route::post('/register/submit', [FormController::class , "handleForm"])->name("register.submit");


>>>>>>> 9209f5f0e4b6c8bd491b14f6d5c1bef6c92f317c
