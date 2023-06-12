<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class exam_facultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function array_rec(array $array){
        for($row=0;$row<count($array);$row++){
                DB::table('exam_faculty')->insert([
                    'exam_id'=>$array[$row][0],
                    'faculty_id'=>$array[$row][1],
                ]);
        }
}
    public function run()
    {
        //
       DB::table('exam_faculty')->truncate();
        $arary_ans=array(
            array('1','4'),
            array('2','4'),

           );
           $this->array_rec( $arary_ans);
    }
}
