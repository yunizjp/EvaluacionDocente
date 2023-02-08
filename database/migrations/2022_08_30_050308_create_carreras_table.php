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
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10);
            $table->string('descripcion',250);
            $table->timestamps();
        });

        DB::table("carreras")
            ->insert([
            "codigo" => "TSADM-01",
            "descripcion" => "Tecnología en administración"]);-        
        DB::table("carreras")
        ->insert([
            "codigo" => "TSCON-01",
            "descripcion" => "Tecnología en Contabilidad"]);        
        DB::table("carreras")
        ->insert([
            "codigo" => "TSDES-01",
            "descripcion" => "Tecnología en Desarrollo de Software"]);        
        DB::table("carreras")
        ->insert([
            "codigo" => "TSELE-01",
            "descripcion" => "Tecnología en Electricidad"]);
        DB::table("carreras")
        ->insert([
            "codigo" => "TSTRO-01",
            "descripcion" => "Tecnología en Electrónica"]);        
        DB::table("carreras")
        ->insert([
            "codigo" => "TSMEC-01",
            "descripcion" => "Tecnología en Mecánica Automotriz"]);        
        DB::table("carreras")
        ->insert([
            "codigo" => "TSAGR-01",
            "descripcion" => "Tecnología en Producción Agricola"]);        
        DB::table("carreras")
        ->insert([
            "codigo" => "TSPEC-01",
            "descripcion" => "Tecnología en Producción Pecuaria"]);
        DB::table("carreras")
        ->insert([
            "codigo" => "TSADM-01",
            "descripcion" => "Tecnología en administración"]);
        DB::table("carreras")
        ->insert([
            "codigo" => "TSSEG-01",
            "descripcion" => "Tecnología en Seguridad Ciudadana y Orden Público",
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carreras');
    }
};
