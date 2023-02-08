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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->longText('periodo',15);
            $table->longText('carrera',350);
            $table->string('nivel',250);
            $table->longText('asignatura',450); 
            $table->longText('paralelo',50);
            $table->string('jornada',50);
            $table->string('cedula',20) ;
            $table->longText('nombre_completo',350);
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
        Schema::dropIfExists('docentes');
    }
};
