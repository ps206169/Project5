<?php

namespace Database\Seeders;

use App\Models\tasks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
            >>ID LIST<<
            >>DifficultyId<<
            1 - Easy
            2 - Moderate
            3 - Hard
            >>LanguageId<<
            1 - English
            2 - Nederlands
            >>Sports<<
            1 - Squat
            2 - Push-up
            3 - Dip
            4 - Plank
            5 - Paardentrap
            6 - Mountain Climber
            7 - Burpee
            8 - Lunge
            9 - Wall sit
            10 - Crunch
        */

        $tasks = [
            ['id' => 1, 'task' => 'Do 10 squats', 'sportId' => 1, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 2, 'task' => 'Do 30 squats', 'sportId' => 1, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 3, 'task' => 'Do 50 squats', 'sportId' => 1, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 4, 'task' => 'Do 10 push-ups', 'sportId' => 2, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 5, 'task' => 'Do 30 push-ups', 'sportId' => 2, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 6, 'task' => 'Do 50 push-ups', 'sportId' => 2, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 7, 'task' => 'Do 10 dips', 'sportId' => 3, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 8, 'task' => 'Do 30 dips', 'sportId' => 3, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 9, 'task' => 'Do 50 dips', 'sportId' => 3, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 10, 'task' => 'Plank for 10 seconds', 'sportId' => 4, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 11, 'task' => 'Plank for 30 seconds', 'sportId' => 4, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 12, 'task' => 'Plank for 60 seconds', 'sportId' => 4, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 13, 'task' => 'Do 10 donkey kicks', 'sportId' => 5, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 14, 'task' => 'Do 30 donkey kicks', 'sportId' => 5, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 15, 'task' => 'Do 50 donkey kicks', 'sportId' => 5, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 16, 'task' => 'Mountain Climb for 10 seconds', 'sportId' => 6, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 17, 'task' => 'Mountain Climb for 30 seconds', 'sportId' => 6, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 18, 'task' => 'Mountain Climb for 60 seconds', 'sportId' => 6, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 19, 'task' => 'Do 10 burpees', 'sportId' => 7, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 20, 'task' => 'Do 30 burpees', 'sportId' => 7, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 21, 'task' => 'Do 50 burpees', 'sportId' => 7, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 22, 'task' => 'Keep one foot forward for 10 seconds before switching to the other foot for another 10 seconds', 'sportId' => 8, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 23, 'task' => 'Keep one foot forward for 30 seconds before switching to the other foot for another 30 seconds', 'sportId' => 8, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 24, 'task' => 'Keep one foot forward for 60 seconds before switching to the other foot for another 60 seconds', 'sportId' => 8, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 25, 'task' => 'Wall sit for 10 seconds', 'sportId' => 9, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 26, 'task' => 'Wall sit for 30 seconds', 'sportId' => 9, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 27, 'task' => 'Wall sit for 60 seconds', 'sportId' => 9, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 28, 'task' => 'Do 10 crunches', 'sportId' => 10, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 29, 'task' => 'Do 30 crunches', 'sportId' => 10, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 30, 'task' => 'Do 50 crunches', 'sportId' => 10, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 31, 'task' => 'Doe 10 squats', 'sportId' => 1, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 32, 'task' => 'Doe 30 squats', 'sportId' => 1, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 33, 'task' => 'Doe 50 squats', 'sportId' => 1, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 34, 'task' => 'Doe 10 push-ups', 'sportId' => 2, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 35, 'task' => 'Doe 30 push-ups', 'sportId' => 2, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 36, 'task' => 'Doe 50 push-ups', 'sportId' => 2, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 37, 'task' => 'Doe 10 dips', 'sportId' => 3, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 38, 'task' => 'Doe 30 dips', 'sportId' => 3, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 39, 'task' => 'Doe 50 dips', 'sportId' => 3, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 40, 'task' => 'Plank voor 10 seconden', 'sportId' => 4, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 41, 'task' => 'Plank voor 30 seconden', 'sportId' => 4, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 42, 'task' => 'Plank voor 60 seconden', 'sportId' => 4, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 43, 'task' => 'Doe 10 paardentrappen', 'sportId' => 5, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 44, 'task' => 'Doe 30 paardentrappen', 'sportId' => 5, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 45, 'task' => 'Doe 50 paardentrappen', 'sportId' => 5, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 46, 'task' => 'Doe de mountain climber voor 10 seconden', 'sportId' => 6, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 47, 'task' => 'Doe de mountain climber voor 30 seconden', 'sportId' => 6, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 48, 'task' => 'Doe de mountain climber voor 60 seconden', 'sportId' => 6, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 49, 'task' => 'Doe 10 burpees', 'sportId' => 7, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 50, 'task' => 'Doe 30 burpees', 'sportId' => 7, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 51, 'task' => 'Doe 50 burpees', 'sportId' => 7, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 52, 'task' => 'Lunge met een been voor 10 seconden, wissel dan naar het andere voor 10 seconden', 'sportId' => 8, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 53, 'task' => 'Lunge met een been voor 30 seconden, wissel dan naar het andere voor 30 seconden', 'sportId' => 8, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 54, 'task' => 'Lunge met een been voor 60 seconden, wissel dan naar het andere voor 60 seconden', 'sportId' => 8, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 55, 'task' => 'Doe een wall sit voor 10 seconden', 'sportId' => 9, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 56, 'task' => 'Doe een wall sit voor 30 seconden', 'sportId' => 9, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 57, 'task' => 'Doe een wall sit voor 60 seconden', 'sportId' => 9, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 58, 'task' => 'Doe 10 crunches', 'sportId' => 10, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 59, 'task' => 'Doe 30 crunches', 'sportId' => 10, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 60, 'task' => 'Doe 50 crunches', 'sportId' => 10, 'difficultyId' => 3, 'languageId' => 2],
        ];

        foreach($tasks as $task){
            tasks::create($task);
        }
    }
}
