<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET foreign_key_checks = 0');
        DB::table('trips')->truncate();

        factory(\App\Trip::class, 20)->create()->each(function($trip){

            // Seed para a relação com 10 users
            // Checar!!! $trip->user()->saveMany(factory(App\User::class, 10)->make());

            // Seed para a relação com 4 interests
            $trip->interest()->saveMany(factory(App\Interest::class, 4)->make());
        });

        DB::statement('SET foreign_key_checks = 1');
    }
}
