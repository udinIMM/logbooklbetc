<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogLbeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_lbe', function (Blueprint $table) {
            $table->increments('id_log');
            $table->integer('id_peserta')->unsigned();
            $table->date('tanggal_log');
            $table->string('judul_log');
            $table->string('isi_log',2048);
            $table->string('narasumber_log');
            $table->string('status_log',5);
            $table->timestamps();
        });

        Schema::table('log_lbe', function (Blueprint $table) {
            $table->foreign('id_peserta')
            ->references('id')->on('users')
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
        Schema::dropIfExists('log_lbe');
    }
}
