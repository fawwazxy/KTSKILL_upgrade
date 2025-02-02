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
        Schema::create('activity', function (Blueprint $table) {
            $table->id('activityID'); // Primary Key (auto-incremented)
            $table->string('activity_name'); // Activity name
            $table->text('description'); // Activity description
            $table->year('year'); // Year of the activity
            $table->string('status'); // Status of the activity (e.g., active, completed)
            $table->timestamps(); // Automatically adds created_at and updated_at
            $table->softDeletes(); // Adds deleted_at for soft delete functionality
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity');
    }
};
