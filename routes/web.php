<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PenunjangController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\DashboardPostController;

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
    // return view('home', [
    //     "title" => "Home",
    //     "active" => 'home',
    // ]);
    return redirect('/login');
});

// Route::get('/about', function () {
//     return view('about',[
//         "title" => "About",
//         "active" => 'about',
//         "name" => "Franco J. Turangan",
//         "email" => "turanganfranco@gmail.com",
//         "image" => "franco.jpeg",
//     ]);
// });

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);

// Route::get('/categories', function(Category $category){
//     return view('categories',[
//         'title' => "Post Categories :",
//         'active' => 'categories',
//         'categories' => Category::all(),
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
// Route::post('/register', [RegisterController::class, 'store'])->middleware('auth');

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function() {
        return view('dashboard.index');
    });

    Route::resource('/dashboard/posts', DashboardPostController::class);


    Route::resource('dosen', DosenController::class);
    Route::resource('penelitian', PenelitianController::class);
    Route::resource('pengabdian', PengabdianController::class);
    Route::resource('penunjang', PenunjangController::class);
    Route::resource('pendidikan', PendidikanController::class);
});
