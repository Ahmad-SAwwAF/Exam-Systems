<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_student')->truncate();
        $permission_student_id=Permission::find([78,80,93,95,98,100,103,105,107,108,110]);
        $students= Student::get();
        foreach( $students as  $student){
         foreach($permission_student_id as $permission ){
            //  $permissions= DB::table('permissions')->where('id',$number_id )->first();
                DB::table('permission_student')->insert([
                    'student_id'=>$student->id,
                    'permission_id'=>$permission->id
                ]);

            }
    }
    }
}
