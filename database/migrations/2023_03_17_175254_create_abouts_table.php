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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('title');
            $table->text('description');
            $table->string('phone_number')->unique();
            $table->string('address');
            $table->date('birthday');
            $table->boolean('gender')->nullable();
            $table->json('relate_url')->nullable();
            $table->text('hobby')->nullable();
            $table->string('image');
            $table->text('cv_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
