<?php

namespace Database\Seeders;

use App\Models\Applicant;
use App\Models\ApplicantEducation;
use App\Models\ApplicantExperience;
use App\Models\ApplicantSkill;
use App\Models\Resume;
use App\Models\User;
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
        $aboutMe = 'Solution-driven Software Engineer adept at contributing to a highly Php collaborative work environment, finding solutions and determining
                        customer satisfaction.
                        Proven Experience developing business and consumer-focused applications using Php, 
                        Laravel, Flutter, JavaScript, Firebase, Nodejs, REST API, API documentation, MongoDB, MySQL, 
                        and MSSQL SERVER. Built products for web and mobile applications for users over 4+ years, 
                        meeting the highest standards, for web applications, user experience, best practices and speed with integrations of third-party applications.';

        if(!$user){

            $dev = User::create([
                'email'     => 'ugwukelvintochukwu@gmail.com',
                'role'      => 'applicant',
                'is_banned' => false,
                'password'  => Hash::make('password'),
            ]);

            $applicant = Applicant::create([
                'user_id' => $dev->id,
                'last_name' => 'Ugwu',
                'first_name' => 'Tochukwu',
                'phone'=> '+2348036037038',
               // 'address'=> '8 Oba Fatai Aileru Street, Lagos',
                'dob' => '1991-01-24',
                'gender'=> 'Male',
                'state_id'=> 25,
                'country_id'=> 1,


            ]);

            $resume = Resume::create([
                'applicant_id'        => $applicant->id,
                'title'               => 'Software Engineer',
                'job_function_id'     => 24,
                'about_me'            => $aboutMe,
                'doc'                 => NULL,
                'passport'            => NULL
            ]);

            ApplicantEducation::create([
                'resume_id' => $resume->id,
                'institution'=>'Aptech Computer Education',
                'qualification'=>'Advanced Diploma in Software Engineering',
                'started_at'=> '2017-01-07',
                'graduated_at'=>'2019-01-09',
            ]);


            ApplicantExperience::create([
                'resume_id' => $resume->id,
                'employer' => 'Sawtrax Limited',
                'job_title' => 'Full Stack Developer',
                'started_at' => '2020-11-11',
                'location' => 'Lagos, NG',

                'responsibilities' => "Built and currently supporting an e-commerce store.
                        Engaging in Technical Support for client
                        Supporting a billing system for Glo Ng (Vanilla PHP and Linux
                        Server) Firebase Leading an Architectural and Product designs
                        Implementing UI and usability changes based on customers feedback"
            ]);
            ApplicantExperience::create([
                'resume_id' => $resume->id,
                'employer' => 'Quick Credit Nigeria Limited',
                'job_title' => 'Full Stack Developer',
                'started_at' => '2019-01-06',
                'resigned_at' => '2020-05-11',
                'location' => 'Enugu, NG',
                'responsibilities' => "Developed and Supported a Loan Management System using laravel with a team of two(2)
                                    Monitored and manage the window Server, and MSSQL SERVER Engage in Technical Support for clients Customer Support Managed the Customers record."
            ]);

            ApplicantSkill::create([
                'resume_id' => $resume->id,
                'name' => 'Php'
            ]);
            ApplicantSkill::create([
                'resume_id' => $resume->id,
                'name' => 'Laravel'
            ]);
            ApplicantSkill::create([
                'resume_id' => $resume->id,
                'name' => 'Flutter'
            ]);


        }
    }
}
