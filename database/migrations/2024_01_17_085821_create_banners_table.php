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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('homebanner1')->nullable();
            $table->string('home_banner_link1')->nullable();
            $table->string('homebanner2')->nullable();
            $table->string('home_banner_link2')->nullable();
            $table->string('homebanner3')->nullable();
            $table->string('home_banner_link3')->nullable();
            $table->string('banner4')->nullable();
            $table->string('banner_link4')->nullable();
            $table->string('banner5')->nullable();
            $table->string('banner_link5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
