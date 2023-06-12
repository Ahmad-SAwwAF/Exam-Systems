<?php

use App\Models\Doctor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_permission', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Permission::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Doctor::class)->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->unique(['permission_id','doctor_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_permission');
    }
};
