<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('web_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title');
            $table->text('description');
            $table->string('fav_icon');
            $table->string('logo');
            $table->string('mobile_logo');
            $table->integer('contact_1');
            $table->integer('contact_2');
            $table->string('email_1');
            $table->string('email_2');
            $table->text('map');
            $table->string('social_link_1');
            $table->string('social_link_2');
            $table->string('social_link_3');
            $table->string('social_link_4');
            $table->string('social_link_5');
            $table->text('address_1');
            $table->text('address_2')->nullable();
            $table->string('working_time');
            $table->string('copyright');
            $table->string('bg_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_settings');
    }
};
