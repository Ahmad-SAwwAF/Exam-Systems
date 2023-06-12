<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class DoctorSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function rec_array(array $array, $id_studnent)
    {
        for($i=0 ; $i <count($array) ;$i++){
            DB::table('doctor_subject')->insert([
                'doctor_id'=>$id_studnent,
                'Subject_id'=>$array[$i],
                'isActive'=>rand(false,true),
                'type'=>rand(false,true),
                'startTeaching'=>"2023-03-10",
                'endTeaching'=>"2023-08-05",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ]);
        }
    }
    public function run()
    {
        DB::table('doctor_subject')->truncate();

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
