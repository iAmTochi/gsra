<?php

namespace Database\Seeders;

use App\Models\Qualification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Degree',
            'Diploma',
            'High School(S.S.C.E)',
            'HND',
            'MBA / MSc',
            'MBBS',
            'MPhil / PhD',
            'N.C.E',
            'OND',
            'Others',
            'Vocational'
            ];

        foreach ($data as $qualification){
            Qualification::create([
                'name' => $qualification
            ]);
        }
    }
}
