<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganicChemicalController;
use App\Http\Controllers\InorganicChemicalController;
use App\Http\Controllers\BrokenGlassController;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\UserController;


// Organic Chemicals
Route::resource('organic_chemicals', OrganicChemicalController::class);

// Inorganic Chemicals
Route::resource('inorganic_chemicals', InorganicChemicalController::class);

// Instruments
Route::resource('instruments', InstrumentController::class);

// Chemical Dashboard
Route::get('/chemical', function () {
    return view('chemical_layout.chemicalboard');
});
Route::get('/chemical1', function () {
    return view('chemical_layout.chemicalboard1');
});
Route::get('/chemical2', function () {
    return view('chemical_layout.chemicalboard2');
});
// Update routes for specific chemical types
Route::post('/inorganicupdate/{id}', [App\Http\Controllers\InorganicChemicalController::class, 'inorganic_update'])->name('inorganicupdate');
Route::post('/organicupdate/{id}', [App\Http\Controllers\OrganicChemicalController::class, 'organic_update'])->name('organicupdate');

// Broken Glass
Route::resource('broken_glass', BrokenGlassController::class);
Route::get('/broken_glass', [BrokenGlassController::class, 'index'])->name('broken_glass.index');

// Home and Sidebar

Route::get('/ho', function () {
    return view('menu.home');
});
Route::get('/', function () {
    return view('Home.header');
});
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\loginController;

Route::get('/register', [loginController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [loginController::class, 'register']);

Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [loginController::class, 'login']);


Route::post('/logout', [loginController::class, 'logout'])->name('logout');



Route::get('/ab', function () {
    return view('Home.about');
});
Route::get('/aside', function () {
    return view('menu.asidebar');
});
Route::get('/ahome', function () {
    return view('menu.ahome');
});
Route::get('/lhome', function () {
    return view('menu.lhome');
});
Route::get('/lo', function () {
    return view('Home.login');
});
Route::get('/index2', function () {
    return view('inorganic_chemicals.index2');
});

Route::get('/in-index2', [InorganicChemicalController::class, 'index2'])->name('inorganic_chemicals.index2');
Route::get('/or-index2', [OrganicChemicalController::class, 'index2'])->name('organic_chemicals.index2');
Route::get('/br-index2', [BrokenGlassController::class, 'index2'])->name('broken_glass.index2');
Route::get('/ins-index2', [InstrumentController::class, 'index2'])->name('instruments.index2');
Route::get('/or-index3', [OrganicChemicalController::class, 'index3'])->name('organic_chemicals.index3');
Route::get('/in-index3', [InorganicChemicalController::class, 'index3'])->name('inorganic_chemicals.index3');
Route::get('/br-index3', [BrokenGlassController::class, 'index3'])->name('broken_glass.index3');
Route::get('/ins-index3', [InstrumentController::class, 'index3'])->name('instruments.index3');
Route::middleware(['auth'])->group(function () {
    // Redirect users based on their roles
    Route::get('/home', function () {
        $user = auth()->user();

        if ($user) {
            switch ($user->role) {
                case 'admin':
                    return redirect('/ahome');
                    break;
                case 'lab assistant':
                    return redirect('/ho');
                    break;
                case 'lecturer':
                    return redirect('/lhome');
                    break;
                default:
                    // Default redirection if role is not recognized
                    return redirect('/login');
            }
        } else {
            // Redirect to login if user is not authenticated
            return redirect('/login');
        }
    });

    // Other routes...
});

Route::resource('users', UserController::class);
//Route::get('/users', [UserController::class, 'index'])->name('index');
//Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('edit');
//Route::put('/users/{id}', [UserController::class, 'update'])->name('update');
//Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('destroy');
Route::get('/help', function () {
    return view('menu.help');
})->name('help');

