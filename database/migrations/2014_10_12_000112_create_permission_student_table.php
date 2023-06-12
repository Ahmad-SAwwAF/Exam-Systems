<?php

use App\Models\Student;
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
        Schema::create('permission_student', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Permission::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Student::class)->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->unique(['permission_id','student_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_student');
    }
};
