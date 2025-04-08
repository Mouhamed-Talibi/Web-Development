<?php
    use App\Http\Controllers\informationsController;
    use App\Http\Controllers\ProfileController;
    use Illuminate\Http\Request;
    use App\Http\Controllers\homeController;
    use Illuminate\Support\Facades\Route;


    Route::get("/", [homeController::class, 'index'])->name('home');

    // profile route
    Route::get('/profiles', [ProfileController::class, 'profiles'])->name('profiles.profiles');

    // show profile
    Route::get('/profiles/{profile}', [ProfileController::class, 'show'])
    ->where('profile', '\d+')
    ->name('profile.show');

    // create profile 
    Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');

    // store profile
    Route::post('/profiles/store', [ProfileController::class, 'store'])->name('profiles.store');

    // informations route
    Route::get('/infos', [informationsController::class, 'informations'])->name('infos.informations');