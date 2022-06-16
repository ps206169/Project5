<?php

namespace Database\Seeders;

use App\Models\languages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['id' => 1, 'language' => 'english'],
            ['id' => 2, 'language' => 'nederlands'],
        ];

        foreach($languages as $language){
            languages::create($language);
        }
    }
}
