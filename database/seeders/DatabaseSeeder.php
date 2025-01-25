<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // student::factory()->count(10)->create();
        // Call the studentSeeder
        $this->call([
            StudentSeeder::class
        ]);
    }
}
