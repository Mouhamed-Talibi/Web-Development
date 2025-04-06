<?php
    use App\Http\Controllers\informationsController;
    use App\Http\Controllers\profileController;
    use Illuminate\Http\Request;
    use App\Http\Controllers\homeController;
    use Illuminate\Support\Facades\Route;


    Route::get("/", [homeController::class, 'index'])->name('home');

    // profile route
    Route::get('/profiles', [profileController::class, 'profile'])->name('profiles.profiles');

    // show profile
    Route::get('/profiles/{id}', [profileController::class, 'show'])
    ->where('id', '\d+')
    ->name('profile.show');

    // create profile 
    Route::get('/profiles/create', [profileController::class, 'create'])->name('profiles.create');

    // informations route
    Route::get('/infos', [informationsController::class, 'informations'])->name('infos.informations');