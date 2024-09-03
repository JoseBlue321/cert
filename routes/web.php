<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

Route::get('/',[EventoController::class,'index'])->name('index.eventos'); //muestra todos los eventos
Route::get('evento/{id}',[EventoController::class,'show'])->name('show.eventos'); //muestra a los incritos de cada evento
Route::get('pdf/{id}',[EventoController::class,'pdf'])->name('pdf.eventos'); //Genera los certificados uno por uno
Route::get('todo/{id}',[EventoController::class,'GenerarTodo'])->name('pdf.todo'); //Genera los certificados uno por uno
