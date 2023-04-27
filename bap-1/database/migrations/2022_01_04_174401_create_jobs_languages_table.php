<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_languages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('language_id')->constrained('languages');
            $table->foreignId('job_id')->constrained('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_languages');
    }
}
