<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKdpmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kdpm', function (Blueprint $table) {
            $table->increments('id_kdpm');
            $table->string('nama_kdpm');
            $table->string('username_kdpm')->unique();
            $table->string('password_kdpm');
            $table->string('nrp_kdpm');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kdpm');
    }
}
