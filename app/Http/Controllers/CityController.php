<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function show(Country $country) {
       $cities  =  DB::table('cities')->where('country_id', $country->id)->get();
       return view('cities.index', ['cities' => $cities, 'country' => $country]);
    }

    public function create(Country $country) {
        $city = new City;
        $city->fill([
            'name' => request('name'),
            'area' => request('area'),
            'population' => request('population'),
            'country_id' => $country->id
        ]);
        $city->save();
        return back();
    }
    public function delete(City $city) {
        $city->delete();
        return back();
    }
}
