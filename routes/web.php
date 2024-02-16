<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\BinController;
use App\Http\Controllers\BagController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermConditionController;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/presse', 'presse');
Route::view('/impressum', 'impressum');
Route::view('/datenschutz', 'datenschutz');


    Route::get('/login',[PassportAuthController::class,'index']);
    Route::post('/login',[PassportAuthController::class,'loginAction']);

    //Route::middleware(['auth', 'role'])->group(function () {

        Route::prefix('/admin')->group(function () {

            /* Admin Facility */
                Route::get('/dashboard',[PassportAuthcontroller::class,'dashboard'])->name('admin.dashboard');
                Route::get('/forgot-password',[PassPortAuthController::class,'forgotPassword'])->middleware('guest')->name('password.request');
                Route::post('/forgot-password',[PassPortAuthController::class,'resetPassword'])->middleware('guest')->name('password.email');
                
                Route::get('/logout', function (Request $request) {
                    $data = User::where(['id' => $request->session()->get('ADMIN_ID'),'role_id' =>1])->update(
                        [
                            'status' => 0,
                        ]
                    );
                    session()->forget('ADMIN_LOGIN');
                    session()->forget('ADMIN_ID');
                    return redirect('/login');
                });
            /* Admin Facility */
            
            /* Club */
                Route::get('/clubs',[ClubController::class,'index'])->name('clubs.index');
                Route::get('/club/create',[ClubController::class,'create'])->name('clubs.create');
                Route::post('/club/store',[ClubController::class,'store'])->name('clubs.store');
                Route::get('/club/edit/{id}',[ClubController::class,'edit'])->name('clubs.edit');
                Route::post('/club/update/{id}',[ClubController::class,'update'])->name('clubs.update');
                Route::get('/club/delete/{id}',[ClubController::class,'delete'])->name('clubs.delete');
            /* Club */

            /* Bin */
                Route::get('/bins',[BinController::class,'index'])->name('bins.index');
                Route::get('/bin/create',[BinController::class,'create'])->name('bins.create');
                Route::get('/bin/edit/{id}',[BinController::class,'edit'])->name('bins.edit');
                Route::get('/bin/delete/{id}',[BinController::class,'delete'])->name('bins.delete');
                Route::post('/bin/store',[BinController::class,'store'])->name('bins.store');
                Route::post('/bin/update/{id}',[BinController::class,'update'])->name('bins.update');
                Route::post('/bin/delete/image/{id}',[BinController::class,'iamgeDelete'])->name('bins.image_delete');
            /* Bin */

            /* Bag */
                Route::get('/bags',[BagController::class,'index'])->name('bags.index');
                Route::get('/bag/create',[BagController::class,'create'])->name('bags.create');
                Route::get('/bag/edit/{id}',[BagController::class,'edit'])->name('bags.edit');
                Route::get('/bag/delete/{id}',[BagController::class,'delete'])->name('bags.delete');
                Route::post('/bag/store',[BagController::class,'store'])->name('bags.store');
                Route::post('/bag/update/{id}',[BagController::class,'update'])->name('bags.update');
            /* Bag */


            /* Location */
                Route::get('/locations',[LocationController::class,'index'])->name('locations.index');
                Route::get('/location/create',[LocationController::class,'create'])->name('locations.create');
                Route::get('/location/edit/{id}',[LocationController::class,'edit'])->name('locations.edit');
                Route::get('/location/delete/{id}',[LocationController::class,'delete'])->name('locations.delete');
                Route::post('/location/store',[LocationController::class,'store'])->name('locations.store');
                Route::post('/location/update/{id}',[LocationController::class,'update'])->name('locations.update');
            /* Location */

            /* User */
                Route::get('/employees',[UserController::class,'employee'])->name('employees.employee');
            /* User */

        });

        /* Admin Facility */
            Route::get('/reset_password/{token}',[PassPortAuthController::class,'resetPasswordView'])->middleware('guest')->name('password.reset');
            Route::post('/reset-password',[PassPortAuthController::class,'ResetPasswordAction'])->middleware('guest')->name('password.update');
        /* Admin Facility */

        /* Privacy & Policy */
            Route::get('privacypolicy',[PrivacyPolicyController::class,'index'])->name('privacypolicy.index');
        /* Privacy & Policy */

        /* Term & Condition */
            Route::get('termcondition',[TermConditionController::class,'index'])->name('termcondition.index');
        /* Term & Condition */

            /* Club */
            Route::prefix('/club')->group(function () {
                Route::get('/dashboard',[ClubController::class,'dashboard'])->name('clubs.dashboard');
                
                Route::get('/logout', function (Request $request) {
                    $data = User::where(['id' => $request->session()->get('CLUB_ID'),'role_id' =>2])->update(
                        [
                            'status' => 0,
                        ]
                    );
                    session()->forget('CLUB_LOGIN');
                    session()->forget('CLUB_ID');
                    return redirect('/login');
                });
            

                /* User */
                    Route::get('/employees',[UserController::class,'index'])->name('employees.index');
                    Route::get('/employee/create',[UserController::class,'create'])->name('employees.create');
                    Route::post('/employee/store',[UserController::class,'store'])->name('employees.store');
                    Route::get('/employee/edit/{id}',[UserController::class,'edit'])->name('employees.edit');
                    Route::post('/employee/update/{id}',[UserController::class,'update'])->name('employees.update');
                    Route::get('/employee/delete/{id}',[UserController::class,'delete'])->name('employees.delete');
                /* User */

                /* Bin */
                    Route::get('/bins',[ClubController::class,'bin'])->name('bins.listing');
                    Route::get('/bindetail/{id}',[ClubController::class,'binDetail'])->name('bin.detail');
                    Route::get('/binhistory/{id}',[ClubController::class,'binHistory'])->name('bin.history');
                    Route::get('/bintonkeeper/{user_id}/{bin_id}',[ClubController::class,'binTonKeeperRemove'])->name('bin.tonkeeper');
                    Route::get('/binuseraction/{id}',[ClubController::class,'binUserAction'])->name('bin.useraction');
                /* Bin */

                /* User Action */
                    Route::get('/useractions',[ClubController::class,'userAction'])->name('useraction.listing');
                /* User Action */
            });
        //});
    /* Club */



   /* Route::middleware(['auth', 'role'])->group(function () {
        Route::prefix('/admin')->group(function () {

          
                Route::get('/dashboard',[PassportAuthcontroller::class,'dashboard']);
                Route::get('/forgot-password',[PassPortAuthController::class,'forgotPassword'])->middleware('guest')->name('password.request');
                Route::post('/forgot-password',[PassPortAuthController::class,'resetPassword'])->middleware('guest')->name('password.email');
               
                Route::get('/logout', function (Request $request) {
                    $data = User::where(['id' => $request->session()->get('ADMIN_ID'),'role_id' =>1])->update(
                        [
                            'status' => 0,
                        ]
                    );
                    session()->forget('ADMIN_LOGIN');
                    session()->forget('ADMIN_ID');
                    return redirect('/login');
                });
          
                Route::get('/clubs',[ClubController::class,'index'])->name('clubs.index');
                Route::get('/club/create',[ClubController::class,'create'])->name('clubs.create');
                Route::post('/club/store',[ClubController::class,'store'])->name('clubs.store');
                Route::get('/club/edit/{id}',[ClubController::class,'edit'])->name('clubs.edit');
                Route::post('/club/update/{id}',[ClubController::class,'update'])->name('clubs.update');
                Route::get('/club/delete/{id}',[ClubController::class,'delete'])->name('clubs.delete');
          
                Route::get('/bins',[BinController::class,'index'])->name('bins.index');
                Route::get('/bin/create',[BinController::class,'create'])->name('bins.create');
                Route::get('/bin/edit/{id}',[BinController::class,'edit'])->name('bins.edit');
                Route::get('/bin/delete/{id}',[BinController::class,'delete'])->name('bins.delete');
                Route::post('/bin/store',[BinController::class,'store'])->name('bins.store');
                Route::post('/bin/update/{id}',[BinController::class,'update'])->name('bins.update');
                Route::post('/bin/delete/image/{id}',[BinController::class,'iamgeDelete'])->name('bins.image_delete');
            
                Route::get('/bags',[BagController::class,'index'])->name('bags.index');
                Route::get('/bag/create',[BagController::class,'create'])->name('bags.create');
                Route::get('/bag/edit/{id}',[BagController::class,'edit'])->name('bags.edit');
                Route::get('/bag/delete/{id}',[BagController::class,'delete'])->name('bags.delete');
                Route::post('/bag/store',[BagController::class,'store'])->name('bags.store');
                Route::post('/bag/update/{id}',[BagController::class,'update'])->name('bags.update');
            
                Route::get('/locations',[LocationController::class,'index'])->name('locations.index');
                Route::get('/location/create',[LocationController::class,'create'])->name('locations.create');
                Route::get('/location/edit/{id}',[LocationController::class,'edit'])->name('locations.edit');
                Route::get('/location/delete/{id}',[LocationController::class,'delete'])->name('locations.delete');
                Route::post('/location/store',[LocationController::class,'store'])->name('locations.store');
                Route::post('/location/update/{id}',[LocationController::class,'update'])->name('locations.update');
            
                Route::get('/employees',[UserController::class,'employee'])->name('employees.employee');
           
    
        });
    });*/