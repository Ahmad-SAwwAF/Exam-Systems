<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Traits\PermissionManagementTrait;

class Role_has_Permissions extends Seeder
{
    use PermissionManagementTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


//---------------------------------------------------------------------------------


     // مشتركة بين جميع الموظفين
     $forAnyUser= $this ->getJointPermission();

     // Exam Section Employee
     $exam_employee=Role::where('name','Examination-Employee')->first();
     $examSectionPermissions= $this->getPermission('exam');
     $examSectionPermissions=$examSectionPermissions->merge( $this->getPermission('category'));
     $examSectionPermissions=$examSectionPermissions->merge( $this->getPermission('student-exam'));
     $examSectionPermissions=$examSectionPermissions->merge( $this ->getJointPermission());

        $exam_employee->givePermissionTo($examSectionPermissions);

     // Exam Section Manager
     $examSectionPermissions=$examSectionPermissions->merge( $this->getPermission('examination'));
     $exam_manager=Role::where('name','Examination-Manager')->first();

          $exam_manager->givePermissionTo($examSectionPermissions);

/////////////////////////////////////////////////////////////////////////////////////
     // Affairs Section Employee
     $affairs_employee=Role::where('name','Affairs-Employee')->first();
     $affairsSectionPermissions= $this->getPermission('doctor');
     $affairsSectionPermissions=$affairsSectionPermissions->merge( $this->getPermission('subject'));
     $affairsSectionPermissions=$affairsSectionPermissions->merge( $this->getPermission('student'));
     $affairsSectionPermissions=$affairsSectionPermissions->merge($this ->getJointPermission());

          $affairs_employee->syncPermissions($affairsSectionPermissions);
     // Exam Section Manager
     $affairsSectionPermissions=$affairsSectionPermissions->merge( $this->getPermission('affairs'));
     $affairs_manager=Role::where('name','Affairs-Manager')->first();
          $affairs_manager->syncPermissions($affairsSectionPermissions);

/////////////////////////////////////////////////////////////////////////////////////
     // Support Section Employee
     $support_employee=Role::where('name','Support-Employee')->first();
     $supportSectionPermissions= $this->getPermission('hall');
     $supportSectionPermissions=$supportSectionPermissions->merge( $this->getPermission('computer'));
     $supportSectionPermissions=$supportSectionPermissions->merge($this ->getJointPermission());
     $support_employee->syncPermissions($supportSectionPermissions);

     // Support Section Manager
     $supportSectionPermissions=$supportSectionPermissions->merge( $this->getPermission('support'));
     $support_manager=Role::where('name','Support-Manager')->first();
          $support_manager->syncPermissions($supportSectionPermissions);


//---------------------------------------------------------------------------------









//{
        //
    //    DB::table('role_has_permissions')->truncate();
    //  $permission_s_affairs_deparment_id=[16,17,18,19,20,23,24,25,27,28,29,30,32,33,34,35,
    //    38,39,40,43,45,46,47,48,49,50];
    //     $roles= DB::table('roles')->where('name','s_affairs_deparment')->get();
    //     foreach( $roles as  $role)
    //     {
    //      foreach($permission_s_affairs_deparment_id as $number_id ){
    //          $permissions= DB::table('permissions')->where('id',$number_id )->first();
    //          DB::table('role_has_permissions')->insert([
    //             'permission_id'=>$permissions->id,
    //             'role_id'=>$role->id,
    //          ]);
    //         }
    //     }

//     //**************************
//     $permission_s_eaxm_deparment_id=[18,19,20,23,24,25,48,50,76,77,78,79,80,91,92,93,94,95,96,97,
//    98,99,100,101,102,103,104,105];
//     $roles= DB::table('roles')->where('name','s_eaxm_deparment')->get();
//     foreach( $roles as  $role)
//     {
//             foreach( $permission_s_eaxm_deparment_id as $number_id )
//             {
//                 $permissions= DB::table('permissions')->where('id',$number_id )->first();
//                 DB::table('role_has_permissions')->insert([
//                     'permission_id'=>$permissions->id,
//                     'role_id'=>$role->id,
//                 ]);

//             }
//         }
    }

//}
}
