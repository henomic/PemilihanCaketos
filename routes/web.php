<?php

use App\Http\Controllers\adminCreatePeriode;
use App\Http\Controllers\adminDashboard;
use App\Http\Controllers\AkunAdmin;
use App\Http\Controllers\authController;
use App\Http\Controllers\CrudPaslon;
use App\Http\Controllers\hasilSuara;
use App\Http\Controllers\pemungutanSuara;
use App\Http\Controllers\TpsController;
use App\Http\Middleware\AdminPermision;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\periodeCheck;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware([periodeCheck::class])->group(function () {

    Route::get('/', function () {
        $data['tps'] = User::where('level', 'tps')->where('status', 'aktif')->get();
        return view('landingpage.indexLandingpage', $data);
    })->name('/');


    Route::middleware([AuthCheck::class])->group(function () {

        Route::resource('pemungutanSuara', pemungutanSuara::class);
    });
    Route::post('CekLogin', [authController::class, 'cekLogin'])->name('CekLogin');
    Route::resource('Login', authController::class);


    Route::middleware([AdminPermision::class])->group(function () {

        Route::resource('adminDashboard', adminDashboard::class);
        Route::resource('adminPeriode', adminCreatePeriode::class);
        Route::resource('AkunAdmin', AkunAdmin::class);
        Route::resource('adminPaslon', CrudPaslon::class);
        Route::resource('adminHasilSuara', hasilSuara::class);
        Route::resource('TpsController', TpsController::class);
    });
});
