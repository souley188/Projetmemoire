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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gp_id');
            $table->unsignedBigInteger('user_id');
           
            $table->float('poids_colis');
            $table->boolean('paiement_especes');
            $table->enum('etat',['en_attente','en_expedition','livrer','annuler'])->default('en_attente');
            $table->timestamps();

            $table->foreign('gp_id')->references('id')->on('gps');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
