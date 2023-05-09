<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)

    {
        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1day', '+3 days');
            $newTrain->arrival_time = Carbon::parse($newTrain->departure_time)->addHours(rand(1,12));
            $newTrain->departure_platform = $faker->numberBetween(1, 10);
            $newTrain->arrival_platform = $faker->numberBetween(1, 10);
            $newTrain->company = $faker->randomElement(['Trenitalia', 'Trenord', 'Italo', 'TGV']);;
            $newTrain->train_code = $faker->bothify('???-####');;
            $newTrain->wagons = $faker->numberBetween(2, 15);
            $newTrain->delay = $faker->numberBetween(0, 1);
            $newTrain->cancel = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
