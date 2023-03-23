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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('appointment_no')->nullable();
            $table->date('appointment_date')->nullable();
            $table->unsignedBigInteger('doctor_id');
            $table->string('patient_name')->nullable();
            $table->string('patient_phone')->nullable();
            $table->string('total_fee')->nullable();
            $table->string('paid_amount')->nullable();
            $table->foreign('doctor_id')->references('id')->on('doctors');
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
        Schema::dropIfExists('appointments');
    }
};
