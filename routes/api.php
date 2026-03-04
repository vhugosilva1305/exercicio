<?php
use App\Http\Controllers\Api\TestimonyController;
use App\Http\Controllers\Api\FrameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DadosController;


Route::get('/dados', [DadosController::class, 'index']);