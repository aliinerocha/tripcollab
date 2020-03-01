<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AchievementTableSeeder::class);
        $this->call(InterestTableSeeder::class);
        $this->call(GroupTableSeeder::class);
        $this->call(TripTableSeeder::class);
        $this->call(TopicTableSeeder::class);
        $this->call(TopicMessageTableSeeder::class);
        $this->call(MessageTableSeeder::class);
        $this->call(LikeTopicTableSeeder::class);
        $this->call(LikeTopicMessageTableSeeder::class);
        // $this->call(NotificationTableSeeder::class);
        // $this->call(ActivityLogTableSeeder::class);      
    }
}
