<?php

use App\Http\Controllers\PersonalBrandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProposalController;


Route::get('/', [PersonalBrandingController::class, 'welcome']);


Route::get('/proposals/create', [ProposalController::class, 'create'])->name('proposals.create');
Route::post('/proposals', [ProposalController::class, 'store'])->name('proposals.store');
