<?php

namespace Database\Seeders;

use App\Models\Salary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Less than 75,000',
            '75,000 - 150,000',
            '150,000 - 250,000',
            '250,000 - 400,000',
            '400,000 - 600,000',
            '600,000 - 900,000',
            '900,000 - 1,200,000',
            '1,200,000 - 1,500,000',
            '1,500,000 - 2,000,000',
            '2,000,000 - 3,000,000',
            '3,000,000 - 4,000,000',
            '4,000,000 - 5,000,000',
            'Above 5,000,000',
            'Commission Only'
        ];

        foreach ($data as $salary){
            Salary::create([
                'range' => $salary,
            ]);

        }
    }
}
