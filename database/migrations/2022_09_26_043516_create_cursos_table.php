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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10);
            $table->string('descripcion',30);
            $table->timestamps();
        });

        DB::table("cursos")
        ->insert([
            "codigo" => "CUR-01",
            "descripcion" => "PRIMER CURSO",
        ]);
        DB::table("cursos")
        ->insert([
            "codigo" => "CUR-02",
            "descripcion" => "SEGUNDO CURSO",
        ]);
        DB::table("cursos")
        ->insert([
            "codigo" => "CUR-03",
            "descripcion" => "TERCER CURSO",
        ]);
        DB::table("cursos")
        ->insert([
            "codigo" => "CUR-04",
            "descripcion" => "CUARTO CURSO",
        ]);
        DB::table("cursos")
        ->insert([
            "codigo" => "CUR-05",
            "descripcion" => "QUINTO CURSO",
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descripcion');
    }
};
