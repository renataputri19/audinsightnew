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
        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_sub_clause_id')->constrained()->onDelete('cascade');
            $table->json('document')->nullable();
            $table->json('policy')->nullable();
            $table->json('rule')->nullable();
            $table->json('process')->nullable();
            $table->json('implementation')->nullable();
            $table->json('procedure')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requirements');
    }
};
