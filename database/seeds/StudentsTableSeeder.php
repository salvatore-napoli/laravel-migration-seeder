<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $newStudent = new Student();

        $newStudent->name = $faker->firstName();
        $newStudent->surname = $faker->lastName();
        $newStudent->class = $faker->randomDigit(1) . substr($faker->name(), 0, 1);
        $newStudent->added_column = $faker->text();

        $newStudent->save();
      }
    }
}
