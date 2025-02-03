<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id('courseID');
            $table->string('courseName');
            $table->string('courseCode')->unique();
            $table->string('imagePath')->nullable();
            $table->text('requirement');
            $table->string('duration');
            $table->text('syllabus');
            $table->text('financing');
            $table->text('career_opportunities');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
