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

        foreach($description as $description){
            Description::create($description);
        }
    }
}
