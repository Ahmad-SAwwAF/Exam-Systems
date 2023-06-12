<?php

use App\Models\Nationality;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->text('F_name_ar')->nullable();
            $table->text('F_name_en')->nullable();

            $table->text('L_name_ar')->nullable();
            $table->text('L_name_en')->nullable();

            $table->text('email');
            $table->text('image')->nullable();
            $table->foreignIdFor(Nationality::class)->constrained();
            $table->boolean('gender')->nullable()->comment('0=>Male | 1=>Female');
            $table->text('password');
            $table->text('phone');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
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
        Schema::dropIfExists('admins');
    }
}
