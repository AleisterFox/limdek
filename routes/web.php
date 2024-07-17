<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LadingPageConfigController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SlideConfigController;

Auth::routes(['register' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware([])->group(function() {
    Route::match(['get','post'], '/', [MainController::class, 'index']);
    Route::get('/contacto', [MainController::class, 'contacto']);
    Route::match(['get','post'], '/productos', [MainController::class, 'productos']);
    Route::get('/producto/{product}', [MainController::class, 'producto']);
    Route::get('/nosotros', [MainController::class, 'nosotros']);
    Route::get('/carrito', [MainController::class, 'carrito']);
    Route::get('/informacion', [MainController::class, 'informacion']);
    Route::get('/confirmacion-pago/{order:uuid}', [MainController::class, 'confirmacionPago'])->name('confirmacion-pago');
    Route::get('/envio', [MainController::class, 'envio']);
    Route::get('/pago', [MainController::class, 'pago']);

    Route::post('add-to-cart', [ShoppingCartController::class, 'addToCart'])->name('add-to-cart');
    Route::post('remove-from-cart', [ShoppingCartController::class, 'removeFromCart'])->name('remove-from-cart');
    Route::post('update-cart', [ShoppingCartController::class, 'updateCart'])->name('update-cart');

    Route::resource('order', OrderController::class);
    Route::get('order-callback/{order}', [OrderController::class, 'callback'])->name('order.callback');
});

Route::prefix('admin')->middleware(['auth'])->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('about', AboutController::class)->only(['index', 'update']);
    Route::resource('config', LadingPageConfigController::class)->only(['index', 'update']);

    Route::resource('slides', SlideConfigController::class);
    Route::resource('categorias', CategoriesController::class);
    Route::resource('productos', ProductsController::class);
    Route::get('productos/{producto}/categorias', [ProductsController::class, 'editCategory'])->name('productos.categories');
    Route::put('productos/{producto}/categorias', [ProductsController::class, 'updateCategory'])->name('productos.categories.update');
    Route::put('productos/{producto}/imagenes', [ProductsController::class, 'updateImages'])->name('productos.images');

    Route::resource('contacto', ContactFormController::class);
});
