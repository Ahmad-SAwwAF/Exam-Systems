<?php

use App\Models\Exam;
use App\Models\Faculty;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_faculty', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Exam::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Faculty::class)->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->unique(['exam_id','faculty_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_faculty');
    }
};
