<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateSoftskillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_softskills', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('id_candidate')->constrained('candidates');
            $table->foreignId('id_softskill')->constrained('softskills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_softskills');
    }
}
