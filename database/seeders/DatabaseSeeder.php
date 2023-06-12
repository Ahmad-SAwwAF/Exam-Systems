<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Database\Seeders\ExamSeeder;
use Database\Seeders\HallSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\SpaceSeeder;
use Database\Seeders\DoctorSeeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\FacultySeeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\subjectSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\QuestoinSeeder;
use Database\Seeders\ExamModelSeeder;
use Database\Seeders\traditonlseeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\NationalitySeeder;
use Database\Seeders\QuestoinTypeSeeder;
use Database\Seeders\Exam_model_question;
use Database\Seeders\Doctor_facultySeeder;
use Database\Seeders\SpecializationSeeder;
use Database\Seeders\student_subjectSeeder;
use Database\Seeders\exam_facultySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
      ///  DB::truncate();
    //  ELoquent::unquard();
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');
          $this->call([
                        RoleSeeder::class,
                        PermissionSeeder::class,
                        NationalitySeeder::class,
                        FacultySeeder::class,
                        AdminSeeder::class,
                        UserSeeder::class,
                        DoctorSeeder::class,
                        StudentSeeder::class,
                        DoctorPermissionSeeder::class,
                        PermissionStudentSeeder::class,
                        // Role_has_Permissions::class,

                        SpecializationSeeder::class,
                        subjectSeeder::class,
                        Doctor_facultySeeder::class,
                        StudentSubjectSeeder::class,
                        DoctorSubjectSeeder::class,
                        QuestoinTypeSeeder::class,
                        QuestoinSeeder::class,
                        SpaceSeeder::class,
                        OptionSeeder::class,

                        traditonlseeder::class,
                        ExamSeeder::class,
                        ExamModelSeeder::class,
                        Exam_model_question::class,

                        CategorySeeder::class,
                        HallSeeder::class,
                        ComputerSeeder::class,
                        student_exam_profile_Seeder::class,
                        exam_facultySeeder::class,


                        Role_has_Permissions::class,

                        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
