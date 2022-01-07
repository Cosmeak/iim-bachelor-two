<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->text('description');
            $table->integer('salary')->nullable();
            $table->date('archive_date');
            $table->timestamps();

            $table->foreignId('location_id')->nullable()->constrained('locations');
            $table->foreignId('working_mode_id')->constrained('working_modes');
            $table->foreignId('contract_type_id')->constrained('contract_types');
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('sector_id')->constrained('sectors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
