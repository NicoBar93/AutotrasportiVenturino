<?php

use App\Models\Region;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $regions = ['Lombardia','Veneto','Piemonte','Emilia-Romagna','Friuli-Venezia-Giulia','Marche','Abruzzo','Molise','Campania','Puglia','Basilicata','Lazio'];

        foreach($regions as $region) {
            Region::create(['name'=>$region]);
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regions');
    }
};
