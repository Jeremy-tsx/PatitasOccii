<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController; // Asegúrate de agregar esta línea para importar UserController
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetsController;

Route::get('/index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');
// Ruta para la página principal (index)
Route::get('/pet', function () {
    return view('pet');
})->middleware(['auth', 'verified'])->name('dashboard');

// Ruta para la página buy
Route::get('/buy', function () {
    return view('buy');
});

// Ruta para la página clinic
Route::get('/clinic', function () {
    return view('clinic');
});

// Ruta para la página contact
Route::get('/contact', function () {
    return view('contact');
});

// Ruta para la página info
// Route::get('/info', function () {
//     return view('info');
// });

// Ruta para la página pet
Route::get('/pet', function () {
    return view('pet');
});

// Ruta web con controlador
use App\Http\Controllers\AdopcionesCotroller;
Route::resource('pet', AdopcionesCotroller::class);



// Ruta para la página service
Route::get('/service', function () {
    return view('service');
});

Route::get('/agregar', function () {
    return view('agregar_pet');
});


// Agrupación de rutas para usuarios autenticados
Route::middleware('auth')->group(function () {
    // Rutas relacionadas con el perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas relacionadas con los usuarios y roles
    Route::get('/users', [UserController::class, 'user-list'])->name('user-list');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('edit');
    Route::post('/users/{user}', [UserController::class, 'update'])->name('users.update');

   

});

require __DIR__.'/auth.php';


// Ruta de requisitos para llenar el formulario 
Route::get('/requisitos', function () {
    return view('requisitos');
});


// Ruta para mostrar la información de una mascota específica
Route::get('/show_pet/{id_mascota}', [PetsController::class, 'show'])->name('pets.show');

// Ruta para el formulario de edición de una mascota específica
Route::get('/edit_pet/{id_mascota}', [PetsController::class, 'edit'])->name('pets.edit');

// Ruta para eliminar una mascota específica (utiliza el método DELETE)
Route::get('/delete_pet/{id_mascota}', [PetsController::class, 'delete'])->name('pets.delete');

// Ruta para eliminar una mascota específica (utiliza el método DELETE)
Route::get('/editar/{id_mascota}', [PetsController::class, 'editar'])->name('pets.editar');


Route::get('info/{id_mascota}', [PetsController::class, 'info'])->name('info');

//Ruta para agregar animalitos
Route::post('store', [PetsController::class, 'store'])->name('store');

Route::get('/buy', [App\Http\Controllers\BuyController::class, 'index'])->name('buy');
