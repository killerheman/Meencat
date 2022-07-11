<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Null_;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fname')->nullable();
            $table->string('dob');
            $table->string('aadharno');
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->string('maxqualification')->nullable();
            $table->string('dreamcompany')->nullable();
            $table->string('course');
            $table->string('price');
            $table->string('highmark')->nullable();
            $table->string('intermark')->nullable();
            $table->string('maxqualificationmark')->nullable();
            $table->string('orderid')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('status')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('students');
    }
};
