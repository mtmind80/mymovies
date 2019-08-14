<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'Admin User', 'email' => 'adminuser@localhost.com', 'password' => bcrypt('adminuser'), 'is_admin' => true],
            ['id' => 2, 'name' => 'API Client', 'email' => 'apiclient@localhost.com', 'password' => bcrypt('apiclient'), 'is_admin' => false],
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


               DB::table('users')->delete();


    }
}
