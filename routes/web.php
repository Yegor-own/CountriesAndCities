<?php

use App\Http\Controllers\CountryController;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Support\Facades\Route;


// Route::prefix('api')->group(function () {
//     Route::resource('countries', CountryController::class);
// });


Route::prefix('api')->group(function () {
    // Route::resource('countries', CountryController::class);
    Route::get('countries', function () {
        return CountryResource::collection(Country::all());
    });
});
