<?php

use Illuminate\Database\Seeder;
use App\statusAvailability;
use Faker\Factory as Faker;

class statusAvailabilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        $EstadoDisponibilidad=statusAvailability::create([
            'status'=>'Disponible'
        ]);

        $EstadoDisponibilidad=statusAvailability::create([
            'status'=>'No Disponible'
        ]);


    }
}
