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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('job_summary');
            $table->unsignedBigInteger('job_function_id');
            $table->unsignedBigInteger('industry_id');
            $table->unsignedBigInteger('work_type_id');
            $table->unsignedBigInteger('job_level_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('min_qualification');
            $table->unsignedBigInteger('experience');
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('monthly_salary');
            $table->Enum('gender',['M','F','Both']);
            $table->unsignedBigInteger('openings');
            $table->unsignedBigInteger('author');
            $table->mediumText('slug')->nullable()->unique();
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
        Schema::dropIfExists('jobs');
    }
};
