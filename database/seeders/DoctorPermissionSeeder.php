<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class DoctorPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //
          DB::table('doctor_permission')->truncate();
          $ids=[18,20,48,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,73,74,75,78,80,81,82,83,84,85,86,87,88,89,90];
          $permissions=Permission::select('id')->find([$ids]);
       //    $permissions=$permission_doctor->pluck('id','id')->all();
          $doctors= Doctor::get();
          foreach( $doctors as  $doctor)
          {
               foreach($permissions as $permission )
               {
                   DB::table('doctor_permission')->insert([
                               'doctor_id'     =>$doctor->id,
                               'permission_id' =>$permission->id
                   ]);
               }
           }
           // foreach($permission_doctor_id as $number_id )
           // {
           //     $permissions= DB::table('permissions')->where('id',$number_id )->first();
           //     DB::table('permission_doctor')->insert([
           //         'doctor_id'=>$doctor->id,
           //         'permission_id'=>$permissions->id
           //     ]);
           //    }


    }
}
