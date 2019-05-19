<?php

use Illuminate\Database\Seeder;

class WorkTitlesSeeder extends Seeder
{

    public function run()
    {
        DB::table('WorkTitles')->insert([
            ['work_id' => 2, 'title' => 'Ubuntu Console'],
            ['work_id' => 3, 'title' => 'Installing Network Devices'],
            ['work_id' => 4, 'title' => 'Internet Configuration'],
            ['work_id' => 5, 'title' => 'Network Services Installation'],
            ['work_id' => 6, 'title' => 'Network Services Installation']
        ]);
    }
}
