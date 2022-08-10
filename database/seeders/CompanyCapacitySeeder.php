<?php

namespace Database\Seeders;

use App\Models\CompanyCapacity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyCapacitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            '1-4',
            '5-10',
            '11-25',
            '26-50',
            '51-100',
            '101-200',
            '201-500',
            '501-1000',
            '1000+',
        ];

        foreach ($data as $capacity){
            CompanyCapacity::create([
                'capacity' => $capacity
            ]);
        }
    }
}
