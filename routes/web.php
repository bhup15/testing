<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
// routes/web.php

use App\Http\Controllers\AuthController;


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

// routes/web.php

// routes/web.php

Route::middleware('custom')->group(function () {
    Route::get('todos', [TodoController::class, 'index'])->name('todos.index');
    Route::get('todos/create', [TodoController::class, 'create'])->name('todos.create');
    Route::post('todos/store', [TodoController::class, 'store'])->name('todos.store');
    Route::get('todos/{id}', [TodoController::class, 'show'])->name('todos.show');
    // Add other todo-related routes as needed
});

// Other routes that don't require the guest middleware

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);