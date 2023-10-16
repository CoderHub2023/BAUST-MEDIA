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
        Schema::create('stack', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->longText("stack")->nullable();
            $table->unsignedBigInteger('likes')->nullable();
            $table->string("comments")->nullable();
            $table->string("images")->nullable();
            $table->unsignedBigInteger('shares')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stack');
    }
};
