<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Country::all()->each(function($country) {
                    factory(App\City::class, 10)->create(['country_id' => $country->id]);
        });

    }
}
