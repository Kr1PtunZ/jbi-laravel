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
        Schema::create('users_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('Не указано');
            $table->string('number')->unique();
            $table->string('email')->default('Не указан');
            $table->string('message',255)->default('Не указан');
            $table->string('date',30);
            $table->boolean('is_visible')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_request');
    }
};
