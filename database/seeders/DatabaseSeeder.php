<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('company')->insert([
            [
                'name' => 'Tech Solutions Inc.',
                'email' => 'TechSolutions@gmail.com']
        ]);

        DB::table('internship_position')->insert([
            [
                'name' => 'Software Development Intern',
                'description' => 'Assist in developing and maintaining software applications.',
                'available' => true,
                'company_id' => 1
            ],
            [
                'name' => 'Data Analysis Intern',
                'description' => 'Support data analysis and reporting tasks.',
                'available' => true,
                'company_id' => 1
            ],
            [
                'name' => 'Marketing Intern',
                'description' => 'Help with marketing campaigns and social media management.',
                'available' => true,
                'company_id' => 1
            ]
        ]);
    }
}
