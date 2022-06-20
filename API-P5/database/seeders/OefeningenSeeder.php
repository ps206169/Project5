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
            ['id' => 1, 'nameNL' => 'Squat', 'nameEN' => 'Squat', 'instructionNL' => '', 'instructionEN' => ''],
            ['id' => 2, 'nameNL' => 'Push-up', 'nameEN' => 'Push-up', 'instructionNL' => '', 'instructionEN' => ''],
            ['id' => 3, 'nameNL' => 'Dip', 'nameEN' => 'Dip', 'instructionNL' => '', 'instructionEN' => ''],
            ['id' => 4, 'nameNL' => 'Plank', 'nameEN' => 'Plank', 'instructionNL' => '', 'instructionEN' => ''],
            ['id' => 5, 'nameNL' => 'Paardentrap', 'nameEN' => 'Horse kick', 'instructionNL' => '', 'instructionEN' => ''],
            ['id' => 6, 'nameNL' => 'Mountain climber', 'nameEN' => 'Mountain climber', 'instructionNL' => '', 'instructionEN' => ''],
            ['id' => 7, 'nameNL' => 'Burpee', 'nameEN' => 'Burpee', 'instructionNL' => '', 'instructionEN' => ''],
            ['id' => 8, 'nameNL' => 'Lunge', 'nameEN' => 'Lunge', 'instructionNL' => '', 'instructionEN' => ''],
            ['id' => 9, 'nameNL' => 'Wall sit', 'nameEN' => 'Wall sit', 'instructionNL' => '', 'instructionEN' => ''],
            ['id' => 10, 'nameNL' => 'Crunch', 'nameEN' => 'Crunch', 'instructionNL' => '', 'instructionEN' => ''],
        ];

        foreach($oefeningen as $oefening){
            oefeningen::create($oefening);
        }
    }
}
