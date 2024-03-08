<?php

use App\Models\Osztaly;
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
        Schema::create('osztalies', function (Blueprint $table) {
            $table->id("osztlay_id");
            $table->string('neve');
            $table->timestamps();
        });
        Osztaly::create(["neve" =>"Szoftver Fejlesztő"]);
        Osztaly::create(["neve" =>"Szoftver Tesztelő"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('osztalies');
    }
};
