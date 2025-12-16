<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        // create 10 fake teachers
        Teacher::factory()->count(10)->create();

        // or create a specific one
        Teacher::create([
            'full_name' => 'Moeun Sok',
            'tel' => '012345678',
        ]);
    }
}
