<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'log';

    /**
     * Run the migrations.
     * @table log
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id',45);
            $table->dateTime('tanggal')->nullable();
            $table->string('judul', 45)->nullable();
            $table->string('isi', 45)->nullable();
            $table->string('pemateri', 45)->nullable();
            $table->string('status', 45)->nullable();
            $table->string('users_id', 45);

            $table->index(["users_id"], 'fk_log_users_idx');


            $table->foreign('users_id', 'fk_log_users_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
