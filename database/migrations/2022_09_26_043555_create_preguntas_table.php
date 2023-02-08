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
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10);
            $table->string('descripcion',400);
            $table->timestamps();
        });
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-01",
            "descripcion" => "Entregó y presentó el objetivo de la asignatura, los contenidos y plan de clase al incio del periodo académico",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-02",
            "descripcion" => "Expresa con claridad los contenidos de cada unidad de aprendizaje",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-03",
            "descripcion" => "Evidencia conocimiento de los temas tratados",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-04",
            "descripcion" => "La bibliografía sugerida corresponde a los contenidos definidos en el programa",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-05",
            "descripcion" => "Utiliza durante los temas tratados en clases, teorias o ejemplos actuales",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-06",
            "descripcion" => "Resuelve las dudas y problemas planteados por los estudiantes durante la clase",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-07",
            "descripcion" => "Distribuye adecuadamente el tiempo previsto para las actividades académicas",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-08",
            "descripcion" => "Crea ambientes de aprendizaje propicios para el proceso  de enseñanza",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-09",
            "descripcion" => "Realiza actividades que involucra nuestra participación activa",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-10",
            "descripcion" => "Crea espacios para promover el aprendizaje colaborativo (en grupos)",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-11",
            "descripcion" => "Plantea actividades para promover el aprendizaje autónomo",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-12",
            "descripcion" => "Las actividades de evaluacion guardan relación con los objetivos y los contenidos de la asignatura",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-13",
            "descripcion" => "Da a conocer los criterios que utiliza para calificar las actividades académicas",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-14",
            "descripcion" => "Responde inquietudes de los estudiantes cuando entrega las calificaciones de las actividades académicas evaluadas",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-15",
            "descripcion" => "Cumple con la entrega a tiempo de los resultados de las evaluaciones a estudiantes y registro de notas en secretaría",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-16",
            "descripcion" => "Promueve relaciones de cordialidad y respeto entre los estudiantes, considerando inclusive la diversidad",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-17",
            "descripcion" => "Es cordial y respetuoso en el trato con los estudiantes",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-18",
            "descripcion" => "Asiste con puntualidad a las actividades académicas",
        ]);
        DB::table("preguntas")
        ->insert([
            "codigo" => "PREG-19",
            "descripcion" => "Demuestra respeto por los principios y valores institucionales",
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
};
