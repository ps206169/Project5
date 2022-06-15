<?php

namespace Database\Seeders;

use App\Models\difficulties;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DifficultiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $difficulties = [
            ['id' => 1, 'name' => 'easy'],
            ['id' => 2, 'name' => 'moderate'],
            ['id' => 3, 'name' => 'hard'],
        ];

        foreach($difficulties as $difficulty){
            difficulties::create($difficulty);
        }
    }
}
