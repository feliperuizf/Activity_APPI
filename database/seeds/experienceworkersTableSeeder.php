<?php

use Illuminate\Database\Seeder;
use App\Experienceworkers;
use Faker\Factory as Faker;

class experienceworkersTableSeeder extends Seeder
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

        for($i=1; $i<=150; $i++){
            $contador= $contador+1;

            $Trabajador=Experienceworkers::create([
                'workers_id'=> $contador,
                'experience_id'=> $i
            ]);

            if($contador==3){
                $contador=0;
            }

        }
    }
}
