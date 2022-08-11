<?php

namespace Database\Seeders;

use App\Models\Applicant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','ugwukelvintochukwu@gmail.com')->first();

        if(!$user){

            $dev = User::create([
                'email'     => 'ugwukelvintochukwu@gmail.com',
                'role'      => 'applicant',
                'is_banned' => false,
                'password'  => Hash::make('password'),
            ]);

            Applicant::create([
                'user_id' => $dev->id,
                'last_name' => 'Ugwu',
                'first_name' => 'Tochukwu',
                'phone'=> '+2348036037038',
                'address'=> '8 Oba Fatai Aileru Street, Lagos',
                'dob' => '1991-01-24',
                'gender'=> 'Male',
                'created_by'=>$dev->id,

            ]);
        }
    }
}
