<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     */
    function re_array(array $array){
            for($row=0;$row<count($array);$row++){
               $user= User::create([
                //  "role_id"=>$array[$row][0],

                 "F_name_en"=>$array[$row][1],
                 "F_name_ar"=>$array[$row][2],

                 "L_name_en"=>$array[$row][3],
                 "L_name_ar"=>$array[$row][4],

                  "birth_date"=>$array[$row][5],
                  "gender"=>rand(true,false),
                  "Nationality_id"=>$array[$row][7],
                  "Faculty_id"=>$array[$row][8],
                  "email"=>$array[$row][9],
                  "password"=>'12345678',
                  "phone"=>$array[$row][10],
                   "SSN"=>$array[$row][11]."$row",
                   "created_by"=>$array[$row][12],
                   "birth_date"=>Carbon::now()->subYears(20),
                ]);
                 $user->assignRole( Role::find($user->id) );

            }
}
    public function run()
    {
           DB::table('users')->truncate();
        $arary_ans=array(
            array('1','ahmad','أحمد','sawwaf','صواف','2015-10-08','1','1','4','ahmad@gmail.com','0958596743','0326656000','1'),
            array('1','omar','عمر','deeb','ديب','2015-11-08','1','1','4','omar@gmail.com','0958846203','0326656000','1'),
            array('1','ali','علي','deack','ديك','2015-4-08','1','1','4','ali@gmail.com','0945839528','0326656000','1'),
            array('2','husen','حسن','mutwaily','متوالي','2015-10-08','1','1','4','husen@gmail.com','0974650274','0326656','1'),
            array('2','sham','شام','mutwaily','متوالي','2016-10-08','2','1','4','sham@gmail.com','0935670274','0326656000','1'),
            array('3','saeed','سعيد','trab','أبو طراب','2016-10-08','1','1','4','saeed@gmail.com','0962394628','0326656000','1'),
           );
           $this->re_array( $arary_ans);

    }


}
