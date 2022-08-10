<?php

namespace Database\Seeders;

use App\Models\Availability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Immediately',
            '1 Week',
            '2 Weeks',
            '3 Weeks',
            '1 Month',
            '2 Months',
            'More Than 3 Months'
        ];

        foreach ($data as $availability){
            Availability::create([
                'availability' => $availability
            ]);
        }
    }
}
