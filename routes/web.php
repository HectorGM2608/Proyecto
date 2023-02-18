<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosControllerCRUD;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SolicitudController;


Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/saludo', function () {
    return view('alumnos');
});*/
//---------------------------------------------
Route::view('/', 'welcome');
Route::view('/saludo', 'layout')->name('saludoname');


Route::view('/layout', 'layout')->name('layout');

//Route::view('/productos', 'productos')->name('productos');
//Route::get('/productos', ProductosController::class)->name('productos');
Route::get('/productos', [ProductosControllerCRUD::class, 'index'])->name('productos');



//Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/formcontact', 'contacto')->name('pinchecontacto');


//Route::get('/alumnos', [AlumnosController::class, 'index'])->name('students');
Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');
Route::get('/articulos', [ArticuloController::class, 'index'])->name('articulos');
Route::get('/almacenes', [AlmacenController::class, 'index'])->name('almacenes');
Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores');
Route::get('/solicitudes', [SolicitudController::class, 'index'])->name('solicitudes');