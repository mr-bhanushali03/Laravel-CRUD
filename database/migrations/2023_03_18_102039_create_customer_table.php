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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('gender',['Male','Female','Other']);
            $table->enum('languages',['English','Hindi','Gujarati','English,Hindi,Gujarati','English,Hindi','Hindi,Gujarati']);
            $table->string('email');
            $table->string('mobile');
            $table->string('password');
            $table->date('date');
            $table->enum('caste',['General','ST','SC','OBC']);
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
