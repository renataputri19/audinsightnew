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
        Schema::create('gap_analyses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_sub_clause_id')->constrained()->onDelete('cascade');
            $table->string('doc_exist_done');
            $table->string('doc_exist_not_done');
            $table->string('doc_not_exist_done');
            $table->string('doc_not_exist_not_done');
            $table->string('action_plan');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gap_analyses');
    }
};
