<?php

namespace Database\Seeders;

use App\Models\QuestionType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestoinTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('question_types')->truncate();
        $questoinsTypes=[
            ['ar' =>  'صح أو خطأ'             ,  'en'  =>  'True or False'],
            ['ar' =>  'ملئ فراغات'            ,  'en'  =>  'Fill Space'],
            ['ar' =>  'تقليدي'                ,  'en'  =>  'Traditional'],
            ['ar' =>  'أختر الإجابة الصحيحة'  ,  'en'  =>  'Choice The Right Answer'],
            ['ar' =>  'ترتيب'                 ,  'en'  =>  'Order'],
        ];
        foreach($questoinsTypes as $name ){
            QuestionType::create([
                'name_ar'=>$name['ar'],
                'name_en'=>$name['en'],
            ]);
        }

    }
}
