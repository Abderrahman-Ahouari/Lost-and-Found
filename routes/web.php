<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/posts', [PostController::class, 'index']); // Voir tous les posts
    Route::post('/posts', [PostController::class, 'store']); // Ajouter un post
    Route::get('/posts/{id}', [PostController::class, 'show']); // Voir un post par ID
    Route::post('/posts/{id}/comments', [PostController::class, 'addComment']); // Ajouter un commentaire
    Route::get('/posts/{id}/comments', [PostController::class, 'getComments']); // Voir commentaires d'un post

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// route::post('/CreatPost/{id}',[])   

require __DIR__.'/auth.php';
