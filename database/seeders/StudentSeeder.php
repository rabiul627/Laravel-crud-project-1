<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
      $json = File::get('database\json\json.js');
      $students = collect(json_decode($json));

      $students->each(function($student){
         student::create([
            "name" => $student->name,
            "email" => $student->email,
            "city" => $student->city,
            "age" => $student->age,
            "phone" => $student->phone,
         ]);
      });

      // student::factory()->count(7)->create();

    }
}
