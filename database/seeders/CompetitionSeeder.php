<?php

namespace Database\Seeders;

use App\Models\Competition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Department::truncate();
       Competition::insert([
            ['competition_name' => 'Football'],
            ['competition_name' => 'Basketball'],
        ]);
    }
}
