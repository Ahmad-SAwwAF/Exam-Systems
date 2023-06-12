<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->truncate();
        $roles = [
            'Examination-Manager',
            'Examination-Employee',
            'Affairs-Manager',
            'Affairs-Employee',
            'Support-Manager',
            'Support-Employee',
        ];
       // DB::table('roles')->truncate();
        foreach($roles as $role){
            Role::create(['name'=>$role,'guard_name'=>'user']);
        }




    }
}
