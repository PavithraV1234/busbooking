<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bodetails', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->date('DOB');
            $table->string('Travelsname');
            $table->string('Accountno',30);
            $table->string('Ifsccode',30);
            $table->string('Busname');
            $table->integer('Busno');
            $table->integer('Seats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bodetails');
    }
};
