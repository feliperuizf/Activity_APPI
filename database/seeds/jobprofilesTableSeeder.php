<?php

use Illuminate\Database\Seeder;
use App\Jobprofiles;
use Faker\Factory as Faker;

class jobprofilesTableSeeder extends Seeder
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
        for($i=0; $i<=50; $i++){
            $contador=$contador+1;
            $Trabajador=Jobprofiles::create([
                'profiles'=> $faker->paragraph,
                'workers_id'=> $contador
            ]);
        }
    }
}
