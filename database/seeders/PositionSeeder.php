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
            ['name' => 'Accountant', 'description' => 'Responsible for financial records'],
            ['name' => 'Operations Manager', 'description' => 'Oversees daily operations'],
            ['name' => 'HR Specialist', 'description' => 'Manages HR activities'],
            ['name' => 'Marketing Coordinator', 'description' => 'Coordinates marketing campaigns'],
            ['name' => 'Sales Executive', 'description' => 'Handles sales activities'],
            ['name' => 'Customer Support Representative', 'description' => 'Provides customer support'],
            ['name' => 'IT Technician', 'description' => 'Handles IT issues'],
            ['name' => 'Graphic Designer', 'description' => 'Creates visual concepts'],
            ['name' => 'Business Analyst', 'description' => 'Analyzes business processes'],
            ['name' => 'QA Engineer', 'description' => 'Ensures product quality'],
        ];

        foreach ($positions as $positionData) {
            Position::create([
                'department_id' => random_int(1, 10),
                'name' => $positionData['name'],
                'description' => $positionData['description'],
            ]);
        }
    }
}
