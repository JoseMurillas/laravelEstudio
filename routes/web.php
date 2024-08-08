<?php

//Se importa el emtodo Route
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;



Route::get('/', HomeController::class);


// //ruta para mostrar el listado de registro
// Route::get('/posts', [PostController::class, 'index'])
//         ->name('posts.index');

// //ruta para mostrar un formulario para crear un registro
// Route::get('/posts/create', [PostController::class, 'create'])
//         ->name('posts.create');

// //ruta para guardar un registro //Se utiliza post ya que normalmente se utiliza cuando se manda la informacion
// Route::post('/posts', [PostController::class, 'store'])
//         ->name('posts.store');

// //Ruta para mostrar un registro
// Route::get('/posts/{post}', [PostController::class, 'show'])
//         ->name('posts.show');

// //ruta para mostrar un registro para editar registro
// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
//         ->name('posts.edit');

// //ruta para actualizar un registro
// //Put se puede utilizar varias veces la ruta, mientras que posts solo una
// //patch son parecidas pero se utilizan para saber que se va actualizar un registro
// Route::put('/posts/{post}', [PostController::class, 'update'])
//         ->name('posts.update');

// //ruta para eliminar un registro
// Route::delete('posts/{post}', [PostController::class, 'destroy'])
//         ->name('posts.destroy');

Route::resource('posts', PostController::class);
    // ->parameters(['articulos' => 'post'])
    // ->names('posts');
