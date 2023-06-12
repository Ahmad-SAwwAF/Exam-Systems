<?php

use App\Models\Faculty;
use App\Models\Nationality;
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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();

            $table->text('F_name_ar')->nullable();
            $table->text('F_name_en')->nullable();

            $table->text('L_name_ar')->nullable();
            $table->text('L_name_en')->nullable();

            $table->text('image')->nullable();
            $table->boolean('gender')->nullable()->comment('0=>Male | 1=>Female');
            $table->foreignIdFor(Nationality::class)->constrained()->onUpdate('cascade');
            $table->text('email');
            $table->text('password');
            $table->string('phone',15);
            $table->text('SSN');
            $table->boolean('status')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('doctors');
    }
};
