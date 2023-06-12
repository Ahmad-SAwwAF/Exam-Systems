<?php

use App\Models\Category;
use App\Models\Computer;
use App\Models\Student;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentExamProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_exam_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Category::class)->nullOnDelete()->constrained();
            $table->foreignIdFor(Computer::class)->nullOnDelete()->constrained();
            $table->boolean('status')->nullable()->comment('0=>Fail | 1=>Completed | null=>Undefined');;   //('0=>fail | 1=>completed | null=> undefined')
            $table->float('mark')->default(0);

            $table->timestamps();
          //TEEST  // $table->unique(['student_id','category_id','status'=>1]);
            $table->unique(['category_id','computer_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_exam_profiles');
    }
}
