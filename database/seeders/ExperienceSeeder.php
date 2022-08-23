<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'No Experience/Less than 1 year',
            '1 year',
            '2 years',
            '3 years',
            '4 years',
            '5 years',
            '6 years',
            '7 years',
            '8 years',
            '9 years',
            '10 years',
            '11 years',
            '12 years',
            '13 years',
            '14 years',
            '15 years',
            '16 years',
            '17 years',
            '18 years',
            '19 years',
            '20 years',
            'More than 20 years',
        ];

        foreach ($data as $experience){
            Experience::create([
                'year' => $experience,
            ]);

        }
    }
}
