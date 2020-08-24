<?php

use Illuminate\Database\Seeder;
use App\Studiesworkers;
use Faker\Factory as Faker;

class studiesworkersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $contador=0;

        for($i=1; $i<=200; $i++){
            $contador= $contador+1;

            $Trabajador=Studiesworkers::create([
                'job_profiles_id'=> $contador,
                'studies_id'=> $i
            ]);

            if($contador==51||$contador==101||$contador==151){
                $contador=0;
            }
        }
    }
}
