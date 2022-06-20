<?php

namespace Database\Seeders;

use App\Models\oefeningen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OefeningenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $oefeningen = [
            ['id' => 1, 'nameNL' => 'Squat', 'nameEN' => 'Squat'],
            ['id' => 2, 'nameNL' => 'Push-up', 'nameEN' => 'Push-up'],
            ['id' => 3, 'nameNL' => 'Dip', 'nameEN' => 'Dip'],
            ['id' => 4, 'nameNL' => 'Plank', 'nameEN' => 'Plank'],
            ['id' => 5, 'nameNL' => 'Paardentrap', 'nameEN' => 'Horse kick'],
            ['id' => 6, 'nameNL' => 'Mountain climber', 'nameEN' => 'Mountain climber'],
            ['id' => 7, 'nameNL' => 'Burpee', 'nameEN' => 'Burpee'],
            ['id' => 8, 'nameNL' => 'Lunge', 'nameEN' => 'Lunge'],
            ['id' => 9, 'nameNL' => 'Wall sit', 'nameEN' => 'Wall sit'],
            ['id' => 10, 'nameNL' => 'Crunch', 'nameEN' => 'Crunch'],
        ];

        foreach($oefeningen as $oefening){
            oefeningen::create($oefening);
        }
    }
}
