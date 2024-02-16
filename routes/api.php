<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\BinController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\DashboardController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

/* Start User Facility */
    Route::group(["middleware" => ["auth:api"]], function(){
        /* Start Profile Facility */ 
            Route::get('/profile', [AuthController::class, 'Profile']);
            Route::post('/updateprofile', [AuthController::class, 'updateProfile']);
            Route::post('/updateprofilepicture', [AuthController::class, 'updateProfilePicture']);
            Route::post('/change_password', [AuthController::class, 'ChangePassword']);
            Route::post('/notification', [AuthController::class, 'Notification']);
        /* End Profile Facility */

        /* Start Report Facility */
            Route::post('reportamount/store/{bin_id}',[ReportController::class, 'reportAmountStore']);
            Route::post('reportempty/store/{bin_id}',[ReportController::class, 'reportEmptyStore']);
        /* End Report Facility */

        /* Start Dashboard Facility */
            Route::get('/dashboard', [DashboardController::class, 'Dashboard']);
        /* End Dashboard Facility */

        Route::get('/logout',[AuthController::class,'logout']);
            
    });

    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/forgotpassword', [AuthController::class, 'forgotPassword']);
    Route::post('/otp_verification', [AuthController::class, 'verify']);
    Route::post('/resetpassword', [AuthController::class, 'resetPassword']);
/* End User Facility */ 

/* Start Location Facility */ 
    Route::get('/locations', [LocationController::class, 'index']);
/* End Location Facility */

/* Start Bin Facility */
    Route::get('/bins', [BinController::class, 'index']);
    Route::get('/detail', [BinController::class, 'binInformation']);
/* End Bin Facility */

/* Strat Report Facility */
    Route::post('reportproblem/store/{bin_id}',[ReportController::class, 'reportProblemStore']);
    Route::post('reportlocation/store/{bin_id}',[ReportController::class, 'reportLocationStore']);
/* End Report Facility */


