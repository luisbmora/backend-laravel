<?php
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('/products', [ProductController::class, 'index']);   // Obtener todos los productos 
Route::post('/products', [ProductController::class, 'store']);  // Crear un nuevo producto 
Route::get('/products/{product}', [ProductController::class, 'show']);   // Obtener un producto por ID 
Route::put('/products/{product}', [ProductController::class, 'update']); // Actualizar un producto 
Route::delete('/products/{product}', [ProductController::class, 'destroy']); // Eliminar un producto

