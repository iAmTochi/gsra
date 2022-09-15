<?php

namespace Database\Seeders;

use App\Models\RecruiterPosition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecruiterPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            'C-level: CEO / COO / CIO / CFO / CTO / CPO',
            'Senior Management: Head of Department / Team Lead',
            'Middle Management: Supervisor / Unit Head',
            'Junior Level: Associate / Officer'
        ];

        foreach ($positions as $position){
            RecruiterPosition::create([
                'name' => $position,
            ]);

        }
    }
}
