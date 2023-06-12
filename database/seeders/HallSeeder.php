<?php

namespace Database\Seeders;

use App\Models\Hall;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function array_rec(array $array){
        for($row=0;$row<count($array);$row++){
                Hall::create([
                    'faculty_id'=>$array[$row][0],
                    'hallName_ar'=>$array[$row][1],
                    'hallName_en'=>$array[$row][2],
                    'floor_ar'=>$array[$row][3],
                    'floor_en'=>$array[$row][4],
                    'capacity'=>$array[$row][5],
                ]);
        }
}
    public function run()
    {
        //
        DB::table('halls')->truncate();
        $arary_ans=array(
            array('4','القاعة الأولى','room_1','طابق أول','Ground Floor','5'),
            array('4','القاعة الثانية','room_2','طابق ثاني','Floor 2','5')
           );
           $this->array_rec( $arary_ans);
    }
}
