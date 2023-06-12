<?php

use App\Models\Doctor;
use App\Models\Subject;
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
        Schema::create('doctor_subject', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Doctor::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Subject::class)->constrained()->onDelete('cascade');
            $table->boolean('isActive')->default(true)->nullable();
            $table->boolean('type')->nullable()->comment('0=>Lab | 1=>Acadimic');
            $table->date('startTeaching')->nullable();
            $table->date('endTeaching')->nullable();
            $table->timestamps();
            $table->unique(['doctor_id','subject_id','isActive']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_subject');
    }
};
