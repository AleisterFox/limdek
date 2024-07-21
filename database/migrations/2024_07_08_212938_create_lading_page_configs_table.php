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

            $table->string('banner_image_1')->nullable();
            $table->string('banner_text_1')->nullable();

            $table->string('banner_image_2')->nullable();
            $table->string('banner_text_2')->nullable();

            $table->string('banner_image_3')->nullable();
            $table->string('banner_text_3')->nullable();

            $table->string('banner_image_4')->nullable();
            $table->string('banner_text_4')->nullable();

            $table->string('card_title_1')->default('Envíos');
            $table->string('card_text_1')->default('Hacemos envíos a toda la República Mexicana.');

            $table->string('card_title_2')->default('Servicio al Cliente');
            $table->string('card_text_2')->default('¿Una pregunta? Comuníquese con nosotros al 123 456 7890');

            $table->string('card_title_3')->default('Ubicación');
            $table->string('card_text_3')->nullable();

            $table->string('card_title_4')->default('Pago Seguro');
            $table->string('card_text_4')->default('Tu información de pago se procesa de forma segura');

            $table->string('about_us', 900)->default("Empresa dedicados a la especialización en la venta de productos WPC y otros materiales para la decoración y construcción. Ofrecemos una amplia gama de opciones de alta calidad a nuestros clientes para ayudarles a transformar sus espacios en algo hermoso y funcional.");

            $table->string('about_image')->nullable();

            $table->string('about_text_1', 900)->default("Somos una empresa dedicada a la especialización en la venta de productos WPC y otros materiales para la decoración y construcción. Ofrecemos una amplia gama de opciones de alta calidad a nuestros clientes para ayudarles a transformar sus espacios en algo hermoso y funcional.");

            $table->string('about_image_1')->nullable();

            $table->string('about_text_2', 900)->default("Nuestro objetivo es ofrecer productos de alta calidad a precios competitivos, con un servicio al cliente excepcional. Nos esforzamos por ser la mejor opción para nuestros clientes, brindando productos de alta calidad y un servicio al cliente excepcional.");

            $table->string('about_image_2')->nullable();

            $table->string('faq', 1900)->default("Nos enorgullece ofrecer envíos a toda la República Mexicana. Para garantizarte la mejor entrega de tus materiales, trabajamos con empresas especializadas en transporte de muebles.
            El tiempo estimado de entrega es de 4 a 15 días hábiles, teniendo en cuenta que el tamaño de los materiales es irregular. ¡Te garantizamos un servicio seguro y confiable para que tus materiales lleguen a su destino en perfecto estado!Nuestro servicio de atención al cliente está disponible de lunes a viernes de 10:00 a. m. a 7:00 p.m. y sábados de 10:00 a.m. a 2:00 p.m.");

            $table->string('question_1')->default('¿Hacen envíos internacionales?');
            $table->string('answer_1')->default('No, por el momento solo hacemos envíos a toda la República Mexicana.');

            $table->string('question_2')->default('¿Cuánto tiempo tarda en llegar mi paquete?');
            $table->string('answer_2')->default('El tiempo estimado de entrega es de 4 a 15 días hábiles, teniendo en cuenta que el tamaño de los materiales es irregular.');

            $table->string('question_3')->default('¿Por qué mi envío tarda más que el promedio?');
            $table->string('answer_3')->default('El tiempo de entrega puede variar dependiendo de la ubicación de entrega y la disponibilidad de los materiales.');

            $table->string('question_4')->default('¿Cómo puedo rastrear mi pedido?');
            $table->string('answer_4')->default('Una vez que tu pedido haya sido enviado, recibirás un correo electrónico con el número de guía para que puedas rastrear tu paquete.');

            $table->string('question_5')->default('¿Qué hago si mi paquete llega dañado?');
            $table->string('answer_5')->default('Si tu paquete llega dañado, por favor contáctanos de inmediato para que podamos ayudarte a resolver el problema.');

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
