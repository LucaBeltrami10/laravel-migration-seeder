<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{


    public function run(): void
    {
        $trains = [
            [
                'id' => 1,
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
                'id' => 1,
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
                'id' => 1,
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

        ];

        foreach ($trains as $treno) {
            $TrainClass = new Train();
        }
    }
}
