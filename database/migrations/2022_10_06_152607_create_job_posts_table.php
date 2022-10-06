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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('job_summary');
            $table->foreignId('job_function_id')->constrained();
            $table->foreignId('industry_id')->constrained();
            $table->foreignId('work_type_id')->constrained();
            $table->foreignId('job_level_id')->constrained();
            $table->foreignId('state_id')->constrained();
            $table->foreignId('min_qualification');
            $table->unsignedBigInteger('experience');
            $table->foreignId('currency_id')->constrained();
            $table->unsignedBigInteger('monthly_salary');
            $table->Enum('gender',['M','F','Both']);
            $table->unsignedBigInteger('openings');
            $table->unsignedBigInteger('author');
            $table->date('feature_days');
            $table->boolean('is_closed')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_posts');
    }
};
