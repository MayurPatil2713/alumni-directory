<?php

namespace Database\Seeders;

use App\Models\Alumni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumniSeeder extends Seeder
{
    public function run(): void
    {
        Alumni::create([
            'name' => 'Aarav Sharma',
            'email' => 'aarav@example.com',
            'phone' => '9876543210',
            'batch_year' => 2020,
            'company' => 'Infosys',
            'designation' => 'Software Engineer',
            'city' => 'Bengaluru',
        ]);

        Alumni::create([
            'name' => 'Priya Patel',
            'email' => 'priya@example.com',
            'phone' => '9876543211',
            'batch_year' => 2021,
            'company' => 'TCS',
            'designation' => 'Business Analyst',
            'city' => 'Pune',
        ]);

        Alumni::create([
            'name' => 'Rohan Mehta',
            'email' => 'rohan@example.com',
            'phone' => 'null',
            'batch_year' => 2020,
            'company' => 'Accenture',
            'designation' => 'Cloud Associate',
            'city' => 'Mumbai',
            
        ]);
    }
}
