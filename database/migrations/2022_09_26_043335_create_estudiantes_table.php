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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('periodo',15)->nullable();
            $table->longText('carrera',550)->nullable();
            $table->longText('asignatura',550)->nullable();
            $table->string('num_matricula',10)->nullable();
            $table->string('cedula',15)->nullable();
            $table->longText('nombre_completo',600)->nullable();
            $table->string('sexo',10)->nullable();
            $table->longText('correo',200)->nullable();
            $table->string('nivel',25)->nullable();
            $table->string('paralelo',35)->nullable();
            $table->string('jornada',30)->nullable();
            $table->string('estado',30)->nullable();
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
        Schema::dropIfExists('estudiantes');
    }
};
