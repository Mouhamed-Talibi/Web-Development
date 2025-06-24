<?php
    use App\Http\Controllers\informationsController;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\PublicationController;
    use App\Services\Calculation;
    use Illuminate\Http\Request;
    use App\Http\Controllers\homeController;
    use Illuminate\Http\Response;
    use Illuminate\Support\Facades\Route;
    use Psr\Container\ContainerInterface;



    // profiles route
    Route::resource("profiles", ProfileController::class);
    Route::get('/verify_email/{hash}', [ProfileController::class, 'verifyEmail']);

    // publication route
    Route::resource("publications", PublicationController::class);

    // home page route
    Route::get("/", [homeController::class, 'index'])->name('home');

    // login route 
    Route::get('/login', [LoginController::class, 'loginForm'])->name('login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/login', [LoginController::class, 'submitLogin'])->name('submitLogin');

    // informations route
    Route::get('/infos', [informationsController::class, 'informations'])->name('infos.informations')->middleware('auth');

    // unknwon route 
    Route::get('/salam', function() {
        return response()->download('storage/images/default-image.jpg', disposition: 'inline');
    })->name('route');

    // cookie route
    Route::get('/cookie/set/{cookie}', function($cookie) {
        $response = new Response();
        $cookieObject = cookie('name', $cookie, 5);
        return $response->withcookie($cookieObject);
    });

    // get cookie route
    Route::get('/cookie/get', function(Request $request) {
        return $request->cookie('name');
    });

    // header route
    Route::get('/headers', function(Request $request) {
        dd($request->header());
        $response = new Response();
        return $response->withHeaders([
            "Content-type" => "Application/json",
        ]);
    });

    // request route 
    Route::get('/request', function(Request $request) {
        // dd($request->url(), $request->fullUrl());
        // dd($request->path());
        // dd($request->is('request'));    
        // dd($request->host());    
        dd($request->method());    
    });