<?php

namespace Database\Seeders;

use App\Models\sports;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sports = [
            ['id' => 1, 'name' => 'Squat'],
            ['id' => 2, 'name' => 'Push-up'],
            ['id' => 3, 'name' => 'Dip'],
            ['id' => 4, 'name' => 'Plank'],
            ['id' => 5, 'name' => 'Paardentrap'],
            ['id' => 6, 'name' => 'Mountain climber'],
            ['id' => 7, 'name' => 'Burpee'],
            ['id' => 8, 'name' => 'Lunge'],
            ['id' => 9, 'name' => 'Wall sit'],
            ['id' => 10, 'name' => 'Crunch'],
        ];

        foreach($sports as $sport){
            sports::create($sport);
        }
    }
}
