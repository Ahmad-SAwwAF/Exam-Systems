<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function array_rec(array $array){
        for($row=0;$row<count($array);$row++){
                Exam::create([
                    'created_by'=>$array[$row][0],
                    'subject_id'=>$array[$row][1],
                    'name_ar'=>$array[$row][2],
                    'name_en'=>$array[$row][3],
                    'totalExamDegree'=>$array[$row][4],
                    'date'=>$array[$row][5]
                ]);
        }
}
    public function run()
    {
        //
       DB::table('exams')->truncate();
        $arary_ans=array(
            array('1','1','فحص مترجمات 1','exams_compiler_1','50','2023-5-5'),
            array('2','3','فحص رياضيات','exams_math','50','2023-5-6'),
           );
           $this->array_rec( $arary_ans);
    }
}
