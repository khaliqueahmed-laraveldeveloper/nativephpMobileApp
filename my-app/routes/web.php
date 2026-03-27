<?php

use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('device/info',[testController::class,'deviceInfo'])->name('deviceInfo');

Route::get('device/fleshlight',[testController::class,'toggleFlashlight'])->name('fleshlight');

Route::get('device/batteryinfo',[testController::class,'getBatteryInfo'])->name('batteryinfo');

Route::get('device/vibrate',[testController::class,'vibrate'])->name('vibrate');

