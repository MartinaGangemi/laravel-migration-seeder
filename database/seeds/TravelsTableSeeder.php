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
        $travels = config(db.travels);
       

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
