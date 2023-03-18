<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [['teacher_name' => 'Vanh', 'teacher_email' => 'Vanh@gmail.com', 'teacher_gender' => 'Female', 
        'teacher_image' => 'images/vanh.png'],
        ['teacher_name' => 'Linh', 'teacher_email' => 'Linh@gmail.com', 'teacher_gender' => 'Female', 
        'teacher_image' => 'images/linh.png']];

        DB::table('teachers')->insert($teachers);
    }
}
