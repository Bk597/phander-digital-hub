<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('market_products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('creator_name');
            $table->string('village');
            $table->string('category')->index();
            $table->string('price');
            $table->text('description');
            $table->string('contact');
            $table->unsignedInteger('likes')->default(0);
            $table->boolean('is_favorite')->default(false);
            $table->string('emoji')->default('🛍️');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('market_products');
    }
};
