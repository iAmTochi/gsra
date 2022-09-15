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
        Schema::create('recruiters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->unique();
            $table->string('company_name');
            $table->string('contact_person')->nullable();
            $table->string('notification_email');
            $table->mediumText('address');
            $table->unsignedBigInteger('industry_id');
            $table->unsignedBigInteger('company_capacity_id');
            $table->unsignedBigInteger('recruiter_position_id');
            $table->unsignedBigInteger('country_id');
            $table->string('referrals')->nullable();
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
        Schema::dropIfExists('recruiters');
    }
};
