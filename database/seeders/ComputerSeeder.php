<?php

namespace Database\Seeders;

use App\Models\Computer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function array_rec(array $array){
        for($row=0;$row<count($array);$row++){
                Computer::create([
                    'student_id'=>$array[$row][0],
                    'hall_id'=>$array[$row][1],
                    'IPAddress'=>$array[$row][2],
                    'name_en'=>$array[$row][3],
                ]);
        }
}
    public function run()
    {
        DB::table('computers')->truncate();
        //
        $arary_ans=array(
            //subject compiler
            array('1','1','192.258.236.25','c_1'),
            array('2','1','192.258.236.45','c_2'),
            array('3','2','192.258.236.45','c_1'),
            array('4','2','192.258.236.45','c_2'),
            //subject compiler
            array('1','1','192.258.236.25','c_1'),
            array('2','1','192.258.236.45','c_2'),
            array('3','2','192.258.236.45','c_1'),
            array('4','2','192.258.236.45','c_2'),

           );
           $this->array_rec( $arary_ans);
    }
}
