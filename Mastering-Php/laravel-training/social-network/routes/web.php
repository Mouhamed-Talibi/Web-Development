<?php
    use App\Http\Controllers\informationsController;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\ProfileController;
    use Illuminate\Http\Request;
    use App\Http\Controllers\homeController;
    use Illuminate\Support\Facades\Route;

    // home page route
    Route::get("/", [homeController::class, 'index'])->name('home');

    // login route 
    Route::get('/login', [LoginController::class, 'loginForm'])->name('loginForm');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/login', [LoginController::class, 'submitLogin'])->name('submitLogin');

    // edit route
    Route::get('profiles/{profile}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
    // update profile 
    Route::put('profile/{profile}', [ProfileController::class, 'update'])->name('profiles.update');

    // profile route
    Route::get('/profiles', [ProfileController::class, 'profiles'])->name('profiles.profiles');

    // show profile
    Route::get('/profiles/{profile}', [ProfileController::class, 'show'])
    ->where('profile', '\d+')
    ->name('profile.show');

    // delete profile 
    Route::delete('/profiles/{profile}', [ProfileController::class, 'destroy'])
    ->name('profiles.destroy')
    ->where('profile', '\d+');

    // create profile 
    Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');

    // store profile
    Route::post('/profiles/store', [ProfileController::class, 'store'])->name('profiles.store');

    // informations route
    Route::get('/infos', [informationsController::class, 'informations'])->name('infos.informations');