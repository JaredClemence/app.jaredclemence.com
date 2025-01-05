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
        Schema::create('tasks', function (Blueprint $table) {
	$table->id();
    $table->string('name');                  // Task title
    $table->text('description')->nullable(); // Task details
    $table->unsignedTinyInteger('puppy_points'); // Task weight (1-10)
    $table->unsignedTinyInteger('severity');     // Severity factor (1-10)
    $table->dateTime('deadline');            // Task deadline
    $table->boolean('completed')->default(false); // Completion status
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
