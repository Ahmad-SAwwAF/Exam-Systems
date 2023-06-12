<?php

use App\Models\Faculty;
use App\Models\User;
use App\Models\Subject;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            // role = Stuff
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            // $table->foreignIdFor(User::class)->constrained()->onDelete('cascade')->renameColumn('created_by');
            $table->foreignIdFor(Subject::class)->constrained()->onDelete('cascade');
            $table->boolean('type')->nullable()->comment('0=>Lab | 1=>Acadimic');

            $table->text('name_ar')->nullable();
            $table->text('name_en')->nullable();

            $table->float('totalExamDegree')->nullable();
            //Date Of Exam
            $table->date('date');

            $table->longText('description_ar')->nullable();
            $table->longText('description_en')->nullable();

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
        Schema::dropIfExists('exams');
    }
}
