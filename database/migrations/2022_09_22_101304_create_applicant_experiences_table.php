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
        Schema::create('applicant_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_id')->constrained();
            $table->string('employer');
            $table->string('job_title');
            $table->date('started_at')->nullable();
            $table->string('location');
            $table->date('resigned_at')->nullable();
            $table->longText('responsibilities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicant_experiences');
    }
};
