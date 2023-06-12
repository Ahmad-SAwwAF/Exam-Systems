<?php

use App\Models\Doctor;
use App\Models\Faculty;
use App\Models\Specialization;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\PDO\Concerns\ConnectsToDatabase;

class CreateSubjectsTable extends Migration
{
    use ConnectsToDatabase;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            // $table->foreignIdFor(Doctor::class)->constrained()->onUpdate('cascade');
            $table->foreignIdFor(Faculty::class)->constrained()->onUpdate('cascade');
            $table->foreignIdFor(Specialization::class)->nullable()->constrained()->onUpdate('cascade');

            $table->text('name_ar')->nullable();
            $table->text('name_en')->nullable();

            $table->text('short_name');

            $table->text('code')->nullable();
            $table->text('level');
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
        Schema::dropIfExists('subjects');
    }
}
