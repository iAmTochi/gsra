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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->date('dob')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->mediumText('image')->nullable();
            $table->unsignedBigInteger('qualification_id',)->comment('highest_qualification')->nullable();;
            $table->string('current_job_role')->nullable();;
            $table->unsignedBigInteger('country_id')->nullable();;
            $table->unsignedBigInteger('state_id')->nullable();;
            $table->unsignedBigInteger('resume_id')->nullable();;
            $table->unsignedBigInteger('availability_id')->nullable();;
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
        Schema::dropIfExists('applicants');
    }
};
