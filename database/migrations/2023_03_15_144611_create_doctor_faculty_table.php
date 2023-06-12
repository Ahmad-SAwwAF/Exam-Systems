<?php

use App\Models\Doctor;
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
        Schema::create('doctor_faculty', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Faculty::class)->constrained();
            $table->foreignIdFor(Doctor::class)->constrained();
            $table->softDeletes();
            $table->timestamps();

            // $table->date('start_teaching');
            // $table->date('end_teaching')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_faculty');
    }
};
