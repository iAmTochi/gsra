<?php

namespace Database\Seeders;

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
        $user = User::where('email','ugwukelvintochukwu@gmail.com')->first();

        if(!$user){

            $dev = User::create([
                'email'     => 'ugwukelvintochukwu@gmail.com',
                'role'      => 'developer',
                'is_banned' => false,
                'password'  => Hash::make('password'),
            ]);
        }
    }
}
