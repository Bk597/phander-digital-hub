<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('organization');
            $table->enum('type', ['Scholarship', 'Fellowship', 'Remote Job', 'Grant'])->index();
            $table->string('deadline');
            $table->string('coverage');
            $table->string('location');
            $table->text('description');
            $table->string('apply_url')->nullable();
            $table->boolean('is_saved')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('opportunities');
    }
};
