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
        Schema::dropIfExists('users_details');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        // If you need to rollback, you can recreate the table here
        Schema::create('users_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('skills');
            $table->longText('about')->nullable();
            $table->timestamps();
        });
    
    }
};
