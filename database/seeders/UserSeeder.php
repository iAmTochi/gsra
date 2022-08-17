<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $checkUser = User::where('email','ugwukelvintochukwu@gmail.com')->first();

        if(!$checkUser){

            $user = User::create([
                'email'     => 'ugwukelvintochukwu@gmail.com',
                'role'      => 'admin',
                'is_banned' => false,
                'password'  => Hash::make('password'),
            ]);

            Admin::create([
                'user_id' => $user->id,
                'last_name' => 'Ugwu',
                'first_name' => 'Tochukwu',
                'phone'=> '+2348036037038',
                'address'=> '8 Oba Fatai Aileru Street, Lagos',
                'dob' => '1991-01-24',
                'gender'=> 'Male',
                'created_by'=>$user->id,

            ]);
        }
    }
}
