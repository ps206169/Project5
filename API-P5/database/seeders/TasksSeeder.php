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
            ['id' => 1, 'task' => '', 'sportId' => 1, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 2, 'task' => '', 'sportId' => 1, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 3, 'task' => '', 'sportId' => 1, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 4, 'task' => '', 'sportId' => 2, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 5, 'task' => '', 'sportId' => 2, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 6, 'task' => '', 'sportId' => 2, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 7, 'task' => '', 'sportId' => 3, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 8, 'task' => '', 'sportId' => 3, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 9, 'task' => '', 'sportId' => 3, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 10, 'task' => '', 'sportId' => 4, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 11, 'task' => '', 'sportId' => 4, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 12, 'task' => '', 'sportId' => 4, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 13, 'task' => '', 'sportId' => 5, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 14, 'task' => '', 'sportId' => 5, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 15, 'task' => '', 'sportId' => 5, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 16, 'task' => '', 'sportId' => 6, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 17, 'task' => '', 'sportId' => 6, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 18, 'task' => '', 'sportId' => 6, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 19, 'task' => '', 'sportId' => 7, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 20, 'task' => '', 'sportId' => 7, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 21, 'task' => '', 'sportId' => 7, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 22, 'task' => '', 'sportId' => 8, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 23, 'task' => '', 'sportId' => 8, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 24, 'task' => '', 'sportId' => 8, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 25, 'task' => '', 'sportId' => 9, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 26, 'task' => '', 'sportId' => 9, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 27, 'task' => '', 'sportId' => 9, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 28, 'task' => '', 'sportId' => 10, 'difficultyId' => 1, 'languageId' => 1],
            ['id' => 29, 'task' => '', 'sportId' => 10, 'difficultyId' => 2, 'languageId' => 1],
            ['id' => 30, 'task' => '', 'sportId' => 10, 'difficultyId' => 3, 'languageId' => 1],
            ['id' => 31, 'task' => '', 'sportId' => 1, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 32, 'task' => '', 'sportId' => 1, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 33, 'task' => '', 'sportId' => 1, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 34, 'task' => '', 'sportId' => 2, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 35, 'task' => '', 'sportId' => 2, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 36, 'task' => '', 'sportId' => 2, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 37, 'task' => '', 'sportId' => 3, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 38, 'task' => '', 'sportId' => 3, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 39, 'task' => '', 'sportId' => 3, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 40, 'task' => '', 'sportId' => 4, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 41, 'task' => '', 'sportId' => 4, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 42, 'task' => '', 'sportId' => 4, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 43, 'task' => '', 'sportId' => 5, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 44, 'task' => '', 'sportId' => 5, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 45, 'task' => '', 'sportId' => 5, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 46, 'task' => '', 'sportId' => 6, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 47, 'task' => '', 'sportId' => 6, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 48, 'task' => '', 'sportId' => 6, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 49, 'task' => '', 'sportId' => 7, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 50, 'task' => '', 'sportId' => 7, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 51, 'task' => '', 'sportId' => 7, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 52, 'task' => '', 'sportId' => 8, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 53, 'task' => '', 'sportId' => 8, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 54, 'task' => '', 'sportId' => 8, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 55, 'task' => '', 'sportId' => 9, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 56, 'task' => '', 'sportId' => 9, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 57, 'task' => '', 'sportId' => 9, 'difficultyId' => 3, 'languageId' => 2],
            ['id' => 58, 'task' => '', 'sportId' => 10, 'difficultyId' => 1, 'languageId' => 2],
            ['id' => 59, 'task' => '', 'sportId' => 10, 'difficultyId' => 2, 'languageId' => 2],
            ['id' => 60, 'task' => '', 'sportId' => 10, 'difficultyId' => 3, 'languageId' => 2],
        ];

        foreach($tasks as $task){
            tasks::create($task);
        }
    }
}
