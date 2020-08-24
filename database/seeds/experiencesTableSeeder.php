<?php

use Illuminate\Database\Seeder;
use App\Experiences;
use Faker\Factory as Faker;

class experiencesTableSeeder extends Seeder
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

        for($i=0; $i<=150; $i++){
            $Trabajador=Experiences::create([
                'company_name'=> $faker->company,
                'activities_executed'=> $faker->paragraph,
                'fecha_inicio_contrato'=> $faker->date,
                'fecha_fin_contrato'=> $faker->date
            ]);
        }

    }
}
