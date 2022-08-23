<?php

namespace Database\Seeders;

use App\Models\JobLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Graduate trainee',
            'Volunteer, internship',
            'Entry level',
            'Mid level',
            'Senior level',
            'Management level',
            'Executive level',
            'No Experience',
        ];

        foreach ($data as $jobLevel){
            JobLevel::create([
                'name' => $jobLevel,
            ]);

        }
    }
}
