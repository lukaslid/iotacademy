<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Country;
use App\City;

class HomeController extends Controller
{
    public function show() {
        $countries = DB::table('countries')->get();
        return view('countries.index', ['countries' => $countries]);
    }

    public function create() {
        $country = new Country;
        $country->fill([
            'name' => request('name'),
            'area' => request('area'),
            'population' => request('population'),
        ]);
        $country->save();
        return redirect('/');
    }
    public function delete(Country $country) {
        $cities  =  DB::table('cities')->where('country_id', $country->id)->get();
        foreach($cities as $city)
        {
            City::destroy($city->id);
        }
        $country->delete();
        return back();
    }
}
