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
            ['id' => 1, 'name' => 'squat'],
            ['id' => 2, 'name' => 'push-up'],
            ['id' => 3, 'name' => 'dip'],
            ['id' => 3, 'name' => 'dip'],
            ['id' => 3, 'name' => 'dip'],
            ['id' => 3, 'name' => 'dip'],
            ['id' => 3, 'name' => 'dip'],
            ['id' => 3, 'name' => 'dip'],
        ];

        foreach($sports as $sport){
            sports::create($sport);
        }
    }
}
