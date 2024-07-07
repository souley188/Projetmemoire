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
        Schema::create('gps', function (Blueprint $table) {
            $table->id();
            $table->string('nom_gp');
            $table->integer('montant');
            $table->unsignedBigInteger('ville_depart_id');
            $table->unsignedBigInteger('ville_arrive_id');
            $table->date('date_depart');
            $table->date('date_arrive');

            $table->unsignedBigInteger('user_id')->nullable();

            $table->timestamps();

            $table->foreign('ville_depart_id')->references('id')->on('villes');
            $table->foreign('ville_arrive_id')->references('id')->on('villes');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gps');
    }
};
