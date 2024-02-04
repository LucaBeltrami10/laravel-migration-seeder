<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{


    public function run(Faker $faker): void
    {
        /* $trains = [
            [
                'id' => 4,
                'company' => 'trenitalia',
                'departure_station' => 'bologna',
                'arrival_station' => 'bari',
                'departure_time' => '00:00:00',
                'arrival_time' => '00:01:01',
                'train_code' => 12345,
                'number_of_carriages' => 1234,
                'in_time' => 1,
                'deleted' => 0,
            ],
            [
                'id' => 5,
                'company' => 'trenitalia',
                'departure_station' => 'mantova',
                'arrival_station' => 'livorno',
                'departure_time' => '00:00:00',
                'arrival_time' => '00:01:01',
                'train_code' => 12765,
                'number_of_carriages' => 1234,
                'in_time' => 1,
                'deleted' => 0,
            ],
            [
                'id' => 6,
                'company' => 'trenitalia',
                'departure_station' => 'terni',
                'arrival_station' => 'salerno',
                'departure_time' => '00:00:00',
                'arrival_time' => '00:01:01',
                'train_code' => 12315,
                'number_of_carriages' => 1234,
                'in_time' => 1,
                'deleted' => 0,
            ],

        ]; */

        for ($i = 0; $i < 30; $i++) {
            $trainClass = new Train();

            $trainClass->id = $faker->numberBetween($min = 6, $max = 1000);
            $trainClass->company = $faker->word($nb = 5);
            $trainClass->departure_station = $faker->word($nb = 7);
            $trainClass->arrival_station = $faker->word($nb = 8);
            $trainClass->departure_time = $faker->time();
            $trainClass->arrival_time = $faker->time();
            $trainClass->train_code = $faker->randomNumber($nbDigits = 5);
            $trainClass->number_of_carriages = $faker->randomDigit;
            $trainClass->in_time = $faker->boolean;
            $trainClass->deleted = $faker->boolean;
            $trainClass->save();
        }
    }
}
