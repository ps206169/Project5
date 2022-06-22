<?php

namespace Database\Seeders;

use App\Models\prestaties;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrestatiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prestaties = [
              [  'userId' => '1',
                'exerciseId' => '1',
                'startedAt' => '1',
                'finishedAt' => '2',
                'amount' => '3',
                ]
            ];

            foreach ($prestaties as $prestatie) {
                prestaties::create($prestatie);
            }
    }
}
