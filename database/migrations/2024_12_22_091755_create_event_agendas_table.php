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
        Schema::create('event_agendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'event_id')->constrained(table: 'events')->onDelete(action: 'cascade')->onUpdate(action: 'cascade');
            $table->string(column: 'topic');
            $table->time(column: 'start');
            $table->time(column: 'end');
            $table->longText(column: 'description')->nullable();
            $table->string(column: 'speaker')->nullable();
            $table->string(column: 'designation')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_agendas');
    }
};
