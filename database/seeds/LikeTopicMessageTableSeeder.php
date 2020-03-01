<?php

use Illuminate\Database\Seeder;

class LikeTopicMessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET foreign_key_checks = 0');
        DB::table('like_topic_messages')->truncate();

        factory(\App\LikeTopicMessage::class, 4)->create();
        
        DB::statement('SET foreign_key_checks = 1');
    }
}
