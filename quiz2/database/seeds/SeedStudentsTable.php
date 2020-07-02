<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeedStudentsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'student_number' => '611044',
            'first_name' => 'Inna',
            'last_name' => 'Soldatkina',
            'image' => 'inna.jpg',
            'email' => 'i-soldatkina@webmail.uwinnipeg.ca',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('students')->insert([
            'student_number' => '611046',
            'first_name' => 'Mykita',
            'last_name' => 'Gazul',
            'image' => 'nick.png',
            'email' => 'm-gazul@webmail.uwinnipeg.ca',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('students')->insert([
            'student_number' => '611047',
            'first_name' => 'Jasreen',
            'last_name' => 'Kaur',
            'image' => 'jasreen.jpg',
            'email' => 'j-kaur@webmail.uwinnipeg.ca',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('students')->insert([
            'student_number' => '611043',
            'first_name' => 'Milad',
            'last_name' => 'Darani',
            'image' => 'milad.jpg',
            'email' => 'm-darani@webmail.uwinnipeg.ca',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('students')->insert([
            'student_number' => '611040',
            'first_name' => 'Dawn',
            'last_name' => 'Baker',
            'image' => 'dawn.jpg',
            'email' => 'd-baker@webmail.uwinnipeg.ca',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
