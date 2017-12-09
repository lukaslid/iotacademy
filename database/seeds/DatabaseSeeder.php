<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Country::class, 20)->create()->each(
            function($country) {
                factory(App\City::class, 10)->make(['country_id' => $country->id]);
            }
        );
    }
}
