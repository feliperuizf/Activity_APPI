<?php

use Illuminate\Database\Seeder;
use App\Workers;
use Faker\Factory as Faker;


class workersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<=50; $i++){
            $Trabajador=Workers::create([
                'name'=> $faker->name,
                'lastname'=> $faker->lastname,
                'email'=> $faker->email,
                'Telephone'=> $faker->unixTime,
                'adress'=> $faker->streetAddress,
                'id_availabilities_status'=> 1
            ]);
        }
    }
}
