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
        Schema::create('estilos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre',);
            $table->string('colores',);
            $table->string('disenos',);
            $table->integer('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estilos');
    }
};
