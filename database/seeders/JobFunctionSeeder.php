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
            'Advertising, Media & Communications',
            'Agriculture, Fishing & Forestry',
            'Automotive & Aviation',
            'Banking, Finance & Insurance',
            'Construction',
            'Education',
            'Energy & Utilities',
            'Enforcement & Security',
            'Entertainment, Events & Sport',
            'Healthcare',
            'Hospitality & Hotel',
            'IT & Telecoms',
            'Law & Compliance',
            'Manufacturing & Warehousing',
            'Mining, Energy & Metals',
            'NGO, NPO & Charity',
            'Real Estate',
            'Recruitment',
            'Retail, Fashion & FMCG',
            'Shipping & Logistics',
            'Tourism & Travel',
        ];

        foreach ($data as $jobFunction){
            JobFunction::create([
                'name' => $jobFunction,
                'slug' => Str::slug($jobFunction)
            ]);

        }
    }
}
