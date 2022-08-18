<?php

use App\Http\Controllers\CountryController;
use App\Http\Resources\CityResource;
use App\Http\Resources\CountryResource;
use App\Models\City;
use App\Models\Country;
use Illuminate\Support\Facades\Route;


// Route::prefix('api')->group(function () {
//     Route::resource('countries', CountryController::class);
// });


Route::prefix('api')->group(function () {
    Route::resource('countries', CountryController::class);
    // Route::get('getAllCountries', function () {
    //     return CountryResource::collection(Country::all());
    // });
    // Route::get('getAllCities', function () {
    //     return CityResource::collection(City::all());
    // });
});
