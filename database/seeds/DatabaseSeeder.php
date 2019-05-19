<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(WorkTitlesSeeder::class);
        $this->call(NetworkQuestionsSeeder::class);
        $this->call(AnswersSeeder::class);
    }
}
