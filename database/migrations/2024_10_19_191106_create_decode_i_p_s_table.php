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
        Schema::create('t_decodeip', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('countryCode')->nullable();
            $table->string('region')->nullable();
            $table->string('regionName')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('timezone')->nullable();
            $table->string('isp')->nullable();
            $table->string('org')->nullable();
            $table->string('as')->nullable();
            $table->string('query')->nullable();
            $table->string('id_ip')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_decodeip');
    }
};
