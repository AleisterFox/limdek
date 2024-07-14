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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('price');
            $table->integer('category_id')->nullable();
            $table->string('in_stock')->default(1);
            $table->string('size')->nullable();
            $table->string('large')->nullable();
            $table->string('meters')->nullable();
            $table->string('presentation')->nullable();
            $table->string('area')->nullable();
            $table->string('square_meters')->nullable();
            $table->string('applications')->nullable();
            $table->string('recycling')->default(1);
            $table->string('life')->nullable();
            $table->string('maintenance')->nullable();
            $table->string('weight')->nullable();
            $table->string('box_size')->nullable();

            $table->string('installation_video')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
