<?php

namespace Database\Seeders;

use App\Models\Recruiter;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RecruiterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','employer@gmail.com')->first();

        if(!$user){

            $employer = User::create([
                'email'     => 'employer@gmail.com',
                'role'      => 'employer',
                'is_banned' => false,
                'password'  => Hash::make('password'),
            ]);

            Recruiter::create([
                'user_id' => $employer->id,
                'last_name' => 'Patience',
                'first_name' => 'Doe',
                'recruiter_position_id' =>  2 ,
                'company_name' => 'Sawtrax Limited',
                'industry_id' => 12,
                'company_capacity_id' => 5,
                'notification_email' => 'employer@sawtraxltd.com',

                'phone'=> '+2348000000001',
                'address'=> 'Ox Street, Lagos',
                'country_id'=> 1,


            ]);
        }
    }
}
