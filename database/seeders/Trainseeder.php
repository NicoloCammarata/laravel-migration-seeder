<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//models

use App\Models\Train;



class Trainseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 10; $i++){

            Train::truncate();
            $train = new Train();
            $train->company = fake()->company() ;
            $train->departure_station = 'Porto';
            $train->arrival_station = 'Latisana';
            $train->departure_time = '15:00';
            $train->arrival_time = '16:00';
            $train->code = '115433';
            $train->carriages_num = '6';
            $train->on_time = true;
            $train->canceled = false;
        }
        
    }
}
