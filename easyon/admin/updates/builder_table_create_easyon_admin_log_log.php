<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEasyonAdminLogLog extends Migration
{
    public function up()
    {
        Schema::create('easyon_admin_log_log', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('log_id')->unsigned();
            $table->integer('log_client_id');
            $table->dateTime('log_created_at');
            $table->integer('log_created_usr_id');
            $table->dateTime('log_updated_at');
            $table->integer('log_updated_usr_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('easyon_admin_log_log');
    }
}
