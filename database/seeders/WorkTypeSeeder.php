<?php

namespace Database\Seeders;

use App\Models\WorkType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Full-Time',
            'Part-Time',
            'Remote',
            'Hybrid',
            'Contract',
            'Intern'
        ];

        foreach ($data as $workType){
            WorkType::create([
               'name' => $workType
            ]);
        }
    }
}
