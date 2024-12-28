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
        Schema::create('demande_conges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employe_id')->constrained()->onDelete('cascade');
            $table->integer('nbr_jours_demandes');
            $table->string('motif_conge');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->enum('statut', ['en_attente', 'accepte', 'refuse'])->default('en_attente');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_conges');
    }
};
