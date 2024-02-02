<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{


    public function run(): void
    {
        $trainsssssss = [
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

        ];

        foreach ($trainsssssss as $treno) {
            $TrainClass = new Train();
        }
    }
}