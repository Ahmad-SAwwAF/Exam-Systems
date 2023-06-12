<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function re_array(array $array){
        for($row=0;$row<count($array);$row++){
            Specialization::create([
                'name_ar'=>$array[$row][0],
                'name_en'=>$array[$row][1],
                'Faculty_id'=>$array[$row][2],
                'short_name_ar'=>$array[$row][0],
                'short_name_en'=>$array[$row][1],
            ]);
    }
    }
    public function run()
    {
        //
        DB::table('specializations')->truncate();
      $arary_ans=array(
        array('برمجيات','software','4'),
        array('شبكات','networks','4'),
        array('ذكاء صنعي','AL','4'),
        array('طب بشري','Human Doctor','1'),
        array('طب اسنان','Daintest','2'),
       );
       $this->re_array($arary_ans);
    }
}
