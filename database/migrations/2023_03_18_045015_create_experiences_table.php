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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('level_id');
            $table->string('reward');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('position_id')->references('id')->on('positions')->onUpdate('cascade');
            $table->foreign('level_id')->references('id')->on('levels')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience');
    }
};
