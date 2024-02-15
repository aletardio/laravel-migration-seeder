<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

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
            $new_train = new Train();
            $new_train->company = $faker->randomElement(['Trenitalia', 'Frecciarossa', 'Frecciargento', 'Italo', 'Eurocity', 'FlixTrain']);
            $new_train->departure_station = $faker->randomElement(['Stazione Roma Termini', 'Stazione Bologna Centrale', 'Stazione Napoli Centrale', 'Stazione Milano Centrale', 'Stazione Roma Tiburtina', 'Stazione Torino Porta Nuova', 'Stazione Firenze Santa Maria Novella', 'Stazione Venezia Santa Lucia']);
            $new_train->arrival_station = $faker->randomElement(['Stazione Roma Termini', 'Stazione Bologna Centrale', 'Stazione Napoli Centrale', 'Stazione Milano Centrale', 'Stazione Roma Tiburtina', 'Stazione Torino Porta Nuova', 'Stazione Firenze Santa Maria Novella', 'Stazione Venezia Santa Lucia']);
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->code_train = $faker->numberBetween(100, 300);
            $new_train->number_coaches = $faker->numberBetween(20, 100);
            $new_train->on_time = $faker->boolean();
            $new_train->delete = $faker->boolean();
            $new_train->save();
        }
    }
}
