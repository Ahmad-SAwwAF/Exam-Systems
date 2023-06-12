<?php

use App\Models\Question;
use App\Models\ExamModel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamModelQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_model_question', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ExamModel::class)  ->constrained()->onDelete('cascade');
            $table->foreignIdFor(Question::class)   ->constrained()->onDelete('cascade');
            $table->float('grade');
            $table->timestamps();

            $table->unique(['exam_model_id','question_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_model_question');
    }
}
