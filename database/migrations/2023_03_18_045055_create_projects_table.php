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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->json('description');
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('language_type');
            $table->string('url_page')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('position_id')->references('id')->on('positions')->onUpdate('cascade');
            $table->foreign('language_type')->references('id')->on('languages')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
