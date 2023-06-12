<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class subjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    function re_array(array $array){
        for($row=0;$row<count($array);$row++){

            Subject::create([
                // 'doctor_id'=>$array[$row][0],
                'Faculty_id'=>$array[$row][1],
                'Specialization_id'=>$array[$row][2],
                'name_ar'=>$array[$row][3],
                'name_en'=>$array[$row][4],
                'short_name'=>$array[$row][5],
                'code'=>$array[$row][6],
                'level'=>$array[$row][7],
            ]);

        }
    }
    public function run()
    {
        DB::table('subjects')->truncate();
        $arary_ans=array(
            array('1','4','1','مترجمات 1','compiler_1','compiler_1','c_1','4'),
            array('1','4','1','مترجمات 2','compiler_2','compiler_2','c_2','5'),
            array('2','4','1','رياضيات','math','math','s1','4'),
            array('2','4','1','برمجيات 1','software_1','software_1','s2','5'),
            array('3','4','3','نظم خبيرة','experts system','experts system','e_1','5'),
            array('5','4','2','شبكات 1','network_1','network_1','n_1','5'),
            array('4','1','4','تاريخ','histology','histology','h_1','2'),
            array('6','1','4','فيزياء','physiology','physiology','p_2','3'),
            array('7','2','5','حيوية','ophthalmology','ophthalmology','o_1','4'),
            array('8','2','5','أمن شبكات','Security Networks', 'Security Networks','v_2','5')
           );
             $this->re_array($arary_ans);

    }

}

