<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       DB::table('spaces')->truncate();
        $array_space=array(array('2','1'),array('7','1'),array('11','2'),array('11','2'),
        array('16','2'),array('16','2'));
        for($row=0;$row<count($array_space);$row++){
            DB::table('spaces')->insert([
                'Question_id'=>$array_space[$row][0],
                'numberOfSpaces'=>$array_space[$row][1],
            ]);

    }
    }
}
