<?php

use App\Enums\DatabaseStatus;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description', length: 150);
            $table->longText('details');
            $table->foreignId('organizer_id')->constrained(table: 'users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('status')->default(DatabaseStatus::ACTIVE->value);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
