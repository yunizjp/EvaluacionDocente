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
        Schema::create('paralelos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10);
            $table->string('descripcion',30);
            $table->timestamps();
        });

        DB::table("paralelos")
        ->insert([
            "codigo" => "PARL-01",
            "descripcion" => "PARALELO A",
        ]);
        DB::table("paralelos")
        ->insert([
            "codigo" => "PARL-02",
            "descripcion" => "PARALELO B",
        ]);
        DB::table("paralelos")
        ->insert([
            "codigo" => "PARL-03",
            "descripcion" => "PARALELO C",
        ]);
        DB::table("paralelos")
        ->insert([
            "codigo" => "PARL-04",
            "descripcion" => "PARALELO D",
        ]);
        DB::table("paralelos")
        ->insert([
            "codigo" => "PARL-05",
            "descripcion" => "PARALELO E",
        ]);
        DB::table("paralelos")
        ->insert([
            "codigo" => "PARL-06",
            "descripcion" => "PARALELO F",
        ]);
        DB::table("paralelos")
        ->insert([
            "codigo" => "PARL-07",
            "descripcion" => "PARALELO G",
        ]);
        DB::table("paralelos")
        ->insert([
            "codigo" => "PARL-08",
            "descripcion" => "PARALELO H",
        ]);
        DB::table("paralelos")
        ->insert([
            "codigo" => "PARL-09",
            "descripcion" => "PARALELO I",
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paralelos');
    }
};
