<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category')->index();
            $table->string('duration');
            $table->unsignedSmallInteger('lessons_count');
            $table->string('instructor');
            $table->text('description');
            $table->decimal('rating', 3, 2)->default(0);
            $table->json('modules')->nullable();
            $table->boolean('is_enrolled')->default(false);
            $table->unsignedTinyInteger('progress')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
