<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Exam_model_question extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function array_rec(array $array){
        for($row=0;$row<count($array);$row++){
                DB::table('exam_model_question')->insert([
                    'exam_model_id'=>$array[$row][0],
                    'question_id'=>$array[$row][1],
                    'grade'=>$array[$row][2],
                ]);
        }
}
    public function run()
    {
        //
        DB::table('exam_model_question')->truncate();
        $arary_ans=array(
            array('1','1','10'),
            array('1','2','10'),
            array('1','3','10'),
            array('1','4','10'),
            array('1','5','10'),
            array('2','6','10'),
            array('2','7','10'),
            array('2','8','10'),
            array('2','9','10'),
            array('2','10','10'),
            array('3','11','10'),
            array('3','12','10'),
            array('3','13','10'),
            array('3','14','10'),
            array('3','15','10'),
            array('4','16','10'),
            array('4','17','10'),
            array('4','18','10'),
            array('4','19','10'),
            array('4','20','10'),
           );
           $this->array_rec($arary_ans);

    }
}
