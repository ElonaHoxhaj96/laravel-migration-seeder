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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company',20);
            $table->string('departure_station',20);
            $table->string('arrival_time',20);
            $table->string('train_code',20);
            $table->string('carriage_number',20);
            $table->string('on_time',20);
            $table->string('deleted',20);     
        });
    }
    // Azienda
    // Stazione di partenza
    // Stazione di arrivo
    // Orario di partenza
    // Orario di arrivo
    // Codice Treno
    // Numero Carrozze
    // In orario
    // Cancellato
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
