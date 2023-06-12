<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function array_rec(array $array){
        for($row=0;$row<count($array);$row++){
            Category::create([
                    'exam_id'=>$array[$row][0],
                    'exam_Model_id'=>$array[$row][1],
                    'faculty_id'=>$array[$row][2],
                    'name_ar'=>$array[$row][3],
                    'start_date'=>$array[$row][4],
                    'end_date'=>$array[$row][5],
                ]);
        }
}
    public function run()
    {
        DB::table('categories')->truncate();
        //
        $arary_ans=array(
            array('1','1','4','f_1','2023-05-5 11:00:00','2023-05-5 12:00:00'),
            array('1','2','4','f_2','2023-05-5 12:00:00','2023-05-5 13:00:00'),
            array('2','3','4','f_1','2023-05-5 11:00:00','2023-05-5 12:00:00'),
            array('2','4','4','f_2','2023-05-6 12:00:00','2023-05-5 13:00:00'),
           );
           $this->array_rec( $arary_ans);
    }
}
