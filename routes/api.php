<?php

use App\Http\Controllers\Api\PublicCompanyController;
use Illuminate\Support\Facades\Route;

Route::get('company/public/', [PublicCompanyController::class, 'index']);
