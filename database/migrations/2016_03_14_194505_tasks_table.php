<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task_name');
            $table->dateTime('expected_start_date');
            $table->dateTime('actual_start_date');
            $table->dateTime('expected_end_date');
            $table->dateTime('actual_end_date');
            $table->string('task_desc');
            $table->integer('parent_task_id');
            $table->string('status');
            $table->integer('project_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasks');
    }
}
