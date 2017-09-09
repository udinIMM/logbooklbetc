<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id',45);
            $table->string('nama', 45)->nullable();
            $table->string('nrp', 45)->nullable();
            $table->string('password', 45)->nullable();
            $table->string('role', 45)->nullable();
            $table->string('laboratorium_id', 45);

            $table->index(["laboratorium_id"], 'fk_users_laboratorium1_idx');

            $table->unique(["nrp"], 'nrp_UNIQUE');


            $table->foreign('laboratorium_id', 'fk_users_laboratorium1_idx')
                ->references('id')->on('laboratorium')
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
