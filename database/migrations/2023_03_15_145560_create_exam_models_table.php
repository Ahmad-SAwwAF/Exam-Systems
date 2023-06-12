<?php

use App\Models\Doctor;
use App\Models\Subject;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_models', function (Blueprint $table) {
            $table->id();
            // Role = Teacher
            $table->foreignIdFor(Doctor::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Subject::class)->constrained()->onDelete('cascade');

            $table->text('name_ar')->nullable();
            $table->text('name_en')->nullable();

            $table->longText('description_ar')->nullable();
            $table->longText('description_en')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_models');
    }
}
