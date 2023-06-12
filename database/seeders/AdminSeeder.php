<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->truncate();

           $admin= Admin::create([
            "F_name_ar"=>"أحمد",
            "F_name_en"=>"ahmad",

            "L_name_ar"=>"صواف",
            "L_name_en"=>"sawwaf",

            "email"=>"Ahmad@gmail.com",
            "Nationality_id"=>"1",
            "gender"=>rand(false,true),
            "password"=>'12345678',
            'phone'=>'223222323223',
        ]);
        $permissions = Permission::where('guard_name','admin')->get();
        $admin->syncPermissions($permissions->pluck('id','id'));
    }

}
