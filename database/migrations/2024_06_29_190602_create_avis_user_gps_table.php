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
        Schema::create('avis_user_gps', function (Blueprint $table) {
            $table->id();
            $table->integer('note');
            $table->string('commentaire');
            $table->unsignedBigInteger('user_gp_id');
            $table->timestamps();

            $table->foreign('user_gp_id')->references('id')->on('user_gps');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis_user_gps');
    }
};
