<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('task_id');
            $table->integer('user_id')->unsigned();
            $table->integer('stage_id')->unsigned()->nullable();
            $table->integer('project_id')->unsigned();
            //$table->string('state');
            $table->boolean('completed')->default(false);
            $table->text('description');
            $table->timestamps();

           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          //  $table->foreign('stage_id')->references('stage_id')->on('stages')->onDelete('cascade');
          

        });
        
        Schema::table('tasks', function($table)
{
        $table->foreign('user_id')
        ->references('id')->on('users')
        ->onDelete('cascade');

        $table->foreign('stage_id')
        ->references('stage_id')->on('stages')
        ->onDelete('cascade');

        $table->foreign('project_id')
        ->references('project_id')->on('projects')
        ->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
