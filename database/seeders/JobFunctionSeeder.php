<?php

namespace Database\Seeders;

use App\Models\JobFunction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JobFunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Accounting, Auditing & Finance',
            'Admin & Office',
            'Building & Architecture',
            'Community & Social Services',
            'Consulting & Strategy',
            'Creative & Design',
            'Customer Service & Support',
            'Driver & Transport Services',
            'Engineering & Technology',
            'Estate Agents & Property Management',
            'arming & Agriculture',
            'Food Services & Catering',
            'Health & Safety',
            'Hospitality & Leisure',
            'Human Resources',
            'Legal Services',
            'Management & Business Development',
            'Marketing & Communications',
            'Medical & Pharmaceutical',
            'Product & Project Management',
            'Quality Control & Assurance',
            'Research, Teaching & Training',
            'Sales',
            'Software & Data',
            'Supply Chain & Procurement',
            'Trades & Services'
        ];

        foreach ($data as $jobFunction){
            JobFunction::create([
                'name' => $jobFunction,
                'slug' => Str::slug($jobFunction)
            ]);

        }
    }
}
