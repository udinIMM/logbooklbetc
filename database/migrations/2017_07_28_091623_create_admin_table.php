<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id_admin');
            $table->integer('id_lab')->unsigned();
            $table->string('nama_admin');
            $table->string('username_admin')->unique();
            $table->string('password_admin');
            $table->string('nrp_admin');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('admin', function (Blueprint $table) {
            $table->foreign('id_lab')
            ->references('id_lab')->on('laboratorium')
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
        Schema::dropIfExists('admin');
    }
}
