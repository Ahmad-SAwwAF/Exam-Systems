<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
       DB::table('doctors')->truncate();
        /////////////////////
        $f_names_ar=[
            'باسل','سعيد','ميسم','حسن','مرهف','حيدر','رغد','حسان',
            ];
        $f_names_en=[
            'basil','saeed','maysam','hussen','morhaf','hieder','raghad','hssan',
        ];
        $l_names_ar=[
            'خطيب','أبو طراب','جديد','مقلد','الحسن','زغبي', 'حمدان', 'إبراهيم',
            ];
        $l_names_en=[
            'khteab','last','jaded','mglad','Alhussen','zabioy', 'bradan', 'ibrahem',
        ];
        $email='@gmail.com';
        $phone='095855654';
        $ssn='032665655';

        $permissions = Permission::where('guard_name','doctor')->get();

        for($row=0;$row<count($f_names_ar);$row++){
          $doctor=  Doctor::create([
                'F_name_ar'            =>$f_names_ar[$row],
                'F_name_en'            =>$f_names_en[$row],

                'L_name_ar'            =>$l_names_ar[$row],
                'L_name_en'            =>$l_names_en[$row],

                 'gender'           =>rand(false,true),
                 'Nationality_id'   =>rand(1,3),
                 'email'            =>$f_names_en[$row].$email,
                 'password'         =>"12345678",
                 'phone'            =>$phone.$row,
                  'SSN'             =>$ssn.$row,
            ]);
            $doctor->syncPermissions($permissions->pluck('id','id'));
    }
}

}
