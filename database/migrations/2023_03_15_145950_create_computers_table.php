<?php

use App\Models\Hall;
use App\Models\Student;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class)->nullable()->nullOnDelete()->constrained();
            $table->foreignIdFor(Hall::class)->nullOnDelete()->constrained();
            $table->ipAddress('ipAddress');

            $table->text('name_ar')->nullable();//have to be uniqe
            $table->text('name_en')->nullable();//have to be uniqe

            $table->longText('info_ar')->nullable();
            $table->longText('info_en')->nullable();

            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('computers');
    }
}
