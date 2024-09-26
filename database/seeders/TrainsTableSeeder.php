<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train; 

//utilizzo Faker
use Faker\Generator as Faker;

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
        $train = new Train();
        $train->azienda = $faker->company();
        $train->stazione_partenza = $faker->city();
        $train->stazione_arrivo = $faker->city();
        
        // Genera l'orario di partenza come oggetto DateTime
        $oraio_partenza = $faker->dateTimeBetween('now', '+1 week');
        
        // Clona l'orario di partenza e aggiungi un intervallo casuale tra 1 e 5 ore
        $oraio_arrivo = (clone $oraio_partenza)->modify('+' . rand(1, 5) . ' hours');

        // Imposta i valori in formato stringa
        $train->oraio_partenza = $oraio_partenza->format('Y-m-d H:i:s'); 
        $train->oraio_arrivo = $oraio_arrivo->format('Y-m-d H:i:s');      
        
        $train->codice_treno = $faker->isbn10();
        $train->numero_carrozze = $faker->randomDigit();
        $train->in_orario = $faker->boolean();
        $train->cancellato = $faker->boolean();

        $train->save();
    }
}
}
