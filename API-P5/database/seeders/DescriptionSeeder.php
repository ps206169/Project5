<?php

namespace Database\Seeders;

use App\Models\Description;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $description = [
            ['id' => 1, 'description' => 'Squat'],
            ['id' => 2, 'description' => 'Push-up'],
            ['id' => 3, 'description' => 'Dip'],
            ['id' => 4, 'description' => 'Plank'],
            ['id' => 5, 'description' => 'Paardentrap'],
            ['id' => 6, 'description' => 'Mountain climber'],
            ['id' => 7, 'description' => 'Burpee'],
            ['id' => 8, 'description' => 'Lunge'],
            ['id' => 9, 'description' => 'Wall sit'],
            ['id' => 10, 'description' => 'Crunch'],
        ];

        foreach($description as $description){
            Description::create($description);
        }
    }
}
