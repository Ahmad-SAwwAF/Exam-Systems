<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     function re_array(array $array){
        $permissions = Permission::where('guard_name','student')->get();
        for($row=0;$row<count($array);$row++){

            $student=Student::create([
                'F_name_en'=>$array[$row][0],
                'M_name_en'=>$array[$row][1],
                'L_name_en'=>$array[$row][2],
                'birth_date'=>Carbon::now()->subYear(18),
                'gender'=>      rand(false,true),
                'Nationality_id'=>$array[$row][5],
                'Faculty_id'=>$array[$row][6],
                'email'=>$array[$row][7],
                'password'=>'12345678',
               'phone'=>$array[$row][8]-"$row",
               'studentNumber'=>$array[$row][9],
                'SSN'=>$array[$row][10]."$row",
                // 'academic_year'=>$array[$row][11],
            ]);
            $student->syncPermissions($permissions->pluck('id','id'));
        }
    }
    public function run()
    {
        DB::table('students')->truncate();
        $arary_ans=array(
            array('majed','mohumad','zaobiy','2000-10-08','1','1','4','majed@gmail.com','095855600','018041300','0326656000','2016','1'),
            array('souad','moutaz','baker','2000-10-08','2','1','4','souad@gmail.com','095855600','018041301','0326656000','2016','1'),
            array('ali','ahmad','alseead','2000-10-08','1','1','4','ali@gmail.com','095855600','018041302','0326656000','2016','1'),
            array('sdam','mhomod','wadiy','2000-10-08','1','1','4','sdam@gmail.com','095855600','018041303','0326656000','2016','1'),
            array('zaen','mouaz','frahan','2000-10-08','1','1','1','zaen@gmail.com','095855600','018041304','0326656000','2016','1'),
            array('fraah','saeed','frahan','2000-10-08','2','1','1','fraah@gmail.com','095855600','018041305','0326656000','2016','1'),
            array('qusey','mhoumad','shraa','2000-10-08','1','1','2','qusey@gmail.com','095855600','018041306','0326656000','2016','1'),
            array('reham','Ahmad','ALali','2000-10-08','2','1','1','reham@gmail.com','095855600','018041307','0326656000','2016','1'),
        );


            $this->re_array($arary_ans);
       // DB::table('students')->truncate();

    }
}


