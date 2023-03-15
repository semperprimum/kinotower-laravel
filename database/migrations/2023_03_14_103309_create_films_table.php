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
            $table->string('name', 150)->nullable(false);
            $table->foreignId("country_id")->constrained("countries");
            $table->smallInteger('duration')->unsigned()->nullable(false);
            $table->year('year_of_issue')->nullable(false);
            $table->tinyInteger('age')->unsigned()->nullable(false);
            $table->string('link_img', 255)->nullable();
            $table->string('link_kinopoisk', 255)->nullable();
            $table->string('link_video', 255)->nullable(false);
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
