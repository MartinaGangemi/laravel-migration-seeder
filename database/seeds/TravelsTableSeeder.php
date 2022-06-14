<?php
use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = [
           [
            'price' => 2999,99,
            'destinazione' => 'Tokyo',
            'data_partenza'=> 02/04/2023,
            'numero_giorni'=> 8,
            'numero_notti'=>7,
            'tipo_di_camera'=>'camera doppia',
            'volo_incluso'=> true,
            'descrizione'=> 'lorem ipsum dolor lorem ipsum dolor',
            'immagine' =>'https://www.travel365.it/foto/tempio-sensoji-tokyo-giapponesi-parlano.jpg',
           ]

        ];

        foreach ($travels as $travel){
            $travel= new Travel();
            $travel->price = $travel['price'];
            $travel->destinazione = $travel['destinazione'];
            $travel->data_partenza = $travel['data_partenza'];
            $travel->numero_giorni = $travel['numero_giorni'];
            $travel->numero_notti = $travel['numero_notti'];
            $travel->tipo_di_camera = $travel['tipo_di_camera'];
            $travel->volo_incluso = $travel['volo_incluso'];
            $travel->descrizione = $travel['descrizione'];
            $travel->immagine = $travel['immagine'];
            $travel->save();
        }
    }
}
