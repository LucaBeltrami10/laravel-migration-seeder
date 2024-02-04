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

        ];

        foreach ($trains as $train) {
            $trainClass = new Train();

            $trainClass->id = $train['id'];
            $trainClass->company = $train['company'];
            $trainClass->departure_station = $train['departure_station'];
            $trainClass->arrival_station = $train['arrival_station'];
            $trainClass->departure_time = $train['departure_time'];
            $trainClass->arrival_time = $train['arrival_time'];
            $trainClass->train_code = $train['train_code'];
            $trainClass->number_of_carriages = $train['number_of_carriages'];
            $trainClass->in_time = $train['in_time'];
            $trainClass->deleted = $train['deleted'];
            $trainClass->save();
        }
    }
}
