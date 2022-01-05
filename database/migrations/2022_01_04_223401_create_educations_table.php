<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
          $table->id();
          $table->string('label');
          $table->date('start_date');
          $table->date('end_date');
          $table->timestamps();

          $table->foreignId('id_degree')->constrained('degrees');
          $table->foreignId('id_candidate')->constrained('candidates');
          $table->foreignId('id_diploma')->constrained('diplomas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educations');
    }
}
