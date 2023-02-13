<?php

namespace Database\Seeders;


use App\Models\Industry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $industries = [
            'Domestic (House help, Nanny, Driver, Cook, etc)',
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

        foreach ($industries as $industry){
           Industry::create([
                'name' => $industry,
                'slug' => Str::slug($industry)
            ]);

        }

    }
}
