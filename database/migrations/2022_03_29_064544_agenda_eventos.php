<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('AgendaEventos', function (Blueprint $table) {
            $table->id();
            $table->string('Año');
            $table->string('Mes');
            $table->string('Dia');
            $table->dateTime('HoraInicio');
            $table->dateTime('HoraFin');
            $table->unsignedBigInteger('ClienteId');
            $table->unsignedBigInteger('MenuComidaId');
            $table->unsignedBigInteger('TipoEventoId');
            $table->foreign('ClienteId')->references('id')->on('Cliente');
            $table->foreign('MenuComidaId')->references('id')->on('MenuComida');
            $table->foreign('TipoEventoId')->references('id')->on('TipoEvento');
            $table->integer('NumeroInvitados');
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
        //
        Schema::dropIfExists('AgendaEventos');

    }
};
