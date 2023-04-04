<?php

namespace Database\Seeders;

use App\Models\Competitor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Competitor::insert([
            [
                'name' => 'Bob',
                'sex' => 'male',
                'age' => 16,
                'country' => 'Ukraine',
                'competition_id' => 1,
            ],
            [
                'name' => 'Alex',
                'sex' => 'male',
                'age' => 14,
                'country' => 'Ukraine',
                'competition_id' => 2,
            ],
            [
                'name' => 'Marley',
                'sex' => 'male',
                'age' => 18,
                'country' => 'Ukraine',
                'competition_id' => 3,
            ],
            [
                'name' => 'Alexandr',
                'sex' => 'male',
                'age' => 13,
                'country' => 'Ukraine',
                'competition_id' => 4,
            ],
            [
                'name' => 'John',
                'sex' => 'male',
                'age' => 18,
                'country' => 'Ukraine',
                'competition_id' => 5,
            ],

        ]);
    }
}
