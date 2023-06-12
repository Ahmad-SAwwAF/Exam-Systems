<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
use App\Http\Traits\PermissionManagementTrait;
class PermissionSeeder extends Seeder
{
     use PermissionManagementTrait;
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       DB::table('permissions')->truncate();
        $permissions=[
         'permission-index',
    //--------------------------
     //role
         'role-index',
         'role-show',
         'role-create',
         'role-edit',
         'role-delete',
         'role-assign',
         'role-syncPermissions',
    //--------------------------
     //user
         'user-index',
         'user-show',
         'user-create',
         'user-edit',
         'user-delete',
     //--------------------------
     //affairs
          'affairs-index',
          'affairs-show',
          'affairs-create',
          'affairs-edit',
          'affairs-delete',
     //--------------------------
     //examination
          'examination-index',
          'examination-show',
          'examination-create',
          'examination-edit',
          'examination-delete',
     //--------------------------
     //support
          'support-index',
          'support-show',
          'support-create',
          'support-edit',
          'support-delete',
    //--------------------------
     //student
         'student-index',
         'student-show',
         'student-create',
         'student-edit',
         'student-delete',
    //--------------------------
     //doctors
         'doctor-index',
         'doctor-show',
         'doctor-create',
         'doctor-edit',
         'doctor-delete',
//  //-------------------------- // هدول ثابتين من عنا
        //  //nationalitie
        //  'nationalitie-index',
        //  'nationalitie-show',
        //  'nationalitie-create',
        //  'nationalitie-edit',
        //  'nationalitie-delete',
//--------------------------
     //faculty
         'faculty-index',
         'faculty-create',
         'faculty-edit',
         'faculty-delete',
    //--------------------------
     //specialization
         'specialization-index',
         'specialization-show',
         'specialization-create',
         'specialization-edit',
         'specialization-delete',
    //--------------------------
     //subject
         'subject-index',
         'subject-show',
         'subject-create',
         'subject-edit',
         'subject-delete',
////-------------------------- كمان ثابتين من عنا  👍 نحنااا منحددون
        //  //qustions-type
        //  'qustion-type-index',
        //  'qustion-type-show',
        //  'qustion-type-create',
        //  'qustion-type-edit',
        //  'qustion-type-delete',
// //--------------------------
         //space
        //  'space-index',
        //  'space-show',
        //  'space-create',
        //  'space-edit',
        //  'space-delete',
// //--------------------------
         //options
        //  'option-index',
        //  'option-show',
        //  'option-create',
        //  'option-edit',
        //  'option-delete',
// //--------------------------
         //traditonls
        //  'traditonl-index',
        //  'traditonl-show',
        //  'traditonl-create',
        //  'traditonl-edit',
        //  'traditonl-delete',
    //--------------------------
        //  exam
         'exam-index',
         'exam-show',
         'exam-create',
         'exam-edit',
         'exam-delete',
//  //-------------------------- كيان كسر  *_*  😑😑
        //  //exam-model-question
        //  'exam-model-question-index',
        //  'exam-model-question-show',
        //  'exam-model-question-create',
        //  'exam-model-question-edit',
        //  'exam-model-question-delete',
//--------------------------
     //category
         'category-index',
         'category-show',
         'category-create',
         'category-edit',
         'category-delete',
    //--------------------------
     //hall
         'hall-index',
         'hall-show',
         'hall-create',
         'hall-edit',
         'hall-delete',
    //--------------------------
     //computer
         'computer-index',
         'computer-show',
         'computer-create',
         'computer-edit',
         'computer-delete',
    //--------------------------
     //student-exam-profile
         'student-exam-profile-index',
         'student-exam-profile-show',
         'student-exam-profile-create',
         'student-exam-profile-edit',
         'student-exam-profile-delete',
    //--------------------------
     //activite
         'activite-index',
         'activite-show',
         'activite-delete',
    //--------------------------
     //Statistics
         'statistic-index',
        ];

        $doctorPermissions=[
          //--------------------------
         //exam-model
         'exam-model-index',
         'exam-model-show',
         'exam-model-create',
         'exam-model-edit',
         'exam-model-delete',
          //--------------------------
         //qustions
         'qustion-index',
         'qustion-show',
         'qustion-create',
         'qustion-edit',
         'qustion-delete',
          //--------------------------
         //student
         'student-index',
         'student-show',
        ];
        $studentPermissions=[
          'student-exam-profile-show',
          'specialization-show',
          'computer-show',
          'category-show',
          'student-show',
          'subject-show',
          'doctor-show',
          'hall-show',
          'exam-show',
     ];
        // pluck('name');
        // Admin && Users Permissions
        DB::table('permissions')->truncate();
        foreach($permissions as $permission)
        {
            Permission::create(['name'=>$permission,'guard_name'=>'admin']);
          if(! Str::is('activite-*',$permission))
          {
               Permission::create(['name'=>$permission]);
          }
        }
        ////
        // Doctor Permissions
        foreach($doctorPermissions as $permission)
        {
            Permission::create(['name'=>$permission,'guard_name'=>'doctor']);
        }
        // Student Permissions
        foreach($studentPermissions as $permission)
        {
            Permission::create(['name'=>$permission,'guard_name'=>'student']);
        }



    }
}
