<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert(
            [
                'user_id' => "1",
                'project_id' => "1",
                'description' => "Make soup"
            ]);
            DB::table('tasks')->insert([
                'user_id' => "1",
                'project_id' => "1",
                'description' => "Boil water"
            ]
            );
    }
}
