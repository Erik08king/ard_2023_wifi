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
        Schema::create('gombnyomos_hrd_ek', function (Blueprint $table) {
            $table->id("ny_id");
            $table->char('tipus');
            $table->float('homerseklet',4,2);
            $table->integer('paratartalom');
            $table->integer('legminoseg');
            $table->dateTime('rogzetesideje');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gombnyomos_hrd_ek');
    }
};
