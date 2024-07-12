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
        Schema::create('lading_page_configs', function (Blueprint $table) {
            $table->id();

            $table->string('whatsapp')->default('5216645881817');
            $table->string('banner_main_quote_title', 900)->default("");
            $table->string('banner_main_quote_description', 900)->default("");
            
            $table->string('contact_phone')->default('');
            $table->string('contact_email')->default('');
            $table->string('contact_facebook')->nullable();
            $table->string('contact_instagram')->nullable();
            $table->string('contact_tiktok')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lading_page_configs');
    }
};
