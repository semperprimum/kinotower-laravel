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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->foreignId("country_id")->constrained("countries");
            $table->smallInteger('duration')->unsigned();
            $table->year('year_of_issue');
            $table->tinyInteger('age')->unsigned();
            $table->string('link_img', 255)->nullable();
            $table->string('link_kinopoisk', 255)->nullable();
            $table->string('link_video', 255);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
