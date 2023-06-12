<?php

use App\Models\Doctor;
use App\Models\Subject;
use App\Models\QuestionType;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            // role = teacher
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('doctors')->onDelete('cascade');
            // $table->foreignIdFor(Doctor::class)->constrained()->onDelete('cascade');//->renameColumn('created_by');
            $table->foreignIdFor(QuestionType::class)->constrained();
            $table->foreignIdFor(Subject::class)->constrained()->onDelete('cascade');

            $table->text('title_ar')->nullable();
            $table->text('title_en')->nullable();

            $table->longText('question_ar')->nullable();
            $table->longText('question_en')->nullable();

            $table->text('image')->nullable();

            $table->text('hint_ar')->nullable();
            $table->text('hint_en')->nullable();

            $table->longText('description_ar')->nullable();
            $table->longText('description_en')->nullable();

            $table->text('chapter_ar');
            $table->text('chapter_en');

            $table->text('level');
            $table->float('grade')->nullable();
            $table->smallInteger('namberOfAnswar')->nullable();
            $table->integer('used')->default(0);
            $table->boolean('is_true')->nullable();
            $table->boolean('is_shared')->default(false);
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
        Schema::dropIfExists('questions');
    }
}
