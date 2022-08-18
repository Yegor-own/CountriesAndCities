<?php

namespace App\Http\Controllers;

use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CityResource::collection(City::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $city = new City;
        $city->city = $request->city;
        $city->city_id = $request->country_id;
        $city->save();
        return redirect('/api/cities');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return new CityResource(City::findOrFail($city->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $s = false;
        if (isset($request->city)) {
            $city->city = $request->city;
            $s = true;
        }
        if (isset($request->country_id)) {
            $s = true;
            $city->country_id = $request->country_id;

        }
        if ($s) {
            if (gettype($city->city) == "string") {
                $city->save();
                return redirect('/api/cities');
            } else {
                $city->city = $city->getOriginal("city");
                $city->save();
                return redirect('/api/cities');
            }
        }
        echo "failed";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect('/api/cities');
    }
}
