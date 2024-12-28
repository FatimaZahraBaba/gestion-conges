<?php

use App\Http\Controllers\DemandeCongeController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\NotificationController;
use App\Models\DemandeConge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('employes', EmployeController::class);
Route::apiResource('notifications', NotificationController::class);
Route::apiResource('demande_conges', DemandeCongeController::class);
