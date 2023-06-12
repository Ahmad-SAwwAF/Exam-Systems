<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class student_exam_profile_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function array_rec(array $array){
        for($row=0;$row<count($array);$row++){
                DB::table('student_exam_profiles')->insert([
                    'student_id'=>$array[$row][0],
                    'category_id'=>$array[$row][1],
                    'computer_id'=>$array[$row][2],
                ]);
        }
}
    public function run()
    {
        //
        DB::table('student_exam_profiles')->truncate();
        $arary_ans=array(
            //f1_subject_compiler
            array('1','1','1'),
            array('2','1','2'),
            //f2_subject_compiler
            array('3','2','3'),
            array('4','2','4'),
             //f1_subject_math
             array('1','3','5'),
             array('2','3','6'),
             //f2_subject_math
             array('3','4','7'),
             array('4','4','8'),

           );
           $this->array_rec( $arary_ans);
    }
}
