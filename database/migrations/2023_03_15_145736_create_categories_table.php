<?php

use App\Models\Exam;
use App\Models\ExamModel;
use App\Models\Faculty;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Exam::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(ExamModel::class)->constrained()->onUpdate('cascade');
            $table->foreignIdFor(Faculty::class)->constrained()->onDelete('cascade');

            $table->string('name_ar',30);
            $table->string('name_en',30)->nullable();

            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->timestamps();
            $table->unique(['faculty_id','exam_model_id','exam_id','name_ar']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
