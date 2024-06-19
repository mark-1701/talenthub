<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            'Finance',
            'Operations',
            'Human Resources',
            'Marketing',
            'Sales',
            'Customer Service',
            'IT',
            'Design',
            'Business Analysis',
            'Quality Assurance',
        ];
        
        foreach ($departments as $key => $departament) {
            Department::create([
                'name' => $departament,
                'description' => 'lorem ipsum'
            ]);
        }
    }
}
