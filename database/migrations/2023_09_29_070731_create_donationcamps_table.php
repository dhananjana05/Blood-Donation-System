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
        Schema::create('donationcamps', function (Blueprint $table) {
            $table->id();
            $table->string('place');
            $table->string('address');
            $table->date('date')->default(now());;
            $table->string('from');
            $table->string('to');
            $table->string('description');
            $table->string('status')->default('Pending');
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
        Schema::dropIfExists('donationcamps');
    }
};
