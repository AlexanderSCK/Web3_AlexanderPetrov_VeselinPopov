<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'name'=> "Project2",
            'deadline'=>"2020-01-27",
            'description'=>"Create laravel project",
            'user_id'=> '1'
        ]);
        DB::table('projects')->insert([
            'name'=> "Project1",
            'deadline'=>"2020-01-27",
            'description'=>"Create laravel project",
            'user_id'=> '1'
        ]);
        DB::table('projects')->insert([
            'name'=> "Project3",
            'deadline'=>"2020-01-27",
            'description'=>"Create laravel project",
            'user_id'=> '2'
        ]);
    }
}
