<?php

use App\Models\Faculty;
use App\Models\Nationality;
use App\Models\Specialization;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->text('F_name_ar')->nullable();
            $table->text('F_name_en')->nullable();

            $table->text('M_name_ar')->nullable();
            $table->text('M_name_en')->nullable();

            $table->text('L_name_ar')->nullable();
            $table->text('L_name_en')->nullable();

            $table->text('image')->nullable();
            $table->date('birth_date');
            $table->boolean('gender')->nullable()->comment('0=>Male | 1=>Female');
            $table->foreignIdFor(Nationality::class)->nullOnDelete()->constrained();
            $table->foreignIdFor(Faculty::class)->constrained();
            $table->foreignIdFor(Specialization::class)->nullable()->constrained();
            $table->text('email');
            $table->text('password');
            $table->string('phone',15);
            $table->text('studentNumber');
            $table->text('SSN')->nullable();
            $table->boolean('status')->default(false);
            // $table->text('academic_year');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->nullOnDelete();

            $table->rememberToken();
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
        Schema::dropIfExists('students');
    }
};
