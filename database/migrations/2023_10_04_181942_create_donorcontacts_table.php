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
        Schema::create('donorcontacts', function (Blueprint $table) {
            $table->id();
            $table->string('iddonor'); 
            $table->string('contactName'); 
            $table->string('contactRelationship'); 
            $table->string('contactEmail'); 
            $table->string('contactMethod');
            $table->text('howHeardAbout'); 
           // $table->boolean('termsAndConditions')->default(false); 
            //$table->boolean('privacyPolicy')->default(false); 
            //$table->boolean('consentForContact')->default(false); 
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
        Schema::dropIfExists('donorcontacts');
    }
};
