<?php

use App\Offer;
use App\User;
use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $offer = new Offer();
        $offer->user_id = '2';
        $offer->title = 'Titulo de prueba';
        $offer->description = 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos';
        $offer->photo = 'http://lorempixel.com/400/200/';
        $offer->save();

        $offer = new Offer();
        $offer->user_id = '2';
        $offer->title = 'Titulo de prueba 2';
        $offer->description = 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos';
        $offer->photo = 'http://lorempixel.com/400/200/';
        $offer->save();

        $offer = new Offer();
        $offer->user_id = '2';
        $offer->title = 'Titulo de prueba 3';
        $offer->description = 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos';
        $offer->photo = 'http://lorempixel.com/400/200/';
        $offer->save();


    }
}
