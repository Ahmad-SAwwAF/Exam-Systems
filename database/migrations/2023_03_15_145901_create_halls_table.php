<?php

use App\Models\Faculty;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halls', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Faculty::class)->constrained()->onUpdate('cascade');

            $table->text('hallName_ar')->nullable();
            $table->text('hallName_en')->nullable();

            $table->text('floor_ar')->nullable();
            $table->text('floor_en')->nullable();

            $table->integer('capacity')->default(0);

            $table->text('description_ar')->nullable();
            $table->text('description_en')->nullable();

            $table->boolean('is_avaliable')->default(true);
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
        Schema::dropIfExists('halls');
    }
}
