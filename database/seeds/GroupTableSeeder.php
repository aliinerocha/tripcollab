<?php

use Illuminate\Database\Seeder;
use App\Group;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET foreign_key_checks = 0');
        DB::table('groups')->truncate();

        factory(\App\Group::class, 20)->create()->each(function($group) {
            
            // Seed para a relação com user
            $group->user()->save()(factory(\App\User::class)->make());

            // Seed para a relação com admin
            $group->admin()->save()(factory(\App\User::class)->make());

            // Seed para a relação com interest
            $group->interest()->save()(factory(\App\Interest::class)->make());

            // Seed para a relação com topic
            $group->topic()->save()(factory(\App\Topic::class)->make());
        });

        DB::statement('SET foreign_key_checks = 1');
    }
}
