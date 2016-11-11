<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Classroom;

class ClassRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $class_room1 = new Classroom();
        $class_room1->class_name = "one";
        $class_room1->save(); 
        //
        $class_room2 = new Classroom();
        $class_room2->class_name = "two";
        $class_room2->save(); 
        //
        $class_room3 = new Classroom();
        $class_room3->class_name = "three";
        $class_room3->save(); 

    }
}
