<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Doctor_facultySeeder extends Seeder
{
    public function rec_array(array $array, $id){
        for($i=0 ; $i <count($array) ;$i++){
            DB::table('doctor_faculty')->insert([
                'Faculty_id'=>$id,
                'Doctor_id'=>$array[$i]
            ]);
        }
    }
    public function run()
    {
       DB::table('doctor_faculty')->truncate();
        //المعلوماتية
        $doctor_faculty_id_1=['1','2','3','5'];
        //طب البشري
        $doctor_faculty_id_2=['4','6'];
        //طب الاسنان
        $doctor_faculty_id_3=['7','8'];
        //
          $this->rec_array($doctor_faculty_id_1,4);
          $this->rec_array($doctor_faculty_id_2,1);
          $this->rec_array($doctor_faculty_id_3,2);
    }
}
