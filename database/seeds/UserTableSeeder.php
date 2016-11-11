<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_student = Role::where('name', 'student')->first();
        $role_teacher = Role::where('name', 'teacher')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user1 = new User();
        $user1->name = "student";
        $user1->email = "student@gmail.com";
        $user1->password = "714170";
        $user1->save();
        $last_user_id = DB::table('users')->latest()->value('id');
        DB::table('user_infos')->insert([
            'user_id' => $last_user_id, 'class_id' => 1, 'roll_no' => '11090901']);
        $user1->roles()->attach($role_student);



        $user2 = new User();
        $user2->name = "teacher";
        $user2->email = "teacher@gmail.com";
        $user2->password = "123456";
        $user2->save();
        $last_user_id = DB::table('users')->latest()->value('id');
        DB::table('user_infos')->insert(['user_id' => $last_user_id]);
        $user1->roles()->attach($role_teacher);

        $user3 = new User();
        $user3->name = "admin";
        $user3->email = "admin@gmail.com";
        $user3->password = "123456";
        $user3->save();
        $last_user_id = DB::table('users')->latest()->value('id');
         DB::table('user_infos')->insert(['user_id' => $last_user_id]);
        $user3->roles()->attach($role_admin);

        $user4 = new User();
        $user4->name = "student_two";
        $user4->email = "student_two@gmail.com";
        $user4->password = "714170";
        $user4->save();
        $last_user_id = DB::table('users')->latest()->value('id');
        DB::table('user_infos')->insert([
            'user_id' => $last_user_id, 'class_id' => 1, 'roll_no' => '11090901']);
        $user1->roles()->attach($role_student);



        $user5 = new User();
        $user5->name = "teacher_two";
        $user5->email = "teacher_two@gmail.com";
        $user5->password = "123456";
        $user5->save();
        $last_user_id = DB::table('users')->latest()->value('id');
        DB::table('user_infos')->insert(['user_id' => $last_user_id]);
        $user1->roles()->attach($role_teacher);


        $user6 = new User();
        $user6->name = "admin_two";
        $user6->email = "admin_two@gmail.com";
        $user6->password = "123456";
        $user6->save();
        $last_user_id = DB::table('users')->latest()->value('id');
         DB::table('user_infos')->insert(['user_id' => $last_user_id]);
        $user3->roles()->attach($role_admin);


    }
}
