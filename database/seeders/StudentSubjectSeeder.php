<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSubjectSeeder extends Seeder
{
    public function rec_array(array $array, $id_studnent){
        for($i=0 ; $i <count($array) ;$i++){
            DB::table('student_subject')->insert([
                'Student_id'=>$id_studnent,
                'Subject_id'=>$array[$i]
            ]);
        }
    }
    public function run()
    {
        $students=['1','2','3','4','5','6','7','8'];
        DB::table('student_subject')->truncate();
        //

        $subject_id_1=['1','3'];
        $subject_id_2=['1','3'];
        $subject_id_3=['1','3'];
        //
        $subject_id_4=['1','3'];
        $subject_id_5=['7','8'];
        $subject_id_6=['7','8'];
        $subject_id_7=['8'];
        //
        $subject_id_8=['9','10'];
        //
        $this->rec_array($subject_id_1,'1');
        $this->rec_array($subject_id_2,'2');
        $this->rec_array($subject_id_3,'3');
        $this->rec_array($subject_id_4,'4');
        $this->rec_array($subject_id_5,'5');
        $this->rec_array($subject_id_6,'6');
        $this->rec_array($subject_id_7,'8');
        $this->rec_array($subject_id_8,'7');
    }
}
