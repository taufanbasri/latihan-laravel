<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student1 = \App\Student::create(['name' => 'Joni', 'date_of_birth' => '1990-08-14', 'gender' => 'm']);
        $student2 = \App\Student::create(['name' => 'Dadang', 'date_of_birth' => '1987-12-04', 'gender' => 'm']);
        $student3 = \App\Student::create(['name' => 'Yuni', 'date_of_birth' => '1992-11-14', 'gender' => 'f']);

        $course_student1 = DB::table('course_student')->insert(['course_id' => 1, 'student_id' => 1]);
        $course_student1 = DB::table('course_student')->insert(['course_id' => 2, 'student_id' => 1]);
        $course_student1 = DB::table('course_student')->insert(['course_id' => 3, 'student_id' => 1]);
        $course_student1 = DB::table('course_student')->insert(['course_id' => 1, 'student_id' => 2]);
        $course_student1 = DB::table('course_student')->insert(['course_id' => 2, 'student_id' => 2]);
        $course_student1 = DB::table('course_student')->insert(['course_id' => 3, 'student_id' => 3]);
    }
}
