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
        Schema::create('MenuComida', function (Blueprint $table) {
            $table->id();
            $table->string('Crema');
            $table->string('Pastas');
            $table->string('Guarnicion');
            $table->string('Platillo');
            $table->string('Bebida');
            $table->integer('Precio');
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
        Schema::dropIfExists('MenuComida');

    }
};
