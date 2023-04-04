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
        Schema::create('medias_', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('description');
            $table->string('activities');
            $table->string('location');
            $table->string('tagged_users');
            $table->string(['media']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medias_');
    }
};
