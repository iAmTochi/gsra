<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(JobFunctionSeeder::class);
        $this->call(IndustrySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(LgaSeeder::class);
        $this->call(AvailabilitySeeder::class);
        $this->call(CompanyCapacitySeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(QualificationSeeder::class);
        $this->call(WorkTypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SalarySeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(JobLevelSeeder::class);
        $this->call(RecruiterPositionSeeder::class);
        $this->call(RecruiterSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
