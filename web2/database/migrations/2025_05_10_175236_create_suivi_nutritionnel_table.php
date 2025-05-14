<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('suivi_nutritionnel', function (Blueprint $table) {
            $table->id('id_suivi');
            $table->unsignedBigInteger('id_utilisateur');
            $table->date('date');
            $table->integer('calories')->nullable();
            $table->float('lipides')->nullable();
            $table->float('glucides')->nullable();
            $table->timestamps();

            $table->foreign('id_utilisateur')
                ->references('id_utilisateur')
                ->on('utilisateur')
                ->onDelete('cascade');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('suivi_nutritionnel');
    }
    
};
