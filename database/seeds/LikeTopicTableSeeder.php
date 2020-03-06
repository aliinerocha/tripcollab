<?php

use Illuminate\Database\Seeder;

class LikeTopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET foreign_key_checks = 0');
        DB::table('like_topics')->truncate();

        factory(\App\LikeTopic::class, 100)->create();
        
        DB::statement('SET foreign_key_checks = 1');
    }
}
