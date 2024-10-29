<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('expense_incomes', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 15, 2);
            $table->string('title');
            $table->enum('type', ['income', 'expense']);
            $table->string('description')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('period')->nullable();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expense_incomes');
    }
};