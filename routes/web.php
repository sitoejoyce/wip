<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CourseController};
use App\Http\Controllers\{UsercController};
use App\Http\Controllers\{ReverseController};
use App\Http\Controllers\Admin\{AuthController, UserController};
use App\Http\Controllers\UserLogController;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\LogController;
use Laravel\Socialite\Facades\Socialite;


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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboarded');

Route::get('/course', [CourseController::class, 'index'])->name('course.index');

Route::get('/auth', [ReverseController::class, 'index'])->name('auth.log');

// Route::get('/', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/', [AuthController::class, 'postLogin'])->name('postLogin');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create',[ UserController::class,'create'])->name('users.create');
Route::post('/user',[ UserController::class,'store'])->name('user.store');

Route::get('/users', [UsercController::class, 'index'])->name('users.index');
Route::get('/users/create',[ UsercController::class,'create'])->name('users.create');
Route::post('/users',[ UsercController::class,'store'])->name('users.store');
Route::get('/users/{id}/edit',[UsercController::class,'edit'])->name('users.edit');
Route::put('/users/{id}',[UsercController::class,'update'])->name('users.update');
Route::get('/users/{id}',[UsercController::class,'show'])->name('user.show ');
Route::delete('/users/{id}',[UsercController::class,'destroy'])->name('users.destroy');

Route::get('/logs', [UserLogController::class, 'index'])->name('logs.index');  // Para exibir os usuários e contagem de logs
Route::get('/logs/{userId}', [UserLogController::class, 'show'])->name('logs.show');  // Para exibir os logs de um usuário específico

// Rota para exibir todos os logs
Route::get('/logs', [LogController::class, 'index'])->name('logs.index');

// Rota para exibir logs de um usuário específico
Route::get('/logs/{userId}', [LogController::class, 'show'])->name('logs.show');

Route::get('/logs', [LogController::class, 'index'])->name('logs.index');


// SSO
Route::get('/auth/github', function () {
    return Socialite::driver('github')->redirect();
})->name('github.login');

Route::get('/auth/github/callback', function () {
    $githubUser = Socialite::driver('github')->user();

    // Criar ou autenticar o usuário no sistema Laravel
    $user = \App\Models\User::updateOrCreate(
        ['email' => $githubUser->email],
        [
            'name' => $githubUser->name,
            'github_id' => $githubUser->id,
            'avatar' => $githubUser->avatar,
            'github_token' => $githubUser->token,
        ]
    );

    // Login do usuário no Laravel
    Auth::login($user);

    return redirect('/dashboard'); // Redirecionar após login
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
