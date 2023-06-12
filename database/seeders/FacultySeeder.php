<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('faculties')->truncate();
        $faculties_ar=[
            'الطب البشري',
            'الطب الاسنان',
            'الصيدلة',
            'الهندسة المعلوماتية',
            'الحقوق',
            'العلاقات الدولية'
        ];
        $faculties_en=[
            'Human Doctor',
            'Daintest',
            'Pharmace',
            'Information Technology',
            'Lowyer',
            'International Relationships'
        ];

       for($i=0; $i<count($faculties_ar) ;$i++){
        Faculty::create([
            'name_ar'=> $faculties_ar[$i],
            'name_en'=> $faculties_en[$i],
        ]);
       }
    }
}
