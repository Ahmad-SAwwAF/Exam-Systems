<?php

use App\Models\Question;
use App\Models\Student;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraditonlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traditonls', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class) ->constrained()->onDelete('cascade');
            $table->foreignIdFor(Question::class)->constrained()->onDelete('cascade');
            $table->longText('studentAnswar')->nullable();
            $table->float('mark')->nullable();
            $table->timestamps();

            $table->unique(['student_id','question_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traditonls');
    }
}
