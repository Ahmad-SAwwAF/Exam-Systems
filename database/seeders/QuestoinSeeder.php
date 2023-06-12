<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function array_rec(array $array){
            for($row=0;$row<count($array);$row++){
                Question::create([
                        'created_by'             =>$array[$row][0],
                        'question_type_id'      =>$array[$row][1],
                        'Subject_id'            =>$array[$row][2],
                        'Question_ar'              =>$array[$row][3],
                        'Question_en'              =>'English Question-'.$row+1,
                        'chapter_en'               =>$array[$row][4],
                        'chapter_ar'               =>'الفصل-'.$row+1,
                        'level'                 =>$array[$row][5],
                        'is_true'               =>$array[$row][6],
                        'title_ar'                 =>Doctor::find($array[$row][0])->F_name_ar,
                        'title_en'                 =>Doctor::find($array[$row][0])->F_name_en,
                    ]);

            }


    }
    public function run()
    {
       DB::table('questions')->truncate();
        $arary_qusetions=array(
            //subject 1
            //f_1
            array('1','1','1','هل عاصمة سورية دمشق','1','4','1'),
            array('1','2','1','سورية تقع في قارة_','2','4','0'),
            array('1','3','1','عدد اهم الانهار في سورية؟','3','4','0'),
            array('1','4','1','ما هي المحافظة الموجودة بسورية','4','4','0'),
            array('1','5','1','5+5=','5','4','0'),
            //f_2
            array('1','1','1','هل عاصمة سورية دمشق','1','4','1'),
            array('1','2','1','سورية تقع في قارة_','2','4','0'),
            array('1','3','1','عدد اهم الانهار في سورية؟','3','4','0'),
            array('1','4','1','ما هي المحافظة الموجودة بسورية','4','4','0'),
            array('1','5','1','5+5=','5','4','0'),
             //subject 2
             //f1
            array('2','1','3','6+6=12','1','4','1'),
            array('2','2','3','2+2=__,3+3__','2','4','0'),
            array('2','3','3','3+3=','3','4','0'),
            array('2','4','3','الرياضيات تهم ب ','4','4','0'),
            array('2','5','3','5+5=','5','4','0'),
            //f_2
            array('2','1','3','6+6=12','1','4','1'),
            array('2','2','3','2+2=__,3+3__','2','4','0'),
            array('2','3','3','3+3=','3','4','0'),
            array('2','4','3','الرياضيات تهم ب ','4','4','0'),
            array('2','5','3','5+5=','5','4','0'),
        );
        $this->array_rec( $arary_qusetions);
    }
}
