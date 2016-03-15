<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Contacts and logins for a company
        Schema::create('clients_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('client_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients_users');
    }
}
