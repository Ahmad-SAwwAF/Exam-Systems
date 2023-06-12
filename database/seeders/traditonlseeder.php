<?php

namespace Database\Seeders;

use App\Models\Traditionl;
use App\Models\Traditonl;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class traditonlseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function array_rec(array $array){
        for($row=0;$row<count($array);$row++){
            Traditonl::create([
                    'student_id'=>$array[$row][0],
                    'question_id'=>$array[$row][1],
                    'studentAnswar'=>$array[$row][2],
                    'mark'=>$array[$row][3],
                ]);
        }
}
       public function run()
{
    //
    DB::table('traditonls')->truncate();
           $arary_ans=array(
            //subject_1_with_f
            array('1','3','بردر والعاصي و دجلة','5'),
            array('2','3','الفرات و عين السن','6'),
            array('3','8','اليرموك و الفرات','0'),
            array('4','8','اليرموك و الفرات','0'),
            //subject_1_with_f
            array('1','13','5','3'),
            array('2','13','6','7'),
            array('3','18','4','0'),
            array('4','18','4','0'),
           );
           $this->array_rec( $arary_ans);
}
}
