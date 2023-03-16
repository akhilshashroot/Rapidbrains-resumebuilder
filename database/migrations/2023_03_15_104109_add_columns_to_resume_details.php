<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToResumeDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resume_details', function (Blueprint $table) {
            $table->string('logo')->nullable();
            $table->text('summary')->nullable();
            $table->json('project_details')->nullable();
            $table->string('course')->nullable();
            $table->string('education_institute')->nullable();
            $table->string('education_duration')->nullable();
            $table->string('education_location')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resume_details', function (Blueprint $table) {
            //
        });
    }
}
