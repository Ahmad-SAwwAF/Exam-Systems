<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function arr_space(array $ar_options){
          for($row=0;$row<count($ar_options);$row++){
            Option::create([
                'space_id'=>$ar_options[$row][0],
                'question_id'=>$ar_options[$row][1],
                'text_ar'=>$ar_options[$row][2],
                'is_true'=>$ar_options[$row][3],
            ]);
        }

    }
    public function arr_mulitpl(array $ar_options){
        for($row=0;$row<count($ar_options);$row++){
            Option::create([
              'question_id'=>$ar_options[$row][0],
              'text_ar'=>$ar_options[$row][1],
              'is_true'=>$ar_options[$row][2],
          ]);
      }

  }
       public function run()
    {
        DB::table('options')->truncate();
        //space_qustion
       $arary_options_qustoins_spacs=array(
          //***************************
        array('1','2','اسيا','0'),
        array('1','2','اوروبا','1'),
        array('1','2','افريقيا','0'),
        array('1','2','امريكيا الجنوبية','0'),
         //***************************
        array('2','7','افريقيا','0'),
        array('2','7','اوروبا','0'),
        array('2','7','اسيا','1'),
        array('2','7','امريكيا الجنوبية','0'),



        //************************
        array('3','11','2','0'),
        array('3','11','4','1'),
        array('3','11','5','0'),
        array('3','11','6','0'),

        array('4','11','2','0'),
        array('4','11','4','0'),
        array('4','11','5','0'),
        array('4','11','6','1'),
       //************************
        array('5','16','2','0'),
        array('5','16','4','1'),
        array('5','16','5','0'),
        array('5','16','6','0'),

        array('6','16','2','0'),
        array('6','16','4','0'),
        array('6','16','5','0'),
        array('6','16','6','1')




         );
         //mulitpul_qustion
         $arary_options_qustoins_multipul=array(
           //mulitpul_options_qustion_1
            array('4','حلب','1'),//p1
           array('4','اربد','0'),//p2
           array('4','الموصل','0'),//p3
           array('4','الرمثا','0'),//p4
          //mulitpul__options_qustion_2
           array('9','المحاليل','0'),//p1
           array('9','الصبغيات','0'),//p2
           array('9','المعادلات','1'),//p3
           array('9','الجبر الخطي','1'),//p4
            //mulitpul__options_qustion_2
            array('13','المحاليل','0'),//p1
            array('13','الصبغيات','0'),//p2
            array('13','المعادلات','1'),//p3
            array('13','الجبر الخطي','1'),//p4
             //mulitpul__options_qustion_2
           array('17','المحاليل','0'),//p1
           array('17','الصبغيات','0'),//p2
           array('17','المعادلات','1'),//p3
           array('17','الجبر الخطي','1')//p4

            );
         $this->arr_space( $arary_options_qustoins_spacs);
         $this->arr_mulitpl($arary_options_qustoins_multipul);

    }
}

