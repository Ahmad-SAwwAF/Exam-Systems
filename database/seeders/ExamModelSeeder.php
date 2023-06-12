<?php

namespace Database\Seeders;

use App\Models\ExamModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExamModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function array_rec(array $array){
        for($row=0;$row<count($array);$row++){
                ExamModel::create([
                    'doctor_id'=>$array[$row][0],
                    'subject_id'=>$array[$row][1],
                    'name_ar'=>$array[$row][2],
                    'name_en'=>$array[$row][3]
                ]);
        }
}
    public function run()
    {
        //
        DB::table('exam_models')->truncate();
        $arary_ans=array(
            array('1','1','أسئلة مترجمات 1','qustion_bank_compiler_1'),
            array('1','1','أسئلة مترجمات 2','qustion_bank_compiler_2'),
            array('2','3','أسئلة رياضيات 1','qustion_bank_math_1'),
            array('2','3','أسئلة رياضيات 2','qustion_bank_math_2')
           );
           $this->array_rec( $arary_ans);
    }
}
