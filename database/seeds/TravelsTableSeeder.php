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
            'prezzo' => 2999,99,
            'destinazione' => 'Tokyo',
            'data_partenza'=> '2002-05-21',
            'numero_giorni'=> 8,
            'numero_notti'=>7,
            'tipo_di_camera'=>'camera doppia',
            'volo_incluso'=> true,
            'descrizione'=> 'lorem ipsum dolor lorem ipsum dolor',
            'immagine' =>'https://www.travel365.it/foto/tempio-sensoji-tokyo-giapponesi-parlano.jpg',
           ]
        ];

        foreach ($travels as $travel){
            $object_travel = new Travel();
            $object_travel->prezzo = $travel['prezzo'];
            $object_travel->destinazione = $travel['destinazione'];
            $object_travel->data_partenza = $travel['data_partenza'];
            $object_travel->numero_giorni = $travel['numero_giorni'];
            $object_travel->numero_notti = $travel['numero_notti'];
            $object_travel->tipo_di_camera = $travel['tipo_di_camera'];
            $object_travel->volo_incluso = $travel['volo_incluso'];
            $object_travel->descrizione = $travel['descrizione'];
            $object_travel->immagine = $travel['immagine'];
            $object_travel->save();
        }
    }
}
