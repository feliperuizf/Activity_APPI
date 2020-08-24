<?php

use Illuminate\Database\Seeder;
use App\Studies;
use Faker\Factory as Faker;


class studiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<=200; $i++){
            $Trabajador=Studies::create([
                'academy_tittle'=> $faker->bs,
                'college'=> $faker->catchPhrase,
                'year_finalization'=> $faker->date,
                'place'=> $faker->city
            ]);
        }
    }
}
