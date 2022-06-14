<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('prezzo', 6,2);
            $table->string('destinazione', 100);
            $table->date('data_partenza');
            $table->tinyInteger('numero_giorni');
            $table->tinyInteger('numero_notti');
            $table->string('tipo_di_camera',100)->nullable();
            $table->boolean('volo_incluso')->default(true)->nullable();
            $table->text('descrizione')->nullable();
            $table->string('immagine')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travel');
    }
}
