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
        Schema::create('donarinformations', function (Blueprint $table) {
            $table->id();
            $table->string('donorid');
            $table->string('bloodGroup');
            $table->string('donationType');
            $table->date('lastDonationDate');
            $table->string('donationFrequency');
            $table->string('preferredLocation');
            $table->float('weight');
            $table->string('medicalConditions');
            $table->string('medications');
            $table->string('allergies');
            $table->string('travelHistory');
            $table->string('vaccinationStatus');
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
        Schema::dropIfExists('donarinformations');
    }
};
