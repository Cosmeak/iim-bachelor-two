<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->boolean('is_completed')->default(0);
            $table->timestamps();

            $table->foreignId('location_id')->nullable()->constrained('locations');
            $table->foreignId('company_size_id')->nullable()->constrained('company_sizes');
            $table->foreignId('sector_id')->nullable()->constrained('sectors');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
