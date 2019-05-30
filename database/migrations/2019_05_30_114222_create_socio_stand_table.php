<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocioStandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socio_stand', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('socio_id');
            $table->unsignedInteger('stand_id');
            $table->date('fecha_inscripcion');
            $table->mediumText('observacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socio_stand');
    }
}
