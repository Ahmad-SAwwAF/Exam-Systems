<?php

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
        Schema::create('specializations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Faculty::class)->constrained()->onDelete('cascade');

            $table->text('name_ar')->nullable();
            $table->text('name_en')->nullable();

            $table->text('short_name_ar')->nullable();
            $table->text('short_name_en')->nullable();

            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('specializations');
    }
};
