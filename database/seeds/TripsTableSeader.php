<?php

use App\Trip;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TripsTableSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<100; $i++){
            $newTrip = new Trip();
            $newTrip->from_date = $faker->dateTimeBetween('30 days', '2 years');
            $newTrip->duration = $faker->numberBetween(1,20);
            $newTrip->city = $faker->city();
            $newTrip->price = $faker->randomFloat(2,1,9999);
            $newTrip->save();

        }
    }
}
