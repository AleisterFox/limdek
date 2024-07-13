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
            
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_facebook')->nullable();
            $table->string('contact_instagram')->nullable();
            $table->string('contact_tiktok')->nullable();
            $table->text('contact_address')->nullable();

            $table->string('contact_latitude')->nullable();
            $table->string('contact_longitude')->nullable();

            $table->string('about_us', 900)->default("Empresa dedicados a la especialización en la venta de productos WPC y otros materiales para la decoración y construcción. Ofrecemos una amplia gama de opciones de alta calidad a nuestros clientes para ayudarles a transformar sus espacios en algo hermoso y funcional.");

            $table->string('about_image')->default('https://via.placeholder.com/600x400');

            $table->string('about_text_1', 900)->default("Somos una empresa dedicada a la especialización en la venta de productos WPC y otros materiales para la decoración y construcción. Ofrecemos una amplia gama de opciones de alta calidad a nuestros clientes para ayudarles a transformar sus espacios en algo hermoso y funcional.");

            $table->string('about_image_1')->default('https://via.placeholder.com/600x400');

            $table->string('about_text_2', 900)->default("Nuestro objetivo es ofrecer productos de alta calidad a precios competitivos, con un servicio al cliente excepcional. Nos esforzamos por ser la mejor opción para nuestros clientes, brindando productos de alta calidad y un servicio al cliente excepcional.");

            $table->string('about_image_2')->default('https://via.placeholder.com/600x400');

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
