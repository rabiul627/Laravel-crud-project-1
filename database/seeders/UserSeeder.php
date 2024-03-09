<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //    $json = File::get('database\json\UserJson.js');
    //    $students = collect(json_decode($json));
       
    //    $students->each(function($student){
    //         user::create([
    //             "name" => $student->name,
    //             "email" => $student->email,
    //             "phone" => $student->phone
    //         ]);
    //    });

     user::factory(5)->create();

    }
}
