<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','kedesto@gmail.com')->first();

        if(!$user){

            $dev = User::create([
                'email'     => 'kedesto@gmail.com',
                'role'      => 'employer',
                'is_banned' => false,
                'password'  => Hash::make('password'),
            ]);

            Admin::create([
                'user_id' => $dev->id,
                'last_name' => 'Ugwu',
                'first_name' => 'Godwin',
                'phone'=> '+2348030819626',
                'address'=> '8 Oba Fatai Aileru Street, Lagos',
                'dob' => '1991-01-24',
                'gender'=> 'Male',
                'created_by'=>$dev->id,

            ]);
        }
    }
}
