<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientsAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //stores any accounts you may need for login purposes
        Schema::create('clients_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_name');
            $table->string('account_password');
            $table->string('account_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients_accounts');
    }
}
