<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $new_train = new Train();
        $new_train->company = $faker->company;
        $new_train->departure_station = $faker->departure_station;
        $new_train->department_time = $faker->department_time;
        $new_train->arrival_time = $faker->arrival_time;
        $new_train->train_code = $faker->train_code;
        $new_train->carriage_number = $faker->carriage_number;
        $new_train->on_time = $faker->on_time;
        $new_train->deleted = $faker->deleted;
        $new_train->save();
    }
}
