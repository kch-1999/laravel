<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('recettes', function (Blueprint $table) {
            $table->id('id_recette');
            $table->string('nom', 100);
            $table->text('ingredients');
            $table->integer('calories')->nullable();
            $table->float('lipides')->nullable();
            $table->float('glucides')->nullable();
            $table->timestamps();
        });
    }
     public function down(): void
    {
        Schema::dropIfExists('recettes');
    }


};
