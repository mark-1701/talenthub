<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            ['name' => 'Accountant', 'department' => 'Finance', 'description' => 'Responsible for financial records'],
            ['name' => 'Operations Manager', 'department' => 'Operations', 'description' => 'Oversees daily operations'],
            ['name' => 'HR Specialist', 'department' => 'Human Resources', 'description' => 'Manages HR activities'],
            ['name' => 'Marketing Coordinator', 'department' => 'Marketing', 'description' => 'Coordinates marketing campaigns'],
            ['name' => 'Sales Executive', 'department' => 'Sales', 'description' => 'Handles sales activities'],
            ['name' => 'Customer Support Representative', 'department' => 'Customer Service', 'description' => 'Provides customer support'],
            ['name' => 'IT Technician', 'department' => 'IT', 'description' => 'Handles IT issues'],
            ['name' => 'Graphic Designer', 'department' => 'Design', 'description' => 'Creates visual concepts'],
            ['name' => 'Business Analyst', 'department' => 'Business Analysis', 'description' => 'Analyzes business processes'],
            ['name' => 'QA Engineer', 'department' => 'Quality Assurance', 'description' => 'Ensures product quality'],
        ];

        foreach ($positions as $positionData) {
            Position::create([
                'name' => $positionData['name'],
                'department' => $positionData['department'],
                'description' => $positionData['description'],
            ]);
        }
    }
}
