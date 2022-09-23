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
        $user = User::where('email','tochukwu@sawtraxltd.com')->first();

        if(!$user){

            $admin = User::create([
                'email'     => 'tochukwu@sawtraxltd.com',
                'role'      => 'admin',
                'is_banned' => false,
                'password'  => Hash::make('password'),
            ]);

            Admin::create([
                'user_id' => $admin->id,
                'last_name' => 'Sawtrax',
                'first_name' => 'Tochukwu',
                'phone'=> '+2348036037038',
                'address'=> '55a Lafia Street',
                'dob' => '1991-01-24',
                'gender'=> 'Male',
                'created_by'=>$admin->id,

            ]);
        }
    }
}
