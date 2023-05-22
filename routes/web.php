<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Device;
use App\Http\Controllers\Chart;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {return view('login');});
*/
Route::get('/', [Login::class,'login'])->name('login');
Route::post('postlogin',[Login::class,'postlogin'])->name('postlogin');
Route::get('dashboard', [Login::class,'dashboard'])->name('dashboard');
Route::get('welcome', [Login::class,'welcome'])->name('welcome');
Route::get('logout',[Login::class, 'logout'])->name('logout');

Route::get('dashboard', [Chart::class,'AllChart'])->name('dashboard');
//Route::get('dashboard', [Chart::class,'SoftwareChart'])->name('dashboard');


Route::get('workstation',[Device::class,'Workstation'])->name('workstation');
Route::get('workstationdetails',[Device::class,'WorkstationDetails'])->name('workstationdetails');
Route::get('server',[Device::class,'Server'])->name('server');
Route::get('serverdetails',[Device::class,'ServerDetails'])->name('serverdetails');
Route::get('network',[Device::class,'Network'])->name('network');
Route::get('networkdetails',[Device::class,'NetworkDetails'])->name('networkdetails');
Route::get('printing',[Device::class,'Printing'])->name('printing');
Route::get('printingdetails',[Device::class,'PrintingDetails'])->name('printingdetails');

Route::get('adddevice',[Device::class,'NewDevice'])->name('adddevice');


